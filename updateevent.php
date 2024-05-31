<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="event.css">
</head>

<body>
    <?php
    include('connection.php');
    $query = "SELECT * FROM client_data WHERE id=".$_GET['id'].""; 
   // echo $query;
   $result = mysqli_query($connection, $query);
   $row = mysqli_fetch_array($result);


    ?>


    <div class="fiaz">

        <form action= "submit.php" method="post" enctype="multipart/form-data">

            <label for="name">name</label><br>
            <input type="text" id=" text" name="name" value="<?php echo $row['name'];  ?>"><br>

            <label for="name">experince</label><br>
            <input type="text" id=" text" name="experince" value="<?php echo $row['expernice'];?>"><br>

            <label for="name">services</label><br>
            <input type="text" id=" text" name="services" value="<?php echo $row['services'];?>"><br>

            <label for="name">city</label><br>
            <input type="text" id=" text" name="city" value="<?php echo $row['city'];?>"><br>

            <label for="name">availability</label><br>
            <input type="text" id=" text" name="availability" value="<?php echo $row['avaliblity'];?>"><br>

            <label for="name">status</label><br>
            <input type="text" id=" text" name="status" value="<?php echo $row['status'];?>" ><br>

            <label for="name">uname</label><br>
            <input type="text" id="text" name="username" value="<?php echo $row['username'];?>"><br>

            <label for="name">number</label><br>
            <input type="number" id="number" name="number" value="<?php echo $row['number'];?>"><br>

            <label for="name">email</label><br>
            <input type="email" id="email" name="email" value="<?php echo $row['email'];?>" ><br>
            <label for="name">password</label><br>
            <input type="password" id="password" name="password" value="<?php echo $row['password'];?>"><br>

            <label for="name">facebook</label><br>
            <input type="text" id=" text" name="facebook" value="<?php echo $row['facebook'];?>"><br>

            <label for="name">twitter</label><br>
            <input type="text" id=" text" name="twitter" value="<?php echo $row['twitter'];?>"><br>

            <label for="name">instagram</label><br>
            <input type="text" id=" text" name="instagram" value="<?php echo $row['instagram'];?>"><br><br>
            <label for="image">image12</label><br><br>
            <input type="file" name="myfile" value ="files/<?php echo $row ['image']?>"><br>
            <input type="hidden" name="id" value="<?php echo $row['id'] ?>">

            <input type="submit" value="update" name="submit">
        </form>

    </div>




</body>

</html>