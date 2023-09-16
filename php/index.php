<!doctype html lang="fr">

<html>
    <head>
        
        <meta charset="utf-8" content="Page des contacts">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SNCF Malveillance | Connexion</title>
        <link rel="icon" sizes="any" href="../img/logos/sncf_reseau.ico" type="image/x-icon"/>
        
        
        <link rel="stylesheet" href="../css/global-variable/global-acceuil.css" media="all">
        <link rel="stylesheet" href="../css/header.css" media="all">
        <link rel="stylesheet" href="../css/footer.css" media="all">
        <link rel="stylesheet" href="../css/polices.css" media="all">
        <link rel="stylesheet" href="../css/main-text/main-connexion.css" media="all">

        
        <script src="../js/jquery-3.6.3.min.js"></script>
        
                
        <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        
        
        <script src="../js/back2top/back2top.js" defer></script>
        <link rel="stylesheet" href="../css/back2top.css" media="all">

        
        <script src="../js/searchbar/active-searchbar.js" type="text/javascript" defer></script>
        <script src="../js/searchbar/suggestions.js" defer></script>
        <script src="../js/searchbar/automate-searchbar.js" defer></script>
        <script src="../js/searchbar/send-research.js" defer></script>

        
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js" defer></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js" defer></script>
    </head>

    <body>

        <header>
            
            <div class="header-left">
                <a href="https://www.sncf-reseau.com/fr"><img class="sncf-reseau-logo" src="../img/logos/LOGO_SNCF_RESEAU_WEB.png" alt="logo"></a>
            </div>
        </header>

        <main>
            <div class="boite-connexion">
                <p class="titre">Authentification</p>

                <?php
                    if(isset($_GET['login_err']))
                    {
                        $err = htmlspecialchars($_GET['login_err']);

                        switch($err)
                        {
                            case 'cp':
                                ?>
                                    <div class="alert alert-danger">
                                        <strong>Erreur</strong> CP incorrect
                                    </div>
                                <?php
                            break;
                            
                            case 'password':
                            ?>
                                <div class="alert alert-danger">
                                    <strong>Erreur</strong> mot de passe incorrect
                                </div>
                            <?php
                            break;

                            case 'email':
                            ?>
                                <div class="alert alert-danger">
                                    <strong>Erreur</strong> email incorrect
                                </div>
                            <?php
                            break;

                            case 'already':
                            ?>
                                <div class="alert alert-danger">
                                    <strong>Erreur</strong> compte non existant
                                </div>
                            <?php
                            break;
                        }
                    }
                ?>
                <form action="./connexion.php" method="post"> 
                    
                    <label for="cp">CP : </label><br>
                    <input type="text" name="cp" id="cp" pattern="[0-9]{7}[A-Z]{1}" required/><br>
                    <label for="email">E-mail SNCF : </label><br>
                    <input type="email" name="email" id="email" pattern="\w{1,100}[\.]\w{1,100}@reseau[\.]sncf[\.]fr?$" required/><br>
                    <label for="password">Mot de passe : </label><br>
                    <input type="password" name="password" id="password" required/><br>
                    <button type="submit">Connexion</button>
                    <br><br>
                <p>OU</p>
                <div class="inscription">
                    <a href="./formulaire.php"><span>Inscrivez-vous !</span></a>
                </div>
            </div>
        </main>

        <footer>
            
            <div name="image-footer">
                <!-- Pour appliquer le filtre et la bonne couleur : 
                 -->
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
    </body>
</html>