<?php
    require 'database.php';
    $idsalsa = 0;
     
    if ( !empty($_GET['idsalsa'])) {
        $idsalsa = $_REQUEST['idsalsa'];
    }
     
    if ( !empty($_POST)) {
        // keep track post values
        $idsalsa = $_POST['idsalsa'];
         
        // delete data
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "DELETE FROM salsa  WHERE idsalsa = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($idsalsa));
        Database::disconnect();
        header("Location: salsa_data.php");
         
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

			<form class="form-horizontal" action="user data delete page.php" method="post">
				<input type="hidden" name="idsalsa" value="<?php echo $idsalsa;?>"/>
				<p class="alert alert-error">Are you sure to delete ?</p>
				<div class="form-actions">
					<button type="submit" class="btn btn-danger">Yes</button>
					<a class="btn" href="salsa_data.php">No</a>
				</div>
			</form>
		</div>
                 
    </div> <!-- /container -->
  </body>
</html>