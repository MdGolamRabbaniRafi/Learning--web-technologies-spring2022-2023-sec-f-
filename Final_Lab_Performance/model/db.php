<?php 

    $db_host = '127.0.0.1';
    $db_user = 'root';
    $db_pass = '';
    $db_name = 'product_db';

    function getConnection(){
        global $db_host;
        global $db_name;
        global $db_user;
        global $db_pass;
        $con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
        return $con;
    }


?>