<?php 
include('connection.php');
if(isset($_POST['submit'])){

$name = $_POST['name'];
$email = $_POST['mail'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$result = mysqli_query($connection, "insert into messagetable values('', '$name', '$email', '$subject', '$message');");
if($result){

    echo '<script> alert("thanks mr fiaz your data is submit");</script>';
}
else {
    echo  '<script> alert("youre data is not submit");</script>';
}
}

?>