<?php 
include('connection.php');
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $result = mysqli_query($connection, "select * from client_data WHERE email = '$email' AND password = '$password'"); 
    $data = mysqli_fetch_array($result);
    if($data){
        
        header("location:updateevent.php?id=".$data['id']."");
        echo "You are logged in.";
    } else {
        echo "Login failed. Please check your credentials.";
    }
}
?>
