
            <?php   if(isset($_COOKIE["ct"])){
    $cookie_data = stripslashes($_COOKIE['ct']);
    $cart_data = json_decode($cookie_data, true);
    $i=0;
    foreach($cart_data as $i => $values )
    {
      ?>
                <?php  echo $values['name']; ?><br>
                <?php  echo $values['id']; ?><br>
                    
<?php  $i+=1; } }



?>
