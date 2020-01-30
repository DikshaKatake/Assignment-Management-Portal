
<?php
	require("../Assets/db-conn.php");

	// Create query to retrieve class names
	$sql = "SELECT class_name FROM class_master ORDER BY class_name";

	// Obtain result set
	$result = $mysqli->query($sql);

	$i = 1;
?>

<html>
<script src="../Assets/allValidations.js">
		</script>
	
	<h3> Divisions Already Created </h3>
	<table>
		<tr>
			<th>Sr No</th>
			<th>Division Name</th>
		</tr>
		<?php while($row = $result->fetch_assoc()) { ?>
		<tr>
			<td> <?php echo $i; ?></td>
			<td> <?php echo $row["class_name"]; ?></td>
		</tr>
		<?php  $i++; } ?>
	</table>
	<h3>Add a new Division</h3>
	<form action="php/addClassMaster.php" method="post">
		Enter Class Name: <input type="text" id="classadd" value="" name="classadd" onchange="validateClass()" required><br>
		<input type="submit" value="Add Division">	
	</form>

	<h3>Delete a Division</h3>
	<form action="php/deleteClassMaster.php" method="post">
		Enter Class Name: <input type="text" id="classdelete" name="classdelete"><br>
		<input type="submit" value="Delete Division">	
	</form>


	
		
</html>

