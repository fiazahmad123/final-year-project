


    <?php 
 include('connection.php');
 $variable = $_POST['search'];
 $result = mysqli_query($connection, "SELECT * FROM client_data where name like '%{$variable}%'; ");


 $output = "";
 if(mysqli_num_rows( $result)>0){
 while($data = mysqli_fetch_assoc($result)){
  
    $output.='
    <div id="big">
        <img src="file/'.$data['image'].'" id="image">
        <div id="center">
            <h2>name '.$data['name'].'</h>
            <h2>experience:   '.$data['expernice'].'</h2>
            <h2>services:   '.$data['services'].'</h2>
            <h3>city:    '.$data['city'].'</h3>
            <h3>availability: '.$data['avaliblity'].'</h3>
            <h3>status:   '.$data['status'].'t</h3>
           
        </div>
        <hr>
        <div id="end">
            <h3>name:   '.$data['username'].'</h3>
            <h3>number:   '.$data['number'].'</h3>
            <h3>email:   '.$data['email'].'</h3>
            <h3><a href=" '.$data['twitter'].'">facebook clik here for facebook</a></h3>
            <h3><a href=" '.$data['instagram'].'">instgram clik here for faceboook</a></h3>
            <h3><a href=" '.$data['twitter'].'">twitter clik here for twitter</a></h3>
        </div> <div id = "bu">
        <button><a  href="videos.php">More detils</a></button>
        <button><a href="update.html">edite</a></button>
        <button><a href="delete.html">delete</a></button>
    </div>
    </div>';

     }
     echo $output;
    }
    else {
        echo "ther is no recode";
    }
    ?>
