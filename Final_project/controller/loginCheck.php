<?php 
    session_start();
    require_once '../model/user_model.php';





    if(isset($_REQUEST['submit_signup'])){
      include_once "../model/user_model.php";
      
      if(isset($_REQUEST['msg']) == "error"){
          echo "<h1>There is already an user using this name or email!</h1>";
      }
  
  
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $usertype = $_POST['usertype'];
  
  
  
  
  if ($username=='' || $email == '' || $password=="" || $usertype =='')
  {
      echo "Input fields cant be empty ";
  }
  else 
  {
      if($password== '0' ){
          echo "Password is not valid.";
      } else{
          
         $client = array('username' => $username, 'email' => $email, 'password' => $password, 'type' => $usertype);
         $result = add_User($client);
  if ($result)
  {
      echo " User Added";
      header('location: ../view/Login.php');
  
  }
  else 
  {
      echo "failed !";
  }
  
   }
  }
  }

  



              
               elseif(isset($_REQUEST['Public_Home']))
              {

                $_SESSION['flag'] = "true";
                
                header('location: ../view/Public_home.php');
              }
             
             
              elseif(isset($_REQUEST['confirm_Registration']))
              {
               $name=$_REQUEST['Name'];
               $username =$_REQUEST['username'];
               $flag=check_user($username);
               $password=$_REQUEST['password'];
               $email=$_REQUEST['email'];
               $cpass=$_REQUEST['Confirm_password'];
               $gender = "";
               $select_user="";



                  

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
                if( $username==""||$password==""||$email==""||$cpass==""||date('dd/mm/yy', strtotime($dob))==""||$gender==""||$name==""||$select_user=="")
                {
                   header('location: ../view/Registration.php');
                 
                }
               elseif(strlen($password)<8)
               {
                  header('location: ../view/Registration.php');
               }

               elseif($password!==$cpass)
               {
                  header('location: ../view/Registration.php');
                 
               }
               elseif($flag==true)
               {
                  header('location: ../view/Registration.php?error2=erroruser');
               }

               else{
                 
                  $user = array(
                     'Name' => $name,
                     'Email' => $email,
                     'username' => $username,
                     'password' => $password,
                     'gender' => $gender,
                     'dob' => $dob,
                     'user' => $select_user
                   );
                                     $status = addUser($user);
                  
                  if($status){
                      header('location: ../view/Login.php');
                  }else{
                      ?>
                         <html>
                           <body>
                            <script>
                             alert("Aleary have this username/DB error, please try again...");
                             header('location: Registration.php');
                                 </script>
                               </body>
                           </html>
                      <?php
                  }
                  ?>
                  <html>
                     <body>
                        <a href="../view/Public_user.php">Back</a>
                     </body>
                  </html>
                  <?php
               
               }
             
              
            }
            
              elseif(isset($_REQUEST['Registration']))
              {
                header('location: ../view/Registration.php');
              }
              elseif(isset($_REQUEST['Log_in']))
              {               
              header('location: ../view/Login.php');

            }
              elseif(isset($_REQUEST['confirm_Log_in']))
             {
               $_SESSION['flag'] = "true";
               $username = $_REQUEST['username']; 
               $password = $_REQUEST['password']; 
               if($username == "" && $password == "") {
                  $flag = false; 
                  header('location: ../view/login.php');
               }
               else{
                 
                   $flag=auth($username, $password);
                   if($flag)
                   {
                      $_SESSION['username']=$username;
                       $flag = false; 

                        header('location: ../view/Logged_in_user.php');

                   }
                   else
                   {
                       header('location: ../view/login.php?msg=error');
                   }
          
              }
            }
             
             elseif(isset($_REQUEST['Forget_Password']))
             {
                header('location: ../view/forget.php');
             }
             elseif(isset($_REQUEST['forget'])) {

             if($_REQUEST['forget'])
             {
               $email=$_REQUEST['forget_email'];
               $flag = false; 
                $file = fopen('../view/user.txt', 'r');
   
                if ($file) {
                 while (($line1 = fgets($file)) !== false) {
                   $user = explode('=', $line1);
                   if (isset($user[3]) && trim($user[3]) == $email)
                   {    
                     $flag = true; 
  
                   }
                  }
               fclose($file);
               if($flag)
               {

                   $flag = false; 

                   echo "your password is :".$_SESSION['password'];
                   ?>
                   <html><body>
                      <a href="../view/forget.php">Back</a>
                   </body></html>
                   <?php

               }
               else
               {
                  echo "Invalid Email";
                  ?>
                  <html><body>
                     <a href="../view/forget.php">Back</a>
                  </body></html>
                  <?php               
               
              }

             }
            }
         }
            elseif(isset($_REQUEST['Reset'])) {

             if($_REQUEST['Reset'])
             {
              $_REQUEST['username']="";
              $_REQUEST['password']="";
              $_REQUEST['email']="";
              $_REQUEST['Confirm_password']="";
              $_REQUEST['gender']="";
              $_REQUEST['date']="";
              $_REQUEST['Name']="";
              header('location: ../view/Registration.php');
             }
            }
            
            
        
        else
        {
                 echo "invalid request...";
        }
?>