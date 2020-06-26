<html>
<body>
<?php
$Name=$_GET['Name'];
$Username=$_GET['Username'];
$Password=$_GET['Password'];
$Email=$_GET['Email'];
$Mobile=$_GET['Mobile'];
$Address=$_GET['Address'];
$City=$_GET['City'];
$Requirements=$_GET['Requirements'];
$Description=$_GET['Description'];


$dbc=mysqli_connect('localhost', 'root', '', 'helping_hands') or die('Error In Database Conection');


$query="insert into org_reg (name, username ,  Password ,Email ,Mobile ,Address ,City ,Requirements ,Description  ) values('$Name', '$Username','$Password','$Email','$Mobile','$Address','$City','$Requirements','$Description')";




$result=mysqli_query($dbc,$query) or die('Error in DatabaseConnection');{
mysqli_close($dbc);
header("Location:loginpage.html");
}


?>
</body>
</html>