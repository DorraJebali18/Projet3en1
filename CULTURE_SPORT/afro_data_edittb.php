<?php
    require 'database.php';
 
    $idafro = null;
    if ( !empty($_GET['idafro'])) {
        $idafro = $_REQUEST['idafro'];
    }
     
    if ( !empty($_POST)) {
        // keep track post values
$idafro = $_POST['idafro'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$phone  = $_POST['phone'];
  $mail = $_POST['mail'];
$datein = $_POST['datein'];
$dateout  = $_POST['dateout'];
         
        $pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "UPDATE afro  set  nom = ?, prenom = ?, phone = ?, mail = ?, datein = ?, dateout = ? WHERE idafro= ?";
		$q = $pdo->prepare($sql);
		$q->execute(array($nom,$prenom,$phone,$mail,$datein,$dateout,$idafro));
		Database::disconnect();
		header("Location: afro_data.php");
    }
?>