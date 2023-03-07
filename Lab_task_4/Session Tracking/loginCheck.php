<?php 
    session_start();
   
              
               if(isset($_REQUEST['Public_Home']))
              {

                $_SESSION['flag'] = "true";
                
                header('location: Public_home.php');
              }
             
              elseif(isset($_REQUEST['confirm_Registration']))
              {
               $name=$_REQUEST['Name'];
               $username =$_REQUEST['username'];
             
               $password=$_REQUEST['password'];
               $email=$_REQUEST['email'];
               $cpass=$_REQUEST['Confirm_password'];
               $gender = "";
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
               $dob = $_REQUEST['date'];
               if( $username==""||$password==""||$email==""||$cpass==""||date('dd/mm/yy', strtotime($dob))==""||$gender==""||$name=="")
               {
                  echo"please provide information correctly";
                  ?>
                  <html><body>
                     <a href="Registration.php">Back</a>
                  </body></html>
                  <?php
             
               }
               elseif($password!==$cpass)
               {
                  echo"your Password and confirm password are not same";
                  ?>
                  <html>
                     <body>
                        <a href="Registration.php">Back</a>
                     </body>
                  </html>
                  <?php
               }
               else{
                  echo"Registration completed";
                  $_SESSION['Name']=$name;
                  $_SESSION['username']= $username;
                  $_SESSION['password']= $password;
                  $_SESSION['email']=$email;
                  $_SESSION['Confirm_password']=$cpass;
                  $_SESSION['gender']=$gender;
                  $_SESSION['date']=date('d/m/Y', strtotime($dob));
                  $_SESSION['have_id']="true"; 
                  $_SESSION['image1']="Public_Image.png";
                  $_SESSION['image2']="";
                  $_SESSION['image']="";
                  ?>
                  <html>
                     <body>
                        <a href="Public_user.php">Back</a>
                     </body>
                  </html>
                  <?php
               
               }
             
              }
              elseif(isset($_REQUEST['Registration']))
              {
               $_SESSION['flag'] = "true";
                header('location: Registration.php');
              }
              elseif(isset($_REQUEST['Log_in']))
              {
               $_SESSION['flag'] = "true";
                header('location: Login.php');
              }
              elseif(isset($_REQUEST['confirm_Log_in']))
             {
               if( $_SESSION['have_id']=="true")
              {
               if($_SESSION['username']==$_REQUEST['username'] && $_SESSION['password']==$_REQUEST['password'])
               {
                  $_SESSION['flag'] = "true";
                  if($_SESSION['image2']=="")
                  {
                    $_SESSION['image']=$_SESSION['image1'];
                  }
                  elseif($_SESSION['image2']!="")
                  {
                    $_SESSION['image']=$_SESSION['image2'];
                  }
                  header('location: Logged_in_user.php');
               }
               else
               {
                  echo"please enter your username and password correctly";?>
                  <html>                  
                  <a href="Login.php">Back</a>
                  </html>
                  <?php
               }
              }
              else{
               echo"You didn't register yet";
               ?>
               <html><body>
                  <a href="Registration.php">Go to registration page</a>
               </body></html>
               <?php
              }
             }
             elseif(isset($_REQUEST['Forget_Password']))
             {
                $_SESSION['flag'] = "true";
                header('location: forget.php');
             }
             elseif($_REQUEST['forget'])
             {
              if( $_SESSION['email']==$_REQUEST['forget_email'])
               {
                  echo "your password is :".$_SESSION['password'];

               }
               else
               {
                  echo "Invalid Email";
                  ?>
                  <html><body>
                     <a href="forget.php">Back</a>
                  </body></html>
                  <?php
               }
             }
             elseif($_REQUEST['Reset'])
             {
              $_REQUEST['username']="";
              $_REQUEST['password']="";
              $_REQUEST['email']="";
              $_REQUEST['Confirm_password']="";
              $_REQUEST['gender']="";
              $_REQUEST['date']="";
              $_REQUEST['Name']="";
              header('location: Registration.php');
             }
            
            
        
        else
        {
                 echo "invalid request...";
        }
?>