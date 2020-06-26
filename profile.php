




<!DOCTYPE html>
<!-- saved from url=(0064)file:///C:/xampp/htdocs/helping_hands/Homeless_registration.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
	<title></title>
	<style>
	body{
    margin: 0;
    padding: 0;
    background: url(https://thenypost.files.wordpress.com/2017/10/nyc-homeless-shelter.jpg?quality=90&strip=all);
    background-size: cover;
    background-attachment: fixed;
    background-position: center;
    
    font-family: sans-serif;
}
.btn 
{
  height: 30px;
  width: 150px;
  text-align: center;
    cursor: pointer;
    background: #39dc79;
    color: #000;
}
.login-box{
    width: 430px;
    height: 300px;
    background: rgba(0, 0, 0, 0.5);
    color: #fff;
    top: 25%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 30px;
}

h1{
    margin: 0;
    padding: 0 0 15px;
    text-align: center;
    font-size: 30px;
}
.login-box p{
    margin: 0;
    padding: 0;
    font-weight: bold;
}
.login-box input{
    width: 100%;
    margin-bottom: 20px;
}
.login-box input[type="text"], input[type="password"]
{
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 16px;
    
}
.login-box input[type="submit"]
{
    border: none;
    outline: none;
    height: 40px;
    background: #1c8adb;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;

}
.login-box input[type="submit"]:hover
{
    cursor: pointer;
    background: #39dc79;
    color: #000;
}

.login-box a{
    text-decoration: none;
    font-size: 14px;
    color: #fff;
}
.login-box a:hover
{
    color: #39dc79;
}
</style>
</head>
<body>
  <div class="login-box">
     <h1><b><u>YOUR PROFILE</u></b></h1>
<?php

		session_start();
		$Username=$_SESSION['Username'];

	  //DB details
        $dbHost     = 'localhost';
        $dbUsername = 'root';
        $dbPassword = '';
        $dbName     = 'helping_hands';
        
        //Create connection and select DB
        $db = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);
        
        // Check connection
        if($db->connect_error){
            die("Connection failed: " . $db->connect_error);
        }

        $sql = "SELECT * FROM org_reg WHERE username='$Username'";
        // $sql = "SELECT * FROM org_reg ";

		$result = mysqli_query($db,$sql);

		// while($row=mysql_fetch_array($result, MYSQL_ASSOC)) {
		// while($row = $result->fetch_assoc()) {
		// if($row = $result->fetch_assoc()) {

		while ($row = mysqli_fetch_row($result)) {
			echo "Name : ".$row[0]."<br/>";
			echo "Username : ".$row[1]."<br/>";
			echo "EMAIL : ".$row[2]."<br/>";
			echo "MOBILE : ".$row[3]."<br/>";
			echo "ADDRESS : ".$row[4]."<br/>";
			echo "CITY : ".$row[5]."<br/>";
			echo "REQUIREMENTS : ".$row[6]."<br/>";
			echo "DESCRIPTION : ".$row[7]."<br/>";
		}

?>


</body></html>
















