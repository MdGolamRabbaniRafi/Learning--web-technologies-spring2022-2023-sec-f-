<?php
    $password = $_POST['password'];
    if(strlen($password) < 8)
    {
        $length=strlen($password);
        $add=8-$length;
        echo "Add more ".$add." digit to confirm";
    }
?>