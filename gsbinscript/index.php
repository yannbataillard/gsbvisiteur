
<?php
//Base de donnée
try{
    $db = new PDO('mysql:host=localhost;dbname=gsb','root', '');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(Exception $e){
    echo "Erreur : ".$e;
}
//Inscription
if (isset($_POST['submit'])) {
    $user=$_POST['user'];
    $pass=$_POST['pass'];
    $repeatpass=$_POST['repeatpass'];
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $email=$_POST['email'];
    $pays=$_POST['pays'];
    $adresse=$_POST['adresse'];
    $ville=$_POST['ville'];
    $codepost=$_POST['codepost'];
    $mobile=$_POST['mobile'];
    $poste=$_POST['poste'];
    $date = date('Y/m/d');
    $return = "";

    if(!empty($user) AND !empty($pass) AND !empty($repeatpass) AND !empty($nom) AND !empty($prenom) AND !empty($email) AND !empty($pays) AND !empty($adresse) AND !empty($ville) AND !empty($codepost) AND !empty($mobile) AND !empty($poste)){
        if($pass==$repeatpass){
            if(strlen($user)<=25){     // strlen compte le nombre de caractère
                // Test si il y a déjà un id associé au nom d'utilisateur donnée. 
                $TestUser = $db->query("SELECT id FROM utilisateurs WHERE nom_utilisateur='$user'");
                // Donc savoir si le nom d'utilisateur à déjà été utilisé
                if($TestUser->rowCount() < 1){
                    $pass = sha1($pass);
                    $sql = "INSERT INTO utilisateurs(nom_utilisateur, mot_de_passe, nom, prenom, email, pays, adresse, ville, codepost, mobile, poste, dateInscription) VALUES (:user, :pass, :nom, :prenom, :email, :pays, :adresse, :ville, :codepost, :mobile, :poste, :dateInscription)";
                    $req = $db->prepare($sql);  
                    $req->execute(array(
                        'user' => $user,
                        'pass' => $pass,
                        'nom' => $nom,
                        'prenom' => $prenom,
                        'email' => $email,
                        'pays' => $pays,
                        'adresse' => $adresse,
                        'ville' => $ville,
                        'codepost' => $codepost,
                        'mobile' => $mobile,
                        'poste' => $poste,
                        'dateInscription' => date('Y/m/d'),
                    ));
                    header('Location: connect.php');

                }else $return = "Votre nom d'utilisateur est déjà utilisée.";
                echo $return;
            }else $return = "Votre nom d'utilisateur ne doit pas dépasser 25 caractères";
            echo $return;
        }else $return = "Les deux mots de passe de correspondent pas.";
        echo $return;
    }else $return = "Un ou plusieurs champs est manquant.";
    echo $return;
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


    <div style="margin-top: 0%" class="gsbtitre">
        <h2>GSB</h2>
        <br>
        <h1 style="margin: 0">Administration</h1>
        <?php 
            // afficher le(s) message(s) d'erreur(s)
            if(isset($_POST['submit']) AND isset($return)){ 
                ?> <p style="color:#FF0000"><?php echo $return; ?></p>
                <?php  

            } ?>
    <!-- <div class="container"> -->
        
    <div class="container">

        <form style= "padding: 20px 0;" method="POST" action="">
        <div class="col-md-6">
            <input type="text" name="user" placeholder="Nom d'utilisateur" required>
            <input type="password" name="pass" placeholder="Mot de passe" required>
            <input type="password" name="repeatpass" placeholder="Répetez le mot de passe">
        </div>
        <br>
        <div class="col-md-6">
            <input type="text" name="nom" placeholder="Nom" required>
            <input type="text" name="prenom" placeholder="Prénom" required>
            <input type="email" name="email" placeholder="E-mail" required>
        </div>
        <br>
        <div class="col-md-6">
            <input type="text" name="pays" placeholder="Pays" required>
            <input type="text" name="adresse" placeholder="Adresse" required>
            <input type="text" name="ville" placeholder="Ville" required>
        </div>
        <br>
        <div class="col-md-6">
            <input type="number" name="codepost" placeholder="Code postale" required>
            <input type="number" name="mobile" placeholder="Mobile" required>
            <select name="poste" placeholder="Poste" required>
                <option>Choix du poste
                <option>Visiteur
                <option>Comptable
            </select>
            
        </div>
            
            <br>
            <button type="submit" id='submit' name="submit">Inscription du compte</button>
        </div>


     


</body>
</html>