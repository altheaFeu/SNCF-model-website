<?php

    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=projet_html;charset=utf8', 'root', '');
    }catch(PDOException $e)
    {
        die('Erreur : '.$e->getMessage());
    }

?>