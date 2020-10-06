<?php
    require 'database.php';
 
    $idKizomba = null;
    if ( !empty($_GET['idKizomba'])) {
        $idKizomba = $_REQUEST['idKizomba'];
    }
     
    if ( !empty($_POST)) {
        // keep track post values
$idKizomba = $_POST['idKizomba'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$phone  = $_POST['phone'];
  $mail = $_POST['mail'];
$datein = $_POST['datein'];
$dateout  = $_POST['dateout'];
         
        $pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "UPDATE Kizomba  set  nom = ?, prenom = ?, phone = ?, mail = ?, datein = ?, dateout = ? WHERE idKizomba= ?";
		$q = $pdo->prepare($sql);
		$q->execute(array($nom,$prenom,$phone,$mail,$datein,$dateout,$idKizomba));
		Database::disconnect();
		header("Location: Kizomba_data.php");
    }
?>