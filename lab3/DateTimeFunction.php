<?php 
	if(isset($_POST['submit'])){
		if(isset($_POST['date1'])){
			$date1 = date('N F d Y',strtotime($_POST['date1']));
			echo $date1;
		}	
	}

	if(isset($_POST['submit'])){
		if(isset($_POST['date2'])){
			$date1 = date('d/m/Y',strtotime($_POST['date2']));
			echo $date1;
		}	
	}


?>
<!DOCTYPE html>
<html>
<head>
	<title>DateTimeFunction</title>
</head>
<body>
	<form action="DateTimeFunction.php" method="POST" role= "from">
	
		<input type="date" name="date1">
		<input type="date" name="date2">
		<button type="submit" name="submit">Submit</button>	
	</form>
</body>
</html>
