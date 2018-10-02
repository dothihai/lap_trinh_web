<?php
	function convert_radian_to_degrees($radian) {
		return $degrees = (double) $radian*180/M_PI;
	}

	function convert_degrees_to_radian($degrees) {
		return $radian = (double) $degrees/180*M_PI;
	}
	if ( isset($_POST['submit'])) {
		if ( isset($_POST['option']) && $_POST['option'] == '1') {
			$radian = $_POST['radian'];
			$degrees = convert_radian_to_degrees($_POST['radian']);
		}
	}

	if ( isset($_POST['submit']) ) {
		if ( isset($_POST['option']) && $_POST['option'] == '0') {
			$degrees = $_POST['degrees'];
			$radian = convert_degrees_to_radian($_POST['degrees']);
		}
	}


?>
<!DOCTYPE html>
	<html>
	<head>
		<title>Ex1</title>
	</head>
	<body>
	<form action="ex1.php" method="POST" role= "from">
			<div>
				<label for=""></label>
				<select name='option'>
					<option value="1">radian to degrees</option>
					<option value="0">degrees to radian</option>
				
				</select>
			</div>
			<div>
				<label for="">radian</label>
				<input type="text" name= "radian" value="<?= isset($radian)? $radian : '' ?>">
			</div>
			<div>
				<label for="">degrees</label>
				<input type="text" name= "degrees" value="<?= isset($degrees)? $degrees : '' ?>">
			</div>
			
			<button type="submit" name="submit">Submit</button>	
		</form>
	</body>
	</html>	


