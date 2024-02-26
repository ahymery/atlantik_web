<?php
    try{
        $dns = "mysql:host=localhost;dbname=atlantik";
        $user = "root";
        $mdp = "";
        $connexion = new PDO($dns, $user, $mdp);
        echo "Connexion a la base de données réussi";
    }
    catch (Exception $e) {
        echo "Connexion à la base de donnée impossible", $e->GetMessage();
        die();
    }
?>