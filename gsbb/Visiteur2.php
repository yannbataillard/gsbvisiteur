<?php
session_start();
// test si la valeur session login est existante
// si non : renvoie sur la page de connexion
if(!isset($_SESSION['login'])){
    header('location: ../login.php');
// si oui : recupere les variables de SESSION de login.php, 
// donc si tu relance ton navigateur tu n'aura pas acces à cette page (pour sécuriser)
}else{
    $user=$_SESSION['login'];
    $nom=$_SESSION['name'];
    $prenom=$_SESSION['firstname'];
    
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Consultation des frais</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="Consult.css">
    


</head>
<body style="text-align:center">
    <div>
      
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <img src="img/p8.png">   
        <a class="navbar-brand" >Visiteur</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Consulter ses frais<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Visiteur.php">Saisir ses frais</a> 

          </ul>
        </div>
      </nav>
    </div>

    <div class="shadow p-3 mb-5 "Regular shadow style="margin: 8%;">
        <table class="table table-striped table-dark">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Date</th>
                <th scope="col">Montant</th>
                <th scope="col">Statut</th>
              </tr>
            </thead>
            <tbody>
              <tr class="FichesFrais" id="Fiche1">
                <th scope="row">1</th>
                <td>12/11/20</td>
                <td>50€</td>
                <td>Remboursé</td>
              </tr>
              <tr class="FicheFrais" id="Fiche2">
                <th scope="row">2</th>
                <td>12/12/20</td>
                <td>50€</td>
                <td>En cours</td>
              </tr>
            </tbody>
          </table>
    </div>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="anim.js"></script>
</body>
</html>