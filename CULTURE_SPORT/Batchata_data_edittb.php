<?php
    require 'database.php';
 
    $idBatchata = null;
    if ( !empty($_GET['idBatchata'])) {
        $idBatchata = $_REQUEST['idBatchata'];
    }
     
    if ( !empty($_POST)) {
        // keep track post values
$idBatchata = $_POST['idBatchata'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$phone  = $_POST['phone'];
  $mail = $_POST['mail'];
$datein = $_POST['datein'];
$dateout  = $_POST['dateout'];
         
        $pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "UPDATE Batchata  set  nom = ?, prenom = ?, phone = ?, mail = ?, datein = ?, dateout = ? WHERE idBatchata= ?";
		$q = $pdo->prepare($sql);
		$q->execute(array($nom,$prenom,$phone,$mail,$datein,$dateout,$idBatchata));
		Database::disconnect();
		header("Location: Batchata_data.php");
    }
?>