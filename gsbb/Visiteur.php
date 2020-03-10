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
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Saisie des frais</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="Consult.css">
    <link rel="stylesheet" href="visiteur.css">
    


</head>
<body>
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
                <a class="nav-link" href="#">Saisie de frais<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="visiteur2.php">Consulter ses frais</a>
              </li>
              <li class="nav-item dropdown">
              </li>
            </ul>
          </div>
        </nav>
      </div>

    <h1 style="text-align: center;">SAISIE DES FRAIS</h1>
    <div class="ZoneSaisie">
        <div class="periodeEngagement">
            <form method="POST" action="traitement.php">
                <label for="periodeEngagement">Date de la saisie</label><br>
                <input type="date" name="periodeEngagement" id="periodeEngagement">
        
            </form>   
        </div> 
            <br>
            <br>
        <div class="fraisForfait">
            <h3>Frais au forfait</h3>
            <form  method="POST" action="traitement.php">
                <label for="repasMidi">Repas midi </label><br>
                <input type="text" name="repasMidi" id="repasMidi"> <br>
                <label for="Nuitees">Nuitées</label> <br>
                <input type="text" name="Nuitees" id="Nuitees"> <br>
                <label for="text">Kilometrage</label><br>
                <input type="text" name="Km" id="Km"><br>
            </form>
        </div>
        <br>
        <br>  
       
        
        <div class="HorsForfait"> 
            <h3>Hors Forfait</h3>
            <form method="POST" action="traitement.php">


                <div class="flex">
                    <div class="flex__elem">
                        <div class="block">
                            <div class="label">
                                <label for="">Date</label>
                            </div>
                            <div class="label">
                                <label for="">Libelle</label>
                            </div>
                            <div class="label">
                                <label for="">Montant</label>
                            </div>
                        </div>
                
                
                        <div class="block">
                            <label class="titre">1 :</label>
                            <input type="text" name="date1" id="date" class="zone">
                            <input type="text" name="libelle1" id="libelle" class="zone">
                            <input type="text" name="montant1" id="montant" size="12" class="zone">
        
                            <input type="button" id="but1" value="+" onclick="ajoutLigne(1);" class="zone" />                    
                        </div>
                        <div id="lignes" class="block">

                        </div>
                    </div>
                </div>
            </form>
        </div>


        


        <input class="boutton"type="submit" value="Valider" onclick="valider()">
    </div>








    
    <script src="anim.js"></script>
</body>
</html>