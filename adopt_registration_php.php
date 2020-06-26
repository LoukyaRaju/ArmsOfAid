<html>
<body>
<?php
$name=$_GET['Name'];
$email=$_GET['Email'];
$mobile=$_GET['Mobile'];
$address=$_GET['Address'];
$description=$_GET['Description'];




$dbc=mysqli_connect('localhost', 'root', '', 'helping_hands') or die('Error In Database Conection');


$query="insert into adopt_register (name, email , contact_number ,address , description ) values('$name', '$email','$mobile','$address','$description')";




$result=mysqli_query($dbc,$query) or die(
	'Error in DatabaseConnection');
mysqli_close($dbc);
echo 'Registration Successful';


?>
</body>
</html>