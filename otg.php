<?php
$otg = rand(0000,9999);
?>
 <form action = "form.php" method = "post">
 <input type = "email" name = "email" plachoder = "her put email"><br>
 <input type = "hidden" name = "otg" value = "<?php echo $otg; ?>">
 <button type = "submit">singe in</button>
</form>


