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
                  header('location: Registration.php?error1=errorinfo');
                 
               }
               elseif($password!==$cpass)
               {
                  header('location: Registration.php?error=errorpass');
                 
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
                  $file = fopen('user.txt', 'a');
                  $user = $name."=".$username."=".$password."=".$email."=".$cpass."=".$gender."=".$_SESSION['date']."=".$_SESSION['have_id']."=".$_SESSION['image1']."=".$_SESSION['image2']."=".$_SESSION['image']."\r\n";
                  fwrite($file, $user);
                  fclose($file);
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
                   
                  // $counter=0;
                   while(!feof($file))
                   {
                     $data = fgets($file);
                       $user = explode('=', $data);
                       //print_r($user);
                      // $counter++;
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
                           $_SESSION['have_id']=trim($user[7]); 
                           $_SESSION['image1']=trim($user[8]);
                           $_SESSION['image2']=trim($user[9]);
                           $_SESSION['image']=trim($user[10]);
                          
                           if(trim($user[9])=="")
                           {
                              $user[10]=$user[8];
                              $_SESSION['image']=trim($user[8]);
                           }
                           else
                           {
                              $user[10]=$user[9];
                              $_SESSION['image']=trim($user[9]);
                           }
                           if(!empty($_REQUEST['Remember']))
                           {
                              setcookie('username',$username,time()+300);
                              setcookie('password',$password,time()+300);

                           }
                           else
                           {
                              
                              setcookie('username',$username,time()-300);
                              setcookie('password',$password,time()-300);


                           }
                          // $count=$counter;
                          // break;
                       }
                   }
                   fclose($file);
                   if($flag)
                   {

                       setcookie('flag', 'abc', time()+1000000, '/');
                       $flag = false; 

                        header('location: Logged_in_user.php');

                   }
                   else
                   {
                       header('location: login.php?msg=error');
                   }
                 //  fclose($file);
          
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