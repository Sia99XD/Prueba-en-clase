<?php
   
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password1=md5($password); 

    echo "el email es ".$email;
    echo "  el password es ".$password1;
?>
