
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Record Form</title>
</head>
<body>
	<form method="post">
		
		<label>Select Line:</label>
						<select class="serie" name="ligne">
						<?php  
						while($row = mysqli_fetch_array($result1))  
						{  
						?> 
							 <option><?php echo $row["nom_ligne"]; ?></option>
							 <!--option value="< ?php echo $row["username"]; ?>">< ?php echo $row["username"]; ?></option-->
						<?php  
						}  
						?> 
						</select><br>
		<label>Select product:</label>
						<select class="serie" name="nom_prod">
						<?php  
						while($row = mysqli_fetch_array($result))  
						{  
						?> 
							 <option><?php echo $row["nom_prod"]; ?></option>
							 <!--option value="< ?php echo $row["username"]; ?>">< ?php echo $row["username"]; ?></option-->
						<?php  
						}  
						?> 
						</select><br>
		quantity: <!--input type="radio" name="quality" value="OK" checked> Ok  |	<input type="radio" name="quality" value="NO" > NO<br--> 
		<select name="quality">   
            <option value="OK" selected>OK</option>    
            <option value="NO">NO</option>      
        </select><br>
		<input type="submit"  name="add" value="Enregistrer"/>
	</form>
</body>
</html>