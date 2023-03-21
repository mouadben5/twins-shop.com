<?php
require_once("connection.php");
try{
// Si le formulaire a été soumis
if (isset($_POST['submit'])) {
  // Récupération des champs du formulaire
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $email = $_POST['email'];
  $mdp = $_POST['mot_de_passe'];
  $adr = $_POST['adresse'];
  $tele = $_POST['telephone'];
  $age = $_POST['age'];
  $date = $_POST['date_de_naissance'];
  $cin = $_POST['cin'];

  
  // Requête d'insertion
  $req = "INSERT INTO user (nom,prenom, email,mdp,adresse,telephone,age,ane,cin,img) VALUES ('$nom','$prenom','$email','$mdp','$adr','$tele','$age','$date','$cin')";

  // Exécution de la requête
    $res=$db->query($req);
    if ($res!=NULL && $res->rowCount()==1)

   {
    $message = "Utilisateur ajouté avec succès go to to home page to log in";
  } else {
    $message = "Erreur lors de l'ajout de l'utilisateur : " . mysqli_error($db);
  }
}
}
catch(PDOException $ex) {
  echo "Error :". $ex-> getMessage();
}
?>

<!DOCTYPE html>
<html>
  <head>
        <link rel="stylesheet" type="text/css" href="css/add.css">

    <meta charset="UTF-8">
    <title>Formulaire d'inscription</title>

    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap"
      rel="stylesheet"
    />

  </head>
  <body>
    <div class="signup-box">
      <h1>Sign Up</h1>
      <h4>It's free and only takes a minute</h4>
          <form action="addUser.php" method="post">

        <label>First Name</label>
        <input type="text" name="nom" placeholder="" />
        <label>Last Name</label>
        <input type="text" name="prenom" placeholder="" />
        <label>Email</label>
        <input type="email" name="email" placeholder="" />
        <label>Password</label>
        <input type="password" name="mot_de_passe" placeholder="" />
        <label>Adresse</label>
        <input type="text" name="adresse" placeholder="" />
        <label>Telephone</label>
        <input type="text" name="telephone" placeholder="" />
        <label>Age</label>
        <input type="text" name="age" placeholder="" />
        <label>Anne de nais</label>
        <input type="DATE" name="date_de_naissance" placeholder="" />
        <label>cin</label>
        <input type="text" name="cin" placeholder="" />
        <input type="submit" name="submit" value="Submit" />
      <closeform></closeform></form>
      <p>
        By clicking the Sign Up button,you agree to our <br />
        <a href="#">Terms and Condition</a> and <a href="#">Policy Privacy</a>
      </p>
    </div>
    <p class="para-2">
      Already have an account? <a href="login.php">Login here</a>
    </p>
  </form>
</body>
</html>