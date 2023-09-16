<?php
    session_start(); 
    require_once 'config.php';

    //If all these entries are filled in
    if(isset($_POST['cp']) && isset($_POST['email']) && $_POST['password'])
    {
        $cp = htmlspecialchars($_POST['cp']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        
        // Email transformed into lower case
        $email = strtolower($email);

        // Verify if CP exist
        $check = $bdd->prepare('SELECT cp, email, password FROM utilisateurs WHERE email = ?');
        $check->execute(array($email));
        $data = $check->fetch();
        $row = $check->rowCount();

        // Checks if the person exists and the password matches
        if($row > 0)
        {
            // If the email is verified
            if(filter_var($email, FILTER_VALIDATE_EMAIL))
            {

                // If the password is good
                if(password_verify($password, $data['password']))
                {
                    //Session creation and redirection to landing.php
                    $_SESSION['user'] = $data['cp'];
                    header('Location:landing.php');
                }else{ header('Location: index.php?login_err=password'); die(); }
            }else{ header('Location: index.php?login_err=email'); die(); }
        }else{ header('Location: index.php?login_err=already'); die(); }
    
    }else{ header('Location: index.php'); die();}