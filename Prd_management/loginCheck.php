<?php
    session_start();
    if(isset($_REQUEST['confirm_Registration']))
    {
        $name=$_REQUEST['Name'];
        $username =$_REQUEST['username'];
        $password=$_REQUEST['password'];
        $email=$_REQUEST['email'];
        $cpass=$_REQUEST['Confirm_password'];
        $gender = "";
        $file = fopen('user.txt', 'r');
        $flag=false;
        while(!feof($file))
        {
          $data = fgets($file);
            $user = explode('=', $data);
           

            if(isset($user[1]) && trim($user[1]) == $username)
            $flag = true; 
       
      

  if (isset($_REQUEST['gender'])) {
    $selected_gender = $_REQUEST['gender'];
   if ($selected_gender == "Male") {
    $gender = "Male";
    } elseif ($selected_gender == "Female") {
       $gender = "Female";
    } else {
    $gender = "Other";
   }
   }
   if (isset($_REQUEST['select_user'])) {
      $selected_user = $_REQUEST['select_user'];
     if ($selected_user == "Doctor") {
      $select_user = "Doctor";
      }
       elseif ($selected_user == "Patient") {
         $select_user = "Patient";
      }
     }
   $dob = $_REQUEST['date'];
   if( $username==""||$password==""||$email==""||$cpass==""||date('dd/mm/yy', strtotime($dob))==""||$gender==""||$name=="")
   {
      header('location: registration.php?error1=errorinfo');
     
   }
   elseif(strlen($password)<8)
   {
      header('location: registration.php?error2=errorpassword');
   }

   elseif($password!==$cpass)
   {
      header('location: registration.php?error=errorpass');
     
   }
   elseif($flag==true)
   {
      header('location: registration.php?error2=erroruser');
   }

   else{
      $_SESSION['Name']=$name;
      $_SESSION['username']= $username;
      $_SESSION['password']= $password;
      $_SESSION['email']=$email;
      $_SESSION['Confirm_password']=$cpass;
      $_SESSION['gender']=$gender;
      $_SESSION['date']=date('d/m/Y', strtotime($dob));
      $file = fopen('user.txt', 'a');
      $user = $name."=".$username."=".$password."=".$email."=".$cpass."=".$gender."=".$_SESSION['date']."="."\r\n";
      fwrite($file, $user);
      fclose($file);
      echo"Registration completed";
      ?>
      <html>
         <body>
            <a href="prd.php">Back</a>
         </body>
      </html>
      <?php
   
    }
    }
}
elseif(isset($_REQUEST['view']))
{
   header('location: view.php');

}
elseif(isset($_REQUEST['add']))
{
    header('location: select_specification.php');
}
elseif(isset($_REQUEST['Back']))
{
    header('location: Loggedin.php');

}
elseif(isset($_REQUEST['Update']))
{
    header('location: update.php');

}

elseif(isset($_REQUEST['confirm_Log_in']))
{
    $_SESSION['flag'] = "true";
    $username = $_REQUEST['username']; 
    $password = $_REQUEST['password']; 
    $flag = false;
    if($username == "" && $password == "") {
        echo "Null value ..";
        ?>
        <html>
          <body>
             <a href="Login.php">Back</a>
          </body>
        </html>
        <?php
    }
    else{
        $file = fopen('user.txt', 'r');
        while(!feof($file))
                   {
                     $data = fgets($file);
                       $user = explode('=', $data);
                       if($username == $user[1] && $password == $user[2])
                       {
                           $flag = true; 
                           $_SESSION['Name']=trim($user[0]);
                           $_SESSION['username']= trim($user[1]);
                           $_SESSION['password']= trim($user[2]);
                           $_SESSION['email']=trim($user[3]);
                           $_SESSION['Confirm_password']=trim($user[4]);
                           $_SESSION['gender']=trim($user[5]);
                           $_SESSION['date']=trim($user[6]);

                       }
                   }
                   fclose($file);
                   if($flag)
                   {
                       $flag = false; 

                        header('location: Loggedin.php');

                   }
                   else
                   {
                       header('location: prd.php?msg=error');
                   }
    }
}
?>