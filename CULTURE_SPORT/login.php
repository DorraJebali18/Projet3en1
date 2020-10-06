
<?php

#specifier les informations pour la connection
session_start();
$bdd = 'bdinscript';
$host = "localhost" ;
$user = "root" ;
$mdp = "" ;

//Connexion à la base de donnée
$cnx=mysqli_connect($host, $user, $mdp,$bdd) or die("Impossible de se connecter au serveur.");
//mysql_select_db($bdd) or die("Cette base de donnees n'existe pas");


//$query= "select * from admin where login='".$login."' and password='".$pass.'";
//$query= "select * from admin where username='".$login."' and password='".$pass."'";
//$result = mysqli_query($query);
$message="";
$role="";
//if(isset($_POST["login-btn"]))
//{
	
$nom= "";
$pwd="";
	if(isset($_POST['nom'])){
		$nom= $_POST['nom'];
		$pwd=$_POST['pwd'];
		//$role=$_POST['role'];
	}

//}
   $query = "select * from admin where nom='".$nom."' and pwd='".$pwd."' ";
	$result= mysqli_query($cnx,$query);
	if(mysqli_num_rows($result)>0)
	{
		$row = mysqli_fetch_assoc($result);
		$_SESSION['id_user'] =$row["nom"];
		$_SESSION['role'] =$row["role"];
		//header("Location : home.php");

		header('Location: ./salsa_data.php');

		//echo "bla bla";
		
	}
	
	// else{
		
	     // header("Location : login11.php");
	// }
	// }
	
	// Vérification du résultat
	// Ceci montre la requête envoyée à MySQL ainsi que l'erreur. Utile pour déboguer.
	// if (!$result) {
	   // $message  = 'Requête invalide : ' . mysqli_error() . "\n";
	   // $message .= 'Requête complète : ' . $query;
	   // die($message);
	// }
	// $nblignes=mysqli_num_rows($result);
	// if ($nblignes==0) 

	 // {
		//echo "<CENTER><big> Identification invalide, veuillez reessayer </big></CENTER>";
		// mysqli_close($cnx);
		// include ('login11.php');
	// }
	// else
	// include ('home.php');
?> 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" />
  <link rel="stylesheet" href="main.css">
  <title>Login</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-4 offset-md-4 form-wrapper auth login">
        <h3 class="text-center form-title">Login</h3>
		
        <form action="login.php" method="post">
          <div class="form-group">
            <label>Nom </label>
            <input type="text" name="nom" class="form-control form-control-lg">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" name="pwd" class="form-control form-control-lg">
          </div>
		  <p>
		 
		  </p>
          <div class="form-group">
            <button type="submit" name="login" class="btn btn-lg btn-block">Login</button>
          </div>
        </form>
	
		
      </div>
    </div>
  </div>
</body>
</html>