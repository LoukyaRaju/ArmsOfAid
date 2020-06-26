
<html>
<body>
<?php
$name=$_GET['name'];
$contact_number=$_GET['contact_number'];
$email=$_GET['email'];
$Address=$_GET['Address'];
$city=$_GET['city'];
$Description=$_GET['Description'];
$item=$_GET['item'];



$dbc=mysqli_connect('localhost', 'root', '', 'helping_hands') or die('Error In Database Conection');


$query="insert into donation_register (donar_name, contact_number , email ,address ,city, description, item ) values('$name', '$contact_number','$email','$Address','$city','$Description','$item')";




$result=mysqli_query($dbc,$query) or die(
	'Error in DatabaseConnection');
mysqli_close($dbc);
echo 'Registration Successful';


?>
</body>
</html>