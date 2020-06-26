
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

$sql = "SELECT  name, contact_number ,date_,event FROM event";
$result = $conn->query($sql);

echo "<h2><u>EVENTS </u><h2>";
    //while($row = $result->fetch_assoc()) {
echo "<table border=1>
<tr>
    <th> NAME</th>
    <th>CONTACT NUMBER</th> 
    <th>DATE</th>
    <th>EVENT</th>
    
</tr>";

while($row = $result->fetch_assoc())
{
echo "<tr>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['contact_number'] . "</td>";
echo "<td>" . $row['date_'] . "</td>";
echo "<td>     " .$row['event'] . "</td>";

echo "</tr>";
}
echo "</table>";






        /*echo "<br> <br> <br>NAME:". $row["name"]. " - EMAIL: ". $row["Email"].     " - MOBILE:". $row["mobile"].   " - ADDRESS: ". $row["Address"]. " - CITY: ". $row["city"]. "<br>" ;*/
    

$conn->close();
?> 




</div>
</body>
</html>