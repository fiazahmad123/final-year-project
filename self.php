<?php
    include('connection.php');
    if(isset($_POST['submit'])){
    echo "youre data id enter";
    $query = mysqli_query($connection, "DELETE FROM client_data WHERE id=".$_GET['id']."");  
    if($query){
        header('location:manager.php');
    } else{
        echo " you data are not deleded";
    }
}
?>

