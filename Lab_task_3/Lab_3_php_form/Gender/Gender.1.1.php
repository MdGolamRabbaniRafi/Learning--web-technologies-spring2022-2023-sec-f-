<?php 
    $gender = $_REQUEST['gender']; 
    
    if($gender == "") {
        echo "Null value ..";
    }else{
       echo "Value inserted";
    }
?>