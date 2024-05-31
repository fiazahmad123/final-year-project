<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
include('connection.php');
$data = mysqli_query($connection,"select * from client_data;");
while($result = mysqli_fetch_array($data)){
    ?>
    <video height="240" width="240" controls>
        <source src="file/<?php echo $result['image']; ?>">

    </video>
    <?php }
    ?>
</body>
</html>