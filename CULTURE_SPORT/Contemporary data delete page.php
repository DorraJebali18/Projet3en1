<?php
    require 'database.php';
    $idContemporary = 0;
     
    if ( !empty($_GET['idContemporary'])) {
        $idContemporary = $_REQUEST['idContemporary'];
    }
     
    if ( !empty($_POST)) {
        // keep track post values
        $idContemporary = $_POST['idContemporary'];
         
        // delete data
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "DELETE FROM Contemporary  WHERE idContemporary = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($idContemporary));
        Database::disconnect();
        header("Location: Contemporary_data.php");
         
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

			<form class="form-horizontal" action="Contemporary data delete page.php" method="post">
				<input type="hidden" name="idContemporary" value="<?php echo $idContemporary;?>"/>
				<p class="alert alert-error">Are you sure to delete ?</p>
				<div class="form-actions">
					<button type="submit" class="btn btn-danger">Yes</button>
					<a class="btn" href="Contemporary_data.php">No</a>
				</div>
			</form>
		</div>
                 
    </div> <!-- /container -->
  </body>
</html>