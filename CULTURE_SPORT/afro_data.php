
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
			margin: 40px auto;
			text-align: center;
		}

		ul.topnav {
			list-style-type: none;
			margin: auto;
			padding: 0;
			overflow: hidden;
			background-color: #0000ff;
			width: 60%;
		}

		ul.topnav li {float: left;}

		ul.topnav li a {
			display: block;
			color: white;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
		}

		ul.topnav li a:hover:not(.active) {background-color: #0087bd;}

		ul.topnav li a.active {background-color: #333;}

		ul.topnav li.right {float: right;}

		@media screen and (max-width: 600px) {
			ul.topnav li.right, 
			ul.topnav li {float: none;}
		}
		
		.table {
			margin: auto;
			width: 90%; 
		}
		
		thead {
			color: #FFFFFF;
		}
		</style>
		
		<title>Salsa Data</title>
	</head>
	
	<body>
	
		<br>
		<div class="container">
		<ul class="topnav">
			<li><a href="salsa_data.php">Salsa</a></li>
			<li><a  href="pilates_data.php">Pilates</a></li>
			<li><a class="active" href="afro_data.php">Afro</a></li>
			<li><a href="Kizomba_data.php">Kizomba</a></li>
			<li><a href="Contemporary_data.php">Contemporary</a></li>
			<li><a  href="Batchata_data.php">Batchata</a></li>
			<li><a  href="logout.php">logout</a></li>
		</ul>
            <div class="row">
                <h3>Afro Data Table</h3>
            </div>
      
			 <div class="card-body row">
      
          <p>
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr bgcolor="#10a0c5" color="#FFFFFF">
					    <th>Id Afro</th>
                      <th>First name</th>
					  <th>Last name</th>
					   <th>Phone</th>
					   <th>Adress mail</th>
					  <th>Date</th>
					   <th>Date to </th>
					  <th>Action</th> 
					
                    </tr>
                  </thead>
                  <tbody> 
                  <tbody>
                  <?php
                   include 'database.php';
                   $pdo = Database::connect();
                   $sql = 'SELECT * FROM afro ORDER BY idafro ASC';
                   foreach ($pdo->query($sql) as $row) {
                            echo '<tr>';
						    echo '<td>'. $row['idafro'] . '</td>';
                            echo '<td>'. $row['nom'] . '</td>';
							echo '<td>'. $row['prenom'] . '</td>';
							echo '<td>'. $row['phone'] . '</td>';
						    echo '<td>'. $row['mail'] . '</td>';
							echo '<td>'. $row['datein'] . '</td>';
							echo '<td>'. $row['dateout'] . '</td>';
                           
					        echo '<td><a class="btn btn-success" href="afro_edit.php?idafro='.$row['idafro'].'">Edit</a>';
							echo ' ';
							echo '<a class="btn btn-danger" href="afro data delete page.php?idafro='.$row['idafro'].'">Delete</a>';
							echo '</td>';
                            echo '</tr>';
                   }
                   Database::disconnect();
                  ?>
                  </tbody>
				</table>
			</div>
		</div> <!-- /container -->
	</body>
</html>
