<?php
session_start();
$message="";
if(count($_POST)>0) {
	$conn = mysqli_connect("localhost","root","","helping_hands");
	$result = mysqli_query($conn,"SELECT * FROM org_reg WHERE username='" . $_POST["Username"] . "' and Password = '". $_POST["Password"]."'");
	$count  = mysqli_num_rows($result);
	if($count==0) {
		echo "Invalid Username or Password!";
	} else {
		$_SESSION['Username']=$_POST["Username"];
		header("Location:org_homepage.html");
	}
}
$conn->close();

?>