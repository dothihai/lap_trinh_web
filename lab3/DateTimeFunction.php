<?php 
	if(isset($_POST['submit'])){
			if(isset($_POST['name1'])&&isset($_POST['DateOfBrith1'])&&isset($_POST['name2'])&&isset($_POST['DateOfBrith2'])){
				$name1 = $_POST['name1'];
				$DateOfBrith1 = date("l, F d Y", strtotime($_POST['DateOfBrith1']));
				$name2 = $_POST['name2'];
				$DateOfBrith2 = date("l, F d Y", strtotime($_POST['DateOfBrith2']));
				echo "<br>User1: ".$name1." ".$DateOfBrith1;
				echo "<br>User2: ".$name2." ".$DateOfBrith2;
				// echo $diff=date_diff($DateOfBrith1, $DateOfBrith2) ->format('%R%a days');
				// echo $diff=date_diff($DateOfBrith1, $DateOfBrith2) ->format('%y years');
				difference_day($DateOfBrith1, $DateOfBrith2);
				difference_age($DateOfBrith1, $DateOfBrith2);
			}
		}
	function difference_day($date1,$date2){
			$days=date_diff($DateOfBrith1, $DateOfBrith2);
			echo "<br> The difference in days between two dates ".$days." days" ;
		}
	function difference_age($date1,$date2){
			$diff = abs(strtotime($date2) - strtotime($date1));
	  		$years = floor($diff / (365*60*60*24));
			echo "<br> The difference years between two persons ".$years." years" ;
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
