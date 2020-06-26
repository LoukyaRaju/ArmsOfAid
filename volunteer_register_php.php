<html>
<body>
<?php

$Name=$_GET['Name'];



$Age=$_GET['Age'];


$Mobile=$_GET['Mobile'];


$Email=$_GET['Email'];
$Gender=$_GET['Gender'];
$Qualification=$_GET['Qualification'];
$Description=$_GET['Description'];



$dbc=mysqli_connect('localhost', 'root', '', 'helping_hands') or die('Error In Database Conection');


$query="insert into volunteer_register (name, age , mobile_number ,email ,gender ,Qualification,Description) values('$Name', '$Age','$Mobile','$Email','$Gender','$Qualification','$Description')";


$result=mysqli_query($dbc,$query) or die(
	'Error in DatabaseConnection');
mysqli_close($dbc);
//header("Location:home.php");
echo 'Registration Successful';


?>
</body>
</html>