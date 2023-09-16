<?php
    require_once 'config.php';
    //Si toutes les conditions sont remplies et que les variables existent
    if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['cp']) && isset($_POST['email']) && $_POST['password'] && $_POST['password_retype'])
    {
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $cp = htmlspecialchars($_POST['cp']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        $password_retype = htmlspecialchars($_POST['password_retype']);

        //Vérification de l'existance de l'utilisateur
        $check = $bdd->prepare('SELECT cp, email, password FROM utilisateurs WHERE email = ?');
        $check->execute(array($email));
        $data = $check->fetch();
        $row = $check->rowCount();

        // On transforme les lettres majuscules en minuscules pour 
        // éviter que A.F@reseau.sncf.fr et a.f@reseau.sncf.fr soient
        // 2 comptes différentes
        $email = strtolower($email); 

        //Vérification de la longueur des champs
        if($row == 0){ 
            if(strlen($cp) <= 100){
                if(strlen($email) <= 100){
                    //Vérifie si c'est un email
                    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                        if($password === $password_retype){ 
                            // On hash le mdp avec Bcrypt
                            $cost = ['cost' => 12];
                            $password = password_hash($password, PASSWORD_BCRYPT, $cost);

                            // Stockage de l'adresse IP
                            // $ip = $_SERVER['REMOTE_ADDR'];

                            // Utilisation d'un tableau associatif
                            $insert = $bdd->prepare('INSERT INTO utilisateurs(nom, prenom, cp, email, password) VALUES(:nom, :prenom, :cp, :email, :password)');
                            $insert->execute(array(
                                'nom' => $nom,
                                'prenom' => $prenom,
                                'cp' => $cp,
                                'email' => $email,
                                'password' => $password,
                                // 'ip' => $ip
                            ));

                            header('Location:formulaire.php?reg_err=success');
                            die();
                            
                        }else{ header('Location: formulaire.php?reg_err=password'); die();}
                    }else{ header('Location: formulaire.php?reg_err=email'); die();}
                }else{ header('Location: formulaire.php?reg_err=email_length'); die();}
            }else{ header('Location: formulaire.php?reg_err=pseudo_length'); die();}
        }else{ header('Location: formulaire.php?reg_err=already'); die();}
    }
?>