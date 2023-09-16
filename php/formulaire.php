<!doctype html lang="fr">

<html>
    <head>
        
        <meta charset="utf-8" content="Page des contacts">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SNCF Malveillance | Formulaire</title>
        <link rel="icon" sizes="any" href="../img/logos/sncf_reseau.ico" type="image/x-icon"/>
        
        
        <link rel="stylesheet" href="../css/global-variable/global-acceuil.css" media="all">
        <link rel="stylesheet" href="../css/header.css" media="all">
        <link rel="stylesheet" href="../css/footer.css" media="all">
        <link rel="stylesheet" href="../css/polices.css" media="all">
        <link rel="stylesheet" href="../css/main-text/main-formulaire.css" media="all">

        
        <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

        
        <script src="../js/jquery-3.6.3.min.js"></script>
        
        
        <script src="../js/back2top/back2top.js" defer></script>
        <link rel="stylesheet" href="../css/back2top.css" media="all">

        
        <script src="../js/eye.js" defer></script>

        
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js" defer></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js" defer></script>
    </head>

    <body>
        <header>
            <!-- Header de gauche avec juste le bouton de connexion-->
            <div class="header-left">
                <a href="./index.php"><ion-icon name="person-circle-outline" id="search-check" class="icon-connexion" style="font-size:50px;"></ion-icon></a>
            </div>
        </header>

        <main>
            <div class="info-mail">
                <p>Bienvenue à la SNCF Réseau. Un e-mail vous sera envoyé une fois le formulaire rempli et envoyé pour confirmer votre insription </p>
            </div>

            <div class="formulaire">
                <h3>Formulaire employé</h3>
                <p>
                    Le formulaire employé a pour objectif de mieux comprendre ces employés et de pouvoir réaliser des études sur le personnel de la SNCF.
                    Merci de remplir les champs nécessaires...
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga id aspernatur animi hic illo perspiciatis aliquid culpa voluptatibus, quod soluta quaerat enim corrupti maiores? Pariatur natus sequi libero ut maiores!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga id aspernatur animi hic illo perspiciatis aliquid culpa voluptatibus, quod soluta quaerat enim corrupti maiores? Pariatur natus sequi libero ut maiores!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga id aspernatur animi hic illo perspiciatis aliquid culpa voluptatibus, quod soluta quaerat enim corrupti maiores? Pariatur natus sequi libero ut maiores!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga id aspernatur animi hic illo perspiciatis aliquid culpa voluptatibus, quod soluta quaerat enim corrupti maiores? Pariatur natus sequi libero ut maiores!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga id aspernatur animi hic illo perspiciatis aliquid culpa voluptatibus, quod soluta quaerat enim corrupti maiores? Pariatur natus sequi libero ut maiores!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga id aspernatur animi hic illo perspiciatis aliquid culpa voluptatibus, quod soluta quaerat enim corrupti maiores? Pariatur natus sequi libero ut maiores!
                </p>

                <?php 
                    //Gestion des alertes
                    if(isset($_GET['reg_err']))
                    {
                        $err = htmlspecialchars($_GET['reg_err']);

                        switch($err)
                        {
                            case 'success':
                            ?>
                                <div class="alert alert-success">
                                    <strong>Succès</strong> inscription réussie !
                                </div>
                            <?php
                            break;

                            case 'password':
                            ?>
                                <div class="alert alert-danger">
                                    <strong>Erreur</strong> mot de passe différent
                                </div>
                            <?php
                            break;

                            case 'email':
                            ?>
                                <div class="alert alert-danger">
                                    <strong>Erreur</strong> email non valide
                                </div>
                            <?php
                            break;

                        case 'email_length':
                            ?>
                                <div class="alert alert-danger">
                                    <strong>Erreur</strong> email trop long
                                </div>
                            <?php 
                            break;
    
                            case 'cp_length':
                            ?>
                                <div class="alert alert-danger">
                                    <strong>Erreur</strong> cp trop long
                                </div>
                            <?php 
                            case 'already':
                            ?>
                                <div class="alert alert-danger">
                                    <strong>Erreur</strong> compte deja existant
                                </div>
                            <?php 
    
                        }
                    }
                ?>
                <form action="./inscription_traitement.php" method="post"> 
                    <h3>Veuillez indiquer votre nom, votre prénom, votre numéro de CP et votre mot de passe</h3>
                    
                    <label for="nom">Nom : </label>
                    <input type="text" name="nom" id="nom" required/><br>
                    <label for="prenom">Prénom :</label> 
                    <input type="text" name="prenom" id="prenom" required/><br>
                    
                    
                    <label for="cp">CP : </label>
                    <input type="text" name="cp" id="cp" pattern="[0-9]{7}[A-Z]{1}" required/><br>
                    <label for="email">E-mail SNCF : </label>
                    <input type="email" name="email" id="email" pattern="\w{1,100}[\.]\w{1,100}@reseau[\.]sncf[\.]fr?$" required/><br>
                    <label for="password">Mot de passe : </label>
                    <input type="password" name="password" id="password" required/>
                    <i class="fa-solid fa-eye" id="eye"></i><br>
                    <label for="password">Retapez le mot de passe : </label>
                    <input type="password" name="password_retype" id="password" required/><br><br>

                    <button type="submit">Envoyer</button>
                </form>
            </div>
        </main> 
        <footer>
            
            <div name="image-footer">
                
                <img src="../img/illustrations/zebras.png" class="center-image" style="filter: invert(26%) sepia(93%) saturate(1711%) hue-rotate(174deg) brightness(96%) contrast(102%);" type="image/png"/>
            </div>

            
            <div class="footer">
                <div class="footer_left">
                    <a href="https://www.sncf.com/fr"><img class="sncf-logo" src="../img/logos/sncf.png" alt="logo" type="image/png"/></a>
                </div>
    
                <div class="footer_right">
                    <nav>
                        <a href="../pages-site/contact.html" target="_blank"> 
                            <span>
                                Nous contactez
                            </span>
                        </a>
    
                        <a href="../pages-site/cookies.html" target="_blank"> 
                            <span>
                                Données personnelles et cookies
                            </span>
                        </a>
    
                        <a href="../pages-site/cgu.html" target="_blank"> 
                            <span>
                                Mentions légales et CGU
                            </span>
                        </a>
                    </nav>
                </div>
            </div>
        </footer>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>