<?php 
    $username = $_REQUEST['name']; 
    
    if($username == "") {
        echo "Null value ..";
    }else{
       echo "User Name inserted";
    }
?>