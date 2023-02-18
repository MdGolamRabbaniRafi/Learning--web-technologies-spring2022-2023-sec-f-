<?php 
    $email = $_REQUEST['email']; 
    
    if($email == "") {
        echo "Null value ..";
    }else{
       echo "Email inserted";
    }
?>