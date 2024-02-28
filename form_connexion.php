<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <br><h5><strong>CONNEXION</strong></h5>
        <h6>Adresse Mail</h6>
        <input type="email" name="mel" placeholder="Mail">
        <h6>Mot de Passe</h6>
        <input type="password" name="motdepasse" placeholder="Mot de Passe">
        <br><input type="submit" name="btn-connexion" class="btn btn-primary btn-sm" value=" &#128275 Connexion"></input>
    </form>
    <?php

        if(isset($_REQUEST['mel'])){
            require_once('connexion.php');
            $mel = $_REQUEST['mel'];
            $motdepasse = $_REQUEST['motdepasse'];
            
            $stmt = $connexion->prepare("SELECT * FROM client WHERE mel=:mel AND motdepasse=:motdepasse");
            $stmt->bindValue(':mel', $mel, PDO::PARAM_STR);
            $stmt->bindValue(':motdepasse', $motdepasse, PDO::PARAM_STR);
            $stmt->setFetchMode(PDO::FETCH_OBJ);
            $stmt->execute();
            $enregistrement = $stmt->fetch();
        if(!$enregistrement){
            echo 'Mel ou mot de passe incorrect';
        } elseif($enregistrement) {
                    echo 'Bienvenue ' .$mel.'';   
        }
    }
?>
</body>
</html>