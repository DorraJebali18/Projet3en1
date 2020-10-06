<?php
    require 'database.php';
 
    $idpilates = null;
    if ( !empty($_GET['idpilates'])) {
        $idpilates = $_REQUEST['idpilates'];
    }
     
    if ( !empty($_POST)) {
        // keep track post values
$idpilates = $_POST['idpilates'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$phone  = $_POST['phone'];
  $mail = $_POST['mail'];
$datein = $_POST['datein'];
$dateout  = $_POST['dateout'];
         
        $pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "UPDATE pilates  set  nom = ?, prenom = ?, phone = ?, mail = ?, datein = ?, dateout = ? WHERE idpilates= ?";
		$q = $pdo->prepare($sql);
		$q->execute(array($nom,$prenom,$phone,$mail,$datein,$dateout,$idpilates));
		Database::disconnect();
		header("Location: pilates_data.php");
    }
?>