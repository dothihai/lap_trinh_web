<?php 
	if(isset($_POST['submit'])){
			if(isset($_POST['name1'])&&isset($_POST['DateOfBrith1'])&&isset($_POST['name2'])&&isset($_POST['DateOfBrith2'])){
				$name1 = $_POST['name1'];
				$birthday1 = date("l, F d Y", strtotime($_POST['DateOfBrith1']));
				$name2 = $_POST['name2'];
				$birthday2 = date("l, F d Y", strtotime($_POST['DateOfBrith2']));
				echo "<br>User1: ".$name1." ".$birthday1;
				echo "<br>User2: ".$name2." ".$birthday2;
				difference_day($DateOfBrith1, $DateOfBrith2);
				difference_age($DateOfBrith1, $DateOfBrith2);
			}
		}
	function difference_day($date1,$date2){
			
			$diff = abs(strtotime($date2) - strtotime($date1));
	  		$years = floor($diff / (365*60*60*24));
	 		$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
	  		$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
			echo "<br> The difference in days between two dates ".$days." days";
		}
	function difference_age($date1,$date2){
			$diff = abs(strtotime($date2) - strtotime($date1));
	  		$years = floor($diff / (365*60*60*24));
			echo "<br> The difference years between two persons ".$years." years";
		}

?>

<!DOCTYPE html>
<html>
<head>
	<title>DateTimeFunction</title>
</head>
<body>
	<form action="DateTimeFunction.php" method="POST" role= "from">

		<p>User1</p>
		Name: <input type="text" name="name1">
		Date Of Birth: <input type="date" name="DateOfBrith1">
		<p>User2</p>
		Name: <input type="text" name="name2">
		Date Of Birth: <input type="date" name="DateOfBrith2">
		<br><br>
		<button type="submit" name="submit">submit</button>
		<button type="restart" name="restart">restart</button>
	</form>
</body>
</html>
