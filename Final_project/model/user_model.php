<?php 
    require_once('db.php');

    function auth($username, $password){

        $con = getConnection();
        $sql = "select * from user where username='{$username}' and password='{$password}'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);
        if($count == 1){
            $_SESSION['username']=$username;
            return true;
        }else{
            return false;
        }
    }
    function rating($username)
    {
        $con = getConnection();
        $sql = "insert into rating values('$username','No rating yet')";
        $status = mysqli_query($con, $sql);
        return $status;
    }
    function picture($username)
    {
        $con = getConnection();
        $sql = "insert into picture values('$username','Public_Image.png')";
        $status = mysqli_query($con, $sql);
        return $status;
    }


  /*  function AddUser($user){
        $con = getConnection();
        $sql = "insert into registration values('{$user['Name']}', '{$user['Email']}', '{$user['username']}','{$user['password']}','{$user['gender']}','{$user['dob']}','{$user['user']}')";
        $status = mysqli_query($con, $sql);
        $status2=rating($user['username']);
        $status3=picture($user['username']);
        if($status==true && $status2==true && $status3==true)
        {
            return $status;
        }
        else
        {
            echo "DB error";
        }
    }*/
    function view_profile($username)
    {
        $con = getConnection();
        $sql = "select * from registration where username='{$username}'";
        $result = mysqli_query($con, $sql);
        $profile=mysqli_fetch_assoc($result);

        return $profile;
    }
    
    function check_user($username)
    {
        $con = getConnection();
        $sql = "select * from registration where username='{$username}'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);
        if($count==1)
        {
            return true;
        }
        else
        {
            return false;
        }

    }
    function update_profile($change_name,$change_email,$change_gender,$change_date,$username)
    {
        $con = getConnection();
        $sql = "update registration SET Name = '$change_name', Email = '$change_email', gender = '$change_gender',dob = '$change_date' where username= '$username'";
        $result = mysqli_query($con, $sql);
        return $result;
       
    }
    function change_password($username,$newpassword)
    {
        $con = getConnection();
        $sql = "update registration SET password = '$newpassword'where username= '$username'";
        $result = mysqli_query($con, $sql);
        return $result;
    }
    function search_doctor($doctor_username)
    {
        $con = getConnection();
        $sql = "select * from registration where username='{$doctor_username}' and user='Doctor'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);
        $doctor_profile="";
        if($count == 1){
            $doctor_profile=mysqli_fetch_assoc($result);
            return $doctor_profile;
        }else{
            return $doctor_profile;
        }
    }
    function check_doctor_rating($username)
    {
        $con = getConnection();
        $sql = "select * from rating where username='{$username}'";
        $result = mysqli_query($con, $sql);
        $profile=mysqli_fetch_assoc($result);

        return $profile;
    }
    function view_picture($username)
    {
        $con = getConnection();
        $sql = "select * from picture where username='{$username}'";
        $result = mysqli_query($con, $sql);
        $profile=mysqli_fetch_assoc($result);

        return $profile;
    }

    function submit_rating($username,$rating)
    {
        $con = getConnection();
        $sql = "update rating SET rate = '$rating'where username= '$username'";
        $result = mysqli_query($con, $sql);
        return $result;
    }
    function change_picture($username,$picture)
    {
        if(!empty($picture))        {
            $con = getConnection();
            $sql = "update picture SET pic = '$picture'where username= '$username'";
            $result = mysqli_query($con, $sql);
            return $result;
        }
        else
        {
            echo 'DB error';
        }
    }
    function send_request($username,$doctor_username,$check_date,$check_time)
    {
        $con = getConnection();
        $sql = "insert into patient_appointment values('$username', '$doctor_username', '$check_date','$check_time')";
        $status = mysqli_query($con, $sql);
        if($status)
        {
            return $status;
        }
        else
        {
            echo "DB error";
        }
    }
    function Review_request($username)
    {
        $con = getConnection();
        $sql = "select * from patient_appointment where Doctor_Name='{$username}'";
        $result = mysqli_query($con, $sql);
        if($result)
        {
            $profile=mysqli_fetch_assoc($result);
            return $profile;
            
        }
        else
        {
            return "";
        }

    }
    function Confirmation($username)
    {
        $con = getConnection();
        $sql = "delete FROM patient_appointment WHERE Doctor_Name ='{$username}'";
        $result = mysqli_query($con, $sql);
        if($result)
        {
            return true;
            
        }
        else
        {
            return false;
        }

    }

function add_User($user)
{
    $con = getconnection();
    $sql = "insert into user values ('' , '{$user['username']}' ,'{$user['email']}' , '{$user['password']}' , '{$user['type']}' )";
    $rslt = mysqli_query($con, $sql);
    return $rslt;
}

function login($logger)
{
    $con = getconnection();
    $sql = "select * from user where email = '{$logger['email']}' and password = '{$logger['password']}'";
    $rslt = mysqli_query($con , $sql);
    $row = mysqli_num_rows($rslt);
    if($row ==1)
    {
        return true;
    }
    return false ;
    

}
function type($logger)
{
    $con = getconnection();
    $sql = "select * from user where email = '{$logger['email']}' and password = '{$logger['password']}'";
    $rslt = mysqli_query($con , $sql);
    //$type = mysqli_assoc_result($rslt);
    return $rslt;
}



//user control for admin

function showusers ()
{
    $con = getconnection();
    $sql = "select * from user where type != 'admin' ";
    $rslt = mysqli_query($con, $sql);
    return $rslt;
}

function deleteuser($users)
{
    $con = getconnection();
    $sql = "DELETE FROM user where id = '{$users['id']}' ";
    $rslt = mysqli_query($con, $sql);
    return $rslt;
   
    
}
function doctor_name($id)
{
    $con =getconnection();
    $sql = "select * from user where id = {$id}";
    $rslt = mysqli_query($con, $sql);
    $name = mysqli_fetch_assoc($rslt);
    return $name['username'];
}
function show_data_byId($id)
{
    $con =getconnection();
    $sql = "select * from user where id = {$id}";
    $rslt = mysqli_query($con, $sql);
    return $rslt;
}
function updateData ($data, $id)
{
    $con =getconnection();
    $sql = "Update user set email = '{$data['email']}' , password = '{$data['password']}' where id = $id ";
    $rslt = mysqli_query($con, $sql);
    return $rslt;
}



?>