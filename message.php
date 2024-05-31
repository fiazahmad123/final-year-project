<?php
include('messageconnection.php');
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$encypting = sha1($name, true);
$password =$_POST['password'];
$hidden = md5($password);
$number = $_POST['number'];
$mail=$_POST['email'];
$message=$_POST['message'];
$results=mysqli_query($conn, "select *from message where email = '$mail'");
$data = (mysqli_fetch_array($results));
if($data){

    echo " youre email already excet";
} else {
    
$variable=mysqli_query($conn,"insert into message values('', '$encypting', '$hidden', '$number', '$mail', '$message', CURRENT_TIMESTAMP)");
if($variable){
    echo "your data is eneter";
}else {
    echo "your datai is not entern";
}
}
}
?>