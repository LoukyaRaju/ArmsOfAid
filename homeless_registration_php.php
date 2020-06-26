<html>
<body>
<?php
$name=$_GET['Name'];
$email=$_GET['Email'];
$mobile=$_GET['Mobile'];
$address=$_GET['address'];
$city=$_GET['city'];
$description=$_GET['description'];
$file = addslashes(file_get_contents($_FILES["image"]["image_id"]));

//$image=addslashes(file_get_contents($_FILES['image']));
   


$dbc=mysqli_connect('localhost', 'root', '', 'helping_hands') or die('Error In Database Conection');


$query="insert into homeless_register (name, email , contact_number ,address , description,person_image,city) values('$name', '$email','$mobile','$address','$description','$file','$city')";


   /* if (move_uploaded_file($_FILES['image'])) {
        $msg = "Image uploaded successfully";
    }else{
        $msg = "Failed to upload image";
    }
*/




$result=mysqli_query($dbc,$query) or die('Error in DatabaseConnection');
mysqli_close($dbc);
echo 'Registration Successful';


?>
</body>
</html>