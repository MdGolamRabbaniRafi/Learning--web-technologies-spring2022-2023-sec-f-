<?php
    require_once 'db.php';
    function add($product_name,$buy,$sell){
        $con = getConnection();
        $sql = "insert into product values('$product_name', '$buy','$sell')";
        $status = mysqli_query($con, $sql);
        if($status==true)
        {
            return $status;
        }
        else
        {
            echo "DB error";
        }
    }
    function display($product_name)
    {
        $con = getConnection();
        $sql = ("select * from product where Name='$product_name'");
        $status = mysqli_query($con, $sql);
        $profile=mysqli_fetch_assoc($status);
        return $profile;

    }
    function search($product_name)
    {
        $con = getConnection();
        $sql = ("select * from product where Name='$product_name'");
        $status = mysqli_query($con, $sql);
        $count = mysqli_num_rows($status);
        $profile="";
   
        if($count == 1){
            $profile=mysqli_fetch_assoc($status);
            return $profile;
        }else{
            return $profile;
        }

    }
    function edit($name,$buy,$sell)
    {
        $con = getConnection();
        $sql = "update product SET buy = '$buy', sell = '$sell' where Name= '$name'";
        $result = mysqli_query($con, $sql);
        return $result;
    }
    function delete($name)
    {
        $con = getConnection();
        $sql = "delete FROM product WHERE Name ='$name'";
        $result = mysqli_query($con, $sql);
        return $result;
    }
?>