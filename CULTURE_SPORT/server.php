<!--
Here, we write code for registration.
-->
<?php
     
	 require 'database.php';
 
	 // keep track post values
if ( !empty($_POST)) {

	$matricule = $_POST['matricule'];
$nom = $_POST['nom'];
$prenom= $_POST['prenom'];
$pwd = $_POST['pwd'];
$role= $_POST['role'];


$pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "INSERT INTO admin (matricule,nom,prenom,pwd,role) VALUES (?,?,?,?,?)";
$q = $pdo->prepare($sql);
$q->execute(array($matricule,$nom,$prenom,$pwd,$role));
Database::disconnect();
header("Location: registrationn_user.php");
}








?>