<?php
     
    require 'database.php';
 
    if ( !empty($_POST)) {
        // keep track post values
        $idsalsa = $_POST['idsalsa'];
		$nom = $_POST['nom'];
		$prenom = $_POST['prenom'];
        $phone = $_POST['phone'];
        $mail = $_POST['mail'];
         $datein= $_POST['datein'];
        $dateout = $_POST['dateout'];
		// insert data
        $pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "INSERT INTO salsa (idsalsa,nom,prenom,phone,mail,datein,dateout) values(?, ?, ?, ?, ?, ?, ?)";
		$q = $pdo->prepare($sql);
		$q->execute(array($idsalsa,$nom,$prenom,$phone,$mail,$datein,$dateout));
		Database::disconnect();
		header("Location: Index.html");
    }
?>