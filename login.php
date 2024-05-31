

<?php
include('messageconnection.php');

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $password = $_POST['password'];
    //$hiddenname = sha1($name, true); name='$hiddenname' AND
    $hiddenpassword = md5($password);

    $result = mysqli_query($conn, "SELECT email FROM message WHERE  password='$hiddenpassword'");
    $row = mysqli_fetch_array($result);
    // echo 'my name is: '.$hiddenname;


    $a =mysqli_num_rows($result);
    if($a == 1) {
        echo "You are logged in.";
    } else {
        echo "Incorrect username or password.";
    }
}

?>