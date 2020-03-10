<?php
session_start();
try{
    $db = new PDO('mysql:host=localhost;dbname=gsb','root', '');
} catch(Exception $e){
    echo "Erreur : ".$e;
}


if(isset($_POST['connect'])) {
   $user=$_POST['user'];
   $pass=sha1($_POST['pass']);
   
   if(!empty($user) AND !empty($pass)) {
      $VerifUser = $db->query("SELECT * FROM utilisateurs WHERE nom_utilisateur='$user' AND mot_de_passe='$pass'");
      $UserData = $VerifUser->fetch();
      if($VerifUser->rowCount() == 1){
          $_SESSION['login'] = $UserData['nom_utilisateur'];
          $_SESSION['name'] = $UserData['nom'];
          $_SESSION['firstname'] = $UserData['prenom'];
          $poste=$UserData['poste'];
          if($poste=='Visiteur'){
                header('Location: gsbvisiteur/Visiteur.html');
          }else header('Location: principale.php');
            
      }else $return = "Les identifiants sont invalides.";
   }
}
?>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/megrim" type="text/css"/>
    <title>Page Comptable</title>
</head>
<body>

<div class="wrapper">
    <div class="gsbtitre">
        <h2>GSB</h2>
        <br>
        <h1>Connexion</h1>
        <?php if(isset($_POST['connect']) AND isset($return)){ 
                ?> <p style="color:#FF0000"><?php echo $return; ?></p>
                <?php  
              } ?>
    </div>


    <div class="container">


        <form action="#" method="POST">
            <input type="text" name="user" placeholder="Nom d'utilisateur" required>
            <input type="password" name="pass" placeholder="Mot de passe" required>
            <button type="submit" id='submit' name='connect' value='LOGIN'>Connection</button>
           

        </form>
    </div>

    <ul class="bg-bubbles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
</div>


</body>
</html>