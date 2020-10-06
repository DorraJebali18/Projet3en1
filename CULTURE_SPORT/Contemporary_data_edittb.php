<?php
    require 'database.php';
 
    $idContemporary = null;
    if ( !empty($_GET['idContemporary'])) {
        $idContemporary = $_REQUEST['idContemporary'];
    }
     
    if ( !empty($_POST)) {
        // keep track post values
$idContemporary = $_POST['idContemporary'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$phone  = $_POST['phone'];
  $mail = $_POST['mail'];
$datein = $_POST['datein'];
$dateout  = $_POST['dateout'];
         
        $pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "UPDATE Contemporary  set  nom = ?, prenom = ?, phone = ?, mail = ?, datein = ?, dateout = ? WHERE idContemporary= ?";
		$q = $pdo->prepare($sql);
		$q->execute(array($nom,$prenom,$phone,$mail,$datein,$dateout,$idContemporary));
		Database::disconnect();
		header("Location: Contemporary_data.php");
    }
?>