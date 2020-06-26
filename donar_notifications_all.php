
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

$sql = "SELECT  donar_name, contact_number ,email,address,city,description,item FROM donation_register";
$result = $conn->query($sql);

echo "<h2><u>DONARS LIST</u><h2>";
    //while($row = $result->fetch_assoc()) {
echo "<table>
<tr>
    <th>DONAR NAME</th>
    <th>CONTACT NUMBER</th> 
    <th>EMAIL</th>
    <th>ADDRESS</th>
    <th>CITY</th>
    <th>DESCRIPTION</th>
    <th>ITEM</th>
</tr>";

while($row = $result->fetch_assoc())
{
echo "<tr>";
echo "<td>" . $row['donar_name'] . "</td>";
echo "<td>" . $row['contact_number'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['address'] . "</td>";
echo "<td>" . $row['city'] . "</td>";
echo "<td>" . $row['description'] . "</td>";
echo "<td>" . $row['item'] . "</td>";
echo "</tr>";
}
echo "</table>";






        /*echo "<br> <br> <br>NAME:". $row["name"]. " - EMAIL: ". $row["Email"].     " - MOBILE:". $row["mobile"].   " - ADDRESS: ". $row["Address"]. " - CITY: ". $row["city"]. "<br>" ;*/
    

$conn->close();
?> 




</div>
</body>
</html>