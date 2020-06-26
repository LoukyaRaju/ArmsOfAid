
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

$sql = "SELECT  name, contact_number ,address,email,description FROM adopt_register";
$result = $conn->query($sql);

echo "<h2><u>PEOPLE WILLING TO ADOPT</u><h2>";
    //while($row = $result->fetch_assoc()) {
echo "<table>
<tr>
    <th>NAME</th>
    <th>EMAIL</th> 
    <th>MOBILE</th>
    <th>ADDRESS</th>
    <th>DESCRIPTION</th>
</tr>";

while($row = $result->fetch_assoc())
{
echo "<tr>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['contact_number'] . "</td>";
echo "<td>" . $row['address'] . "</td>";
echo "<td>" . $row['description'] . "</td>";
echo "</tr>";
}
echo "</table>";






         

$conn->close();
?> 




</div>
</body>
</html>