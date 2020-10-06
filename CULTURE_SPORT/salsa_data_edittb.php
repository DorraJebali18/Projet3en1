<?php
    require 'database.php';
 
    $idsalsa = null;
    if ( !empty($_GET['idsalsa'])) {
        $idprod = $_REQUEST['idsalsa'];
    }
     
    if ( !empty($_POST)) {
        // keep track post values
$idsalsa = $_POST['idsalsa'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$phone  = $_POST['phone'];
  $mail = $_POST['mail'];
$datein = $_POST['datein'];
$dateout  = $_POST['dateout'];
         
        $pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "UPDATE salsa  set  nom = ?, prenom = ?, phone = ?, mail = ?, datein = ?, dateout = ? WHERE idsalsa= ?";
		$q = $pdo->prepare($sql);
		$q->execute(array($nom,$prenom,$phone,$mail,$datein,$dateout,$idsalsa));
		Database::disconnect();
		header("Location: salsa_data.php");
    }
?>