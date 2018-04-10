<!DOCTYPE html>
<html>

		<head>
			<title>PHP Tutorial!</title>
		</head>
<body>

	<form action = "globalvariablesDemo1.php" method = "get">
		<input type = "text" name = "email"/>
		<input type = "submit" name = "sub" value = "Submit"/>
	</form>
</body>
</html>
		

<?php 

	if(isset($_GET['sub'])){
	echo "<b>Your Email is: </b>" . $_GET['email'];
	}

?>
