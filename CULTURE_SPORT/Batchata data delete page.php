<?php
    require 'database.php';
    $idBatchata = 0;
     
    if ( !empty($_GET['idBatchata'])) {
        $idBatchata = $_REQUEST['idBatchata'];
    }
     
    if ( !empty($_POST)) {
        // keep track post values
        $idBatchata = $_POST['idBatchata'];
         
        // delete data
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "DELETE FROM Batchata  WHERE idBatchata = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($idBatchata));
        Database::disconnect();
        header("Location: Batchata_data.php");
         
    }
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link   href="acss/bootstrap.min.css" rel="stylesheet">
    <script src="ajs/bootstrap.min.js"></script>
	<title>Delete </title>
</head>
 
<body>
	

    <div class="container">
     
		<div class="span10 offset1">
			<div class="row">
				<h3 align="center">Delete</h3>
			</div>

			<form class="form-horizontal" action="Batchata data delete page.php" method="post">
				<input type="hidden" name="idBatchata" value="<?php echo $idBatchata;?>"/>
				<p class="alert alert-error">Are you sure to delete ?</p>
				<div class="form-actions">
					<button type="submit" class="btn btn-danger">Yes</button>
					<a class="btn" href="Batchata_data.php">No</a>
				</div>
			</form>
		</div>
                 
    </div> <!-- /container -->
  </body>
</html>