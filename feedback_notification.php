
<html>
<body>
<div align="center">



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

$sql = "SELECT  name, email ,description FROM feedback";
$result = $conn->query($sql);

echo "<h2><u>FEEDBACK</u><h2>";
    //while($row = $result->fetch_assoc()) {
echo "<table border='1'>
<tr>
    <th>NAME</th>
    <th>EMAIL</th> 
    <th>DESCRIPTION</th>
</tr>";

while($row = $result->fetch_assoc())
{
echo "<tr>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['description'] . "</td>";
echo "</tr>";
}
echo "</table>";






         

$conn->close();
?> 




</div>
</body>
</html>