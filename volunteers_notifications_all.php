
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

$sql = "SELECT  name,age ,mobile_number,email,gender,qualification,description FROM volunteer_register";
$result = $conn->query($sql);

echo "<h2><u>VOLUNTEERS LIST</u><h2>";
    //while($row = $result->fetch_assoc()) {
echo "<table>
<tr>
    <th> NAME</th>
    <th>AGE</th> 
    <th>MOBILE NUMBER</th>
    <th>EMAIL</th>
    <th>GENDER</th>
    <th>QUALIFICATIONS</th>
    <th>DESCRIPTION</th>
</tr>";

while($row = $result->fetch_assoc())
{
echo "<tr>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['age'] . "</td>";
echo "<td>" . $row['mobile_number'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['gender'] . "</td>";
echo "<td>" . $row['qualification'] . "</td>";
echo "<td>" . $row['description'] . "</td>";
echo "</tr>";
}
echo "</table>";






        /*echo "<br> <br> <br>NAME:". $row["name"]. " - EMAIL: ". $row["Email"].     " - MOBILE:". $row["mobile"].   " - ADDRESS: ". $row["Address"]. " - CITY: ". $row["city"]. "<br>" ;*/
    

$conn->close();
?> 




</div>
</body>
</html>