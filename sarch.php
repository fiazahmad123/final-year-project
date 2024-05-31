


    <?php 
 include('connection.php');
 $variable = $_post['search'];
 $result = mysqli_query($connection, "SELECT * FROM client_data where name like '%{$variable}%'; ");
 while($data = mysqli_fetch_array($result)){
  
    ?>

    <div id="big">
        <img src="file/<?php echo $data['image']; ?>" id="image">
        <div id="center">
            <h2>name <?php echo $data['name'];?></h>
            <h2>experience:  <?php echo $data['expernice'];?></h2>
            <h2>services:   <?php echo $data['services'];?></h2>
            <h3>city:    <?php echo $data['city'];?></h3>
            <h3>availability:   <?php echo $data['avaliblity'];?></h3>
            <h3>status:   <?php echo $data['status'];?>t</h3>
           
        </div>
        <hr>
        <div id="end">
            <h3>name:   <?php echo $data['username'];?></h3>
            <h3>number:   <?php echo $data['number'];?></h3>
            <h3>email:   <?php echo $data['email'];?></h3>
            <h3><a href=" <?php echo $data['twitter'];?>">facebook clik here for facebook</a></h3>
            <h3><a href=" <?php echo $data['instagram'];?>">instgram clik here for faceboook</a></h3>
            <h3><a href=" <?php echo $data['twitter'];?>">twitter clik here for twitter</a></h3>
        </div> <div id = "bu">
        <button><a  href="videos.php">More detils</a></button>
        <button><a href="update.html">edite</a></button>
        <button><a href="delete.html">delete</a></button>
    </div>
    </div>
    <?php }
    ?>
