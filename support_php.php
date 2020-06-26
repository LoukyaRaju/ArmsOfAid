<html>
<body>
<?php

$Name=$_GET['Name'];

$Email=$_GET['Email'];
$Mobile=$_GET['Mobile'];


$Address=$_GET['Address'];




$City=$_GET['City'];

$Description=$_GET['Description'];



$dbc=mysqli_connect('localhost', 'root', '', 'helping_hands') or die('Error In Database Conection');


$query="insert into support (name, email , mobile ,address ,city ,Description) values('$Name','$Email', '$Mobile','$Address','$City','$Description')";


$result=mysqli_query($dbc,$query) or die(
	'Error in DatabaseConnection');
mysqli_close($dbc);
//header("Location:home.php");
echo 'Successful submitted';


?>
</body>
</html>