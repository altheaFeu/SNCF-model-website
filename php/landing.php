<?php 
    session_start();
    require_once 'config.php'; // ajout connexion bdd 
   // si la session existe pas soit si l'on est pas connecté on redirige
    if(!isset($_SESSION['user'])){
        header('Location:index.php');
        die();
    }

    // On récupere les données de l'utilisateur
    $req = $bdd->prepare('SELECT * FROM utilisateurs WHERE email = ?');
    $req->execute(array($_SESSION['user']));
    $data = $req->fetch();
   
?>
<!doctype html>
<html lang="fr">
  <head>
    <!-- Paramétrage du site -->
    <meta charset="utf-8" content="Page des contacts">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SNCF Malveillance | Connexion ! </title>
        <link rel="icon" sizes="any" href="../img/logos/sncf_reseau.ico" type="image/x-icon"/>
        
        <!-- CSS -->
        <link rel="stylesheet" href="../css/main-text/main-connecte.css" media="all">
        <link rel="stylesheet" href="../css/polices.css" media="all">

        <!-- Importation de jquery -->
        <script src="../js/jquery-3.6.3.min.js"></script>
        
        <!-- JS nécessaires pour utiliser les ionicons : https://ionic.io/ionicons -->
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js" defer></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js" defer></script>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <main>
            <div class="container">
                    <h1>Vous êtes connecté !</h1><br><br>
                    <a href="deconnexion.php" class="btn btn-danger btn-lg">Déconnexion</a>
                </div>
            </div>    
                                
        </main>

  </body>
</html>