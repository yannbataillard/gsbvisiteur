<?php

$userID="";

session_start();
//test si la valeur session login est existante
//si non : renvoie sur la page de connexion
if(!isset($_SESSION['login'])){
    header('location: login.php');
//si oui : recupere les variables de SESSION de login.php, donc si tu relance ton navigateur tu n'aura pas acces à cette page (pour sécuriser)
}else{
    $user=$_SESSION['login'];
    $nom=$_SESSION['name'];
    $prenom=$_SESSION['firstname'];
    
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
        <h1>Espace Comptabilité</h1>
        <p>Bonjour, bienvenue <?php echo $prenom; ?> <?php echo $nom ?>.</p>
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




<!-- <html> 
<head>
    <meta charset="utf-8">
    importer le fichier de style 
    <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
</head>
<body style='background:#fff;'>
<div id="content">
     //tester si l'utilisateur est connecté 
    //<?php
   // session_start();
   // if($_SESSION['username'] !== ""){
      //  $user = $_SESSION['username'];
        // afficher un message
      //  echo "Bonjour $user, vous êtes connecté";
    
    //?>

</div>
</body>
</html>

-->