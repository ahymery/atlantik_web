<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atlantik | ACCUEIL</title>
</head>
<body>
<?php session_start();?>
    <div class="container-fluid">
    <div class="row">
      <div class="col-sm-8 col-md-12">
        <?php
          include "entete.html";
        ?>          
      </div> 
    </div>
    <div class="col-md-4">
        <?php
            require_once 'connexion.php';
            include 'form_connexion.php';
        ?>
    </div>  
</body>
</html>