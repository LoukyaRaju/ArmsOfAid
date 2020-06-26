<?php
 
	/*$conn=mysqli_connect( "localhost", "root", "", "helping_hands" ) or die("Could not connect: " .mysqli_error($conn) );
 
	$getImage=mysqli_query($conn, "SELECT person_image FROM homeless_register WHERE id_image='1' ") or die("Could not retrieve image: " .mysqli_error($conn));
 
	$path=mysqli_fetch_assoc($getImage) or die("Could not fetch array : " .mysqli_error($conn));
 echo '<img src="data:image/jpeg;base64,'.base64_encode( $path['person_image'] ).'"/>';

 */

// $var_value = $_SESSION['id'];
$var_value = $_GET['id'];

 $db = mysqli_connect("localhost","root","","helping_hands"); //keep your db name
$sql = "SELECT person_image FROM homeless_register WHERE id_image ='$var_value' ";
$sth = $db->query($sql);
$result=mysqli_fetch_array($sth);
echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['person_image'] ).'"/>';
?>
 
