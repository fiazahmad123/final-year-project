<?php
include('connection.php');

if(isset($_POST['submit'])) { 
    // Check if a file is uploaded
    if(isset($_FILES['myfile'])){
        $image = $_FILES['myfile']['name'];
        $images = $_FILES['myfile']['tmp_name'];
        $path = "file/".$image;
        
$id = $_POST['id'];
        $nami = $_POST['name'];
        $experience = $_POST['experince'];
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
        $result = mysqli_query($connection, "UPDATE `client_data`
        SET `name` = '$nami', `expernice`= '$experience', `services` = '$services', `city` = '$city', `avaliblity` = '$availability', `status` = '$status',
        `username` = '$username', `number` = '$number', `email` = '$email', `password` = '$password', `facebook` = '$facebook',	`instagram` = '$instagram', `twitter`= '$twitter' WHERE `id` = '$id'");

        move_uploaded_file($images, $path);
        // Check if data insertion is successful
        if($result) {
            // Move uploaded file to destination
            echo "Your data is entered and file is uploaded.";
        } else {
            echo "File upload failed.";
        }
    } else {
        echo "File problem";
    }
}