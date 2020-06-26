
<html>
<body bgcolor="lightblue">
<div align="left">



<?php
$servername = "localhost";
$username = "username";
$password = "";
$dbname = "helping_hands";

// Create connection
$conn = new mysqli('localhost', 'root', '', 'helping_hands');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//$Username= $_SESSION['Username'];

$sql = "SELECT  name,contact_number ,email,address,description,created,id_image,city FROM homeless_register ";

$result = $conn->query($sql);

echo "<h2><u>HOMLESS PEOPLE</u><h2>";
    //while($row = $result->fetch_assoc()) {
//echo "<table border='1'>
echo "<table>
<tr>
	<th>CREATED ON</th>
    <th>NAME</th>
    <th>EMAIL</th> 
    <th>MOBILE</th>
    <th>ADDRESS</th>
    <th>DESCRIPTION</th>
    <th>CITY</th>
    <th>IMAGE</th>
</tr>";
$link_address="get_image.php";
session_start();

while($row = $result->fetch_assoc())
{

	$id=$row['id_image'];
$_SESSION['id'] = $id;
echo "<tr>";
	echo "<td>" . $row['created'] . "</td>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['contact_number'] . "</td>";
echo "<td>" . $row['address'] . "</td>";
echo "<td>" . $row['description'] . "</td>";
echo "<td>" . $row['city'] . "</td>";
echo "<td>";

echo "<a href=get_image.php?id=$id>click here to see image</a>";
//echo " <p id="para">image</p>";


echo "</a>";
echo "</td>";
/*echo "<form action="get_image.php" method="POST">";
echo "$_SESSION['varname'] = $row['id_image']";

echo " <input type="submit" value="Submit">";*/
//echo "<a href="get_image.php"</a>";
echo "</td>";
echo "</tr>";
//echo "$_SESSION['varname'] = $row['id_image']";
}
echo "</table>";






         

$conn->close();
?> 

<script>
document.getElementById("para").onclick = function () {
        location.href = "anysite.com";
    };
</script>



</div>
</body>
</html>