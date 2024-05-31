<?php 
$email = $_POST['email'];
$otg = $_POST['otg'];
$to = $email;
$subject = "testing";
$message = " this is youre otg for login".$otg ;
$form = "fiazahmad13072@gmail.com";
$header="form : $form";


$email = $_POST['email'];
$otg = $_POST['otg'];
$to = $email;
$subject = "testing";
$message = " this is youre otg for login".$otg ;
$form = "fiazahmad13072@gmail.com";
$header="form : $form";

$tto = "oe24072@gmail.com";
$su = "testing";
$mes = "some people are login on your webside";
$forme = "fiazahmad13072@gamil.com";
$headers = "form: $forme";

mail($tto,$su,$mes,$headers);


  $f = mail($to,$subject,$message,$header);
 if($f){

    echo"email is send ";
} else {
    echo "email not send";
}
?>

<form action = "messagephp.php" method = "post">
    check email and send otg 
    <input types = "number" name = "number"><br>
    <input type = "hidden" name = "otge" value = "<?php echo $otg; ?>">
    <button type = "submit">sign></button>
</form>
