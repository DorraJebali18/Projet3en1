<?php
    require 'database.php';
    $idContemporary = null;
    if ( !empty($_GET['idContemporary'])) {
        $idContemporary = $_REQUEST['idContemporary'];
    }
     
    $pdo = Database::connect();
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "SELECT * FROM Contemporary where idContemporary = ?";
	$q = $pdo->prepare($sql);
	$q->execute(array($idContemporary));
	$data = $q->fetch(PDO::FETCH_ASSOC);
	Database::disconnect();
?>

<!DOCTYPE html>
<html lang="en">
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
		<link href="acss/bootstrap.min.css" rel="stylesheet">
		<script src="ajs/bootstrap.min.js"></script>
		
		<style>
		html {
			font-family: Arial;
			display: inline-block;
			margin: 0px auto;
		}
		
		textarea {
			resize: none;
		}

		ul.topnav {
			list-style-type: none;
			margin: auto;
			padding: 0;
			overflow: hidden;
			background-color: #4CAF50;
			width: 70%;
		}

		ul.topnav li {float: left;}

		ul.topnav li a {
			display: block;
			color: white;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
		}

		ul.topnav li a:hover:not(.active) {background-color: #3e8e41;}

		ul.topnav li a.active {background-color: #333;}

		ul.topnav li.right {float: right;}

		@media screen and (max-width: 600px) {
			ul.topnav li.right, 
			ul.topnav li {float: none;}
		}
		</style>
		
		<title>Edit </title>
		
	</head>
	
	<body>
				<div class="container">
     
			<div class="center" style="margin: 0 auto; width:495px; border-style: solid; border-color: #f2f2f2;">
				<div class="row">
					<h3 align="center">Update Contemporary</h3>
				</div>
		 
					<form class="form-horizontal" action="Contemporary_data_edittb.php?id=<?php echo $idContemporary?>" method="post">
					<div class="control-group">
						<label class="control-label">Id Contemporary</label>
						<div class="controls">
							<input name="idContemporary" type="text"  placeholder="" value="<?php echo $data['idContemporary'];?>" required>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">First name</label>
						<div class="controls">
							<input name="nom" type="text"  placeholder="" value="<?php echo $data['nom'];?>" required>
						</div>
					</div>
					
				
					<div class="control-group">
						<label class="control-label">Last name</label>
						<div class="controls">
							<input name="prenom" type="text"  placeholder="" value="<?php echo $data['prenom'];?>" required>
						</div>
					</div>
					
				
					<div class="control-group">
						<label class="control-label">Phone</label>
						<div class="controls">
							<input name="phone" type="text"  placeholder="" value="<?php echo $data['phone'];?>" required>
						</div>
					</div>
					
				
					<div class="control-group">
						<label class="control-label">Adress mail</label>
						<div class="controls">
							<input name="mail" type="text"  placeholder="" value="<?php echo $data['mail'];?>" required>
						</div>
					</div>
					
						<div class="control-group">
						<label class="control-label"> Date </label>
						<div class="controls">
							<input name="datein" type="date"  placeholder="" value="<?php echo $data['datein'];?>" required>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label"> Date to </label>
						<div class="controls">
							<input name="dateout" type="date"  placeholder="" value="<?php echo $data['dateout'];?>" required>
						</div>
					</div>
						
		       <div class="form-actions">
						<button type="submit" class="btn btn-success">Update</button>
						<a class="btn" href="Contemporary_data.php">Back</a>
					</div>
				</form>
			</div>               
		</div> <!-- /container -->	
		
		
	</body>
</html>