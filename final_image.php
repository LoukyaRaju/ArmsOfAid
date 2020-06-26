<?php



$name=$_POST['Name'];
$email=$_POST['Email'];
$mobile=$_POST['Mobile'];
$address=$_POST['address'];

$description=$_POST['description'];

$city=$_POST['city'];


//if(isset($_POST["submit"])){           
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false){              
        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));
        

        /*
         * Insert image data into database
         */
        
        //DB details
        $dbHost     = 'localhost';
        $dbUsername = 'root';
        $dbPassword = '';
        $dbName     = 'helping_hands';
                                            
        //Create connection and select DB
        $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
        
        // Check connection
        if($db->connect_error){
            die("Connection failed: " . $db->connect_error);
        }
        
        //$dataTime = date("Y-m-d H:i:s");
        
        //Insert image content into database
        $insert = $db->query("INSERT into homeless_register (name, email , contact_number ,address , description ,person_image, city) VALUES ('$name', '$email','$mobile','$address','$description','$imgContent','$city')");
        if($insert){  
            echo "homeless registration successful.";
        }else{              
            echo "File upload failed, please try again.";
        } 
    }else{
        echo "Please select an image file to upload.";
    }

?>
