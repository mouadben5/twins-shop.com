<?php

$msg = "";
if(isset($_POST['login']))
{
  if($_POST['email'] != "" && $_POST['password'] != "") {
    require_once("connection.php");
    $req="SELECT * from user where email like '{$_POST['email']}'and mdp like '{$_POST['password']}'";
    $res=$db->query($req);
    if ($res!=NULL && $res->rowCount()==1)
      {
      session_start();
        $_SESSION['utilisateur']=$res->fetch(PDO::FETCH_ASSOC);
        header("location:home_page.php");
        $msg = 'success';
      }
      else {
        $msg = 'Error';
      }
  }
  else {
    $msg = 'Tous les champs obligatoire!!!';
  }


}




?>


<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>SE CONNECTER</title>
  <link rel="stylesheet" href="css/admin.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div id="bg"></div>

<form action="login.php" method="post">
  <div class="form-field">
    <input type="email" name="email" placeholder="Email / Username" required/>
  </div>
  
  <div class="form-field">
    <input type="password" name ="password"  placeholder="Password" required/>           
  </div>
  
  <div class="form-field">
    <button class="btn" name="login" type="submit">Log in</button>
  </div>
</form>
<!-- partial -->
  
</body>
</html>



