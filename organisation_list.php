
<html>
<body bgcolor="lightblue">
<div  >



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

$sql = "SELECT  name, Email ,Mobile,Address,City,Requirements,Description FROM org_reg";
$result = $conn->query($sql);

echo "<h2><u>ORGANISATION LIST</u><h2>";
    //while($row = $result->fetch_assoc()) {
echo "<table>
<tr>
    <th> NAME</th>
    <th>EMAIL</th>
    <th>CONTACT NUMBER</th> 
    <th>ADDRESS</th>
    <th>CITY</th>
    <th>REQUIREMENTS</th>
    <th>DESCRIPTION</th>
    
</tr>";

while($row = $result->fetch_assoc())
{
echo "<tr>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['Email'] . "</td>";
echo "<td>" . $row['Mobile'] . "</td>";
echo "<td>" . $row['Address'] . "</td>";
echo "<td>" . $row['City'] . "</td>";
echo "<td>" . $row['Requirements'] . "</td>";
echo "<td>" . $row['Description'] . "</td>";

echo "</tr>";
}
echo "</table>";






        /*echo "<br> <br> <br>NAME:". $row["name"]. " - EMAIL: ". $row["Email"].     " - MOBILE:". $row["mobile"].   " - ADDRESS: ". $row["Address"]. " - CITY: ". $row["city"]. "<br>" ;*/
    

$conn->close();
?> 




</div>
</body>
</html>