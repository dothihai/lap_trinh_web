<!DOCTYPE html>
<head>
<title>Insert data to PostgreSQL with php - creating a simple web application</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
li {listt-style: none;}
</style>
</head>
<body>
<h2>Category Administration</h2>

<form name="insert" action="insert.php" method="POST" >
CatID:<input type="text" name="catid" />
Title:<input type="text" name="title" />
Description:<input type="text" name="description" />
<br>
<input type="submit" name="submit"/>
</form>

</body>
</html>
<?php
if (isset($_POST['submit']))
{	

$db = pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=");
$query = "INSERT INTO book VALUES ('$_POST[catid]','$_POST[title]',
'$_POST[description]')";
$result = pg_query($query); 
}

?>