<?php
include('connection.php');

if(isset($_POST['submit'])) { 
    // Check if a file is uploaded
    if(isset($_FILES['myfile'])){
        $image = $_FILES['myfile']['name'];
        $images = $_FILES['myfile']['tmp_name'];
        $path = "file/".$image;
        // $text = end(explode('.',$image));
        // $date = array("png","jpeg","jpg");
        // if(in_array($text,$date) === false){
        //     echo "youre files is not valide";
        // }else{

        $nami = $_POST['name'];
        $experience = $_POST['experience'];
        $services = $_POST['services'];
        $city = $_POST['city'];
        $availability = $_POST['availability'];
        $status = $_POST['status'];
        $username = $_POST['username'];
        $number = $_POST['number'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $facebook = $_POST['facebook'];
        $instagram = $_POST['instagram'];
        $twitter = $_POST['twitter'];
        
        // Insert data into the database
        $result = mysqli_query($connection, "INSERT INTO client_data VALUES('', '$image', '$nami', '$experience', '$services', '$city', '$availability', '$status', '$username', '$number', '$email','$password', '$facebook', '$instagram', '$twitter', CURRENT_TIMESTAMP )");
        move_uploaded_file($images, $path);
        // Check if data insertion is successful
        if($result) {
            // Move uploaded file to destination
            echo "Your data is entered and file is uploaded.";
        } else {
            echo "File upload failed.";
        }
       
    }
    }

?>