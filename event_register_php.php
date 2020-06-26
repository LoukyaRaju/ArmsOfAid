<html>
<body>
<?php

$name=$_GET['name'];



$contact=$_GET['contact'];


$date=$_GET['date'];


$event=$_GET['event'];



$dbc=mysqli_connect('localhost', 'root', '', 'helping_hands') or die('Error In Database Conection');


$query="insert into event (name, contact_number , date_ ,event ) values('$name', '$contact','$date','$event')";


$result=mysqli_query($dbc,$query) or die(
	'Error in DatabaseConnection');
mysqli_close($dbc);
echo "registered sucessfully.."



?>
</body>
</html>