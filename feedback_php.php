<html>
<body>
<?php
$name=$_GET['Name'];
$email=$_GET['Email'];
$Description=$_GET['Description'];




$dbc=mysqli_connect('localhost', 'root', '', 'helping_hands') or die('Error In Database Conection');


$query="insert into feedback (name, email ,  description ) values('$name', '$email','$Description')";




$result=mysqli_query($dbc,$query) or die('Error in DatabaseConnection');{
mysqli_close($dbc);
echo 'submitted Successful';
}


?>
</body>
</html>