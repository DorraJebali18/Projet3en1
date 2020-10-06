
<!DOCTYPE html>
<html lang="en">
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
		<link href="acss/bootstrap.min.css" rel="stylesheet">
		<script src="ajs/bootstrap.min.js"></script>
		<script src="ajquery.min.js"></script>

		<style>
	html {
			font-family: Arial;
			display: inline-block;
			margin: 0px auto;
			text-align: center;
		}

		ul.topnav {
			list-style-type: none;
			margin: auto;
			padding: 0;
			overflow: hidden;
			background-color: #0000ff;
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
<title>Registration : </title>
	</head>
	
	<body>


		
 <center> 
 <h1> Pilates </h1>
<div class="container">
     
			<div class="center" style="margin: 0 auto; width:495px; border-style: solid; border-color: #f2f2f2;">
				
		 
					<form class="form-horizontal" action="insertDB_pilates.php" method="post">
					<div class="control-group">
						<label class="control-label">Id Pilates</label>
						<div class="controls">
							<input name="idpilates" type="text"  placeholder="">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">First Name</label>
						<div class="controls">
							<input name="nom" type="text"  placeholder="">
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">Last name </label>
                    						<div class="controls col-12">
                    							<input name="prenom" class="form-control" type="text" placeholder=""> 
                    						</div>
											</div>
											<div class="control-group">
						<label class="control-label"> Phone </label>
                    						<div class="controls col-12">
                    							<input name="phone" class="form-control" type="number" placeholder=""> 
                    						</div>
											</div>
											<div class="control-group">
						<label class="control-label">Adress mail </label>
                    						<div class="controls col-12">
                    							<input name="mail" class="form-control" type="text" placeholder=""> 
                    						</div>
											</div>
				<div class="control-group">
						<label class="control-label">Date </label>
                    						<div class="controls col-12">
                    							<input name="datein" class="form-control" type="date" placeholder=""> 
                    						</div>
											</div>
											<div class="control-group">
						<label class="control-label">Date to </label>
                    						<div class="controls col-12">
                    							<input name="dateout" class="form-control" type="date" placeholder=""> 
                    						</div>
					
					<div class="form-actions">
						<button type="submit" class="btn btn-success">Save</button>

						<a class="btn" href="Index.html">Back</a>
					</div>
  </form>
  </center>
  </body>
  </html>