<?php 
    session_start();
              
   
    if(isset($_REQUEST['submit_change_picture']))
    {
      
     $filename= $_REQUEST['file'];
     if($filename!="")
    {
  


      $username = $_SESSION['username']; 
      $password = $_SESSION['password']; 
    $flag = false; 
    $updated_user_data = array();
   $file = fopen('user.txt', 'r');

   if ($file) {
         while (($line = fgets($file)) !== false) {
               $user = explode('=', $line);
                if(trim($user[1]) == $username && trim($user[2]) == $password) {
                        $flag = true; 

                        $user[9] = $filename;
                      
                         $_SESSION['image2'] = trim($user[9]);
                       
                           $updated_user_data[] = implode("=", $user);
                           break;
                  }
                  else {
                    // Add the unmodified line to the array
                    $updated_user_data[] = $line;
                }
              }
          }
          fclose($file);

        if($flag) {
          setcookie('flag', 'abc', time()+1000000, '/');
         $file = fopen('user.txt', 'w');

           foreach ($updated_user_data as $line) {
           fwrite($file, $line);
          }


      if(trim($user[9])=="")
      {
        $user[10]=$user[8];
      }
      elseif(trim($user[9])!="")
      {
        $user[10]=$user[9];
      }
      $_SESSION['image']=trim($user[10]);
     ?> <html><body>
      Profile Picture updated
      <a href="change_profile.php">Back</a>
     </body></html><?php
    }
    else
    {
    
    ?> <html><body>
     Please Select a file
     <a href="change_profile.php">Back</a>
    </body></html><?php
    }
    }
  }
               elseif(isset($_REQUEST['Dashboard']))
              {

                $_SESSION['flag'] = "true";
                $file = fopen('user.txt', 'r');
                   
                   while(!feof($file))
                   {
                       $data = fgets($file);
                       $user = explode('|', $data);
                       //print_r($user);
                       if($username == trim($user[1]) && $password == trim($user[2]))
                       {
                           $flag = true; 
                           $_SESSION['Name']=trim($user[0]);
                       }
                         header('location: Dashboard.php');
                    }
                    fclose($file);
                }
              elseif(isset($_REQUEST['View_Profile']))
              {
           
                $_SESSION['flag'] = "true";
                
                header('location: View_profile.php');
              }
              elseif(isset($_REQUEST['Edit_Profile'])) 
              {
                $_SESSION['flag'] = "true";
                header('location: edit_profile.php');
              

              }
              elseif(isset($_REQUEST['Edit_submit']))
              {
               

                $username = $_SESSION['username']; 
                    $password = $_SESSION['password']; 
                  $flag = false; 
                  $updated_user_data = array();
                 $file = fopen('user.txt', 'r');

                 if ($file) {
                       while (($line = fgets($file)) !== false) {
                             $user = explode('=', $line);
                              if(trim($user[1]) == $username && trim($user[2]) == $password) {
                                      $flag = true; 

                                      $user[0] = $_REQUEST['Change_name'];
                                      $user[3] = $_REQUEST['Change_email'];
                                      $user[5] = $_REQUEST['Change_gender'];
                                      $user[6] = $_REQUEST['change_date'];

                                       $_SESSION['Name'] = trim($user[0]);
                                         $_SESSION['email'] = trim($user[3]);
                                          $_SESSION['gender'] = trim($user[5]);
                                         $_SESSION['date'] = trim($user[6]);
                                         $updated_user_data[] = implode("=", $user);
                                         break;
                                }
                                else {
                                  // Add the unmodified line to the array
                                  $updated_user_data[] = $line;
                              }
                            }
                        }
                        fclose($file);

          if($flag) {
             setcookie('flag', 'abc', time()+1000000, '/');
             $file = fopen('user.txt', 'w');

             foreach ($updated_user_data as $line) {
             fwrite($file, $line);
            }
             
            // header('location: Logged_in_user.php');
        } 
        else {
             echo 'Invalid username or password';
             }
             fclose($file);


                ?>
                <html><body>
                Profile information update successfully <a href="edit_profile.php">Back</a>
                </body></html>

                <?php



              }
              elseif(isset($_REQUEST['Change_profile_picture'])) 
              {

                $_SESSION['flag'] = "true";
                
                header('location: change_profile.php');
              
              }
              elseif(isset($_REQUEST['Change_password'])) 
              {
                $_SESSION['flag'] = "true";
                
                header('location: change_pass.php');
              

              }
              elseif(isset($_REQUEST['Log_out'])) 
              {
                $_SESSION['flag'] = "true";
                
                header('location: logout.php');
              

              }
              elseif(isset($_REQUEST['submit_change_password']))
              {
                $password=$_REQUEST['password'];
                $newpassword=$_REQUEST['new_password'];
                $retype=$_REQUEST['retype_new_password'];
                if($newpassword!=$retype)
                {
                  ?>
                  <html>
                    <body>
                      Pasword are not match. Please enter same password to the new Pasword and retype password.<a href="change_pass.php">Back</a>
                    </body>
                  </html>
                  <?php
                }
                elseif($newpassword=="")
                {
                  ?>
                  <html>
                    <body>
                      Pasword can't be blanked.<a href="change_pass.php">Back</a>
                    </body>
                  </html>
                  <?php
                }
                
                else
                {
                 // $_SESSION['password']=$newpassword;
                 // $_SESSION['Confirm_password']=$retype;
                 


                 $username = $_SESSION['username']; 
                 $password = $_SESSION['password']; 
              $flag = false; 
              $updated_user_data = array();
             $file = fopen('user.txt', 'r');

             if ($file) {
                   while (($line1 = fgets($file)) !== false) {
                         $userp = explode('=', $line1);
                         if($newpassword==trim($userp[2]))
                {
                  ?>
                  <html>
                    <body>
                      You Enter your previous password. Check Again.<a href="change_pass.php">Back</a>
                    </body>
                  </html>
                  <?php
                }
                          elseif(trim($userp[1]) == $username && trim($userp[2]) == $password) {
                                  $flag = true; 

                                  $userp[2] = $newpassword;
                                  $userp[4] = $retype;
                                
                                   $_SESSION['password'] = trim($userp[2]);
                                     $_SESSION['Confirm_password'] = trim($userp[4]);
                                     $updated_user_data[] = implode("=", $userp);
                                     break;
                            }
                            elseif(trim($userp[1]) == $username && trim($userp[2]) != $password)
                            {
                              ?>
                              <html>
                                <body>
                                  Incorrect Password<a href="change_pass.php">Back</a>
                                </body>
                              </html>
                              <?php
                            }
                            
               

                            else {
                              $updated_user_data[] = $line1;
                          }
                        }
                    }
                    fclose($file);
      if($flag) {
         setcookie('flag', 'abc', time()+1000000, '/');
         $file = fopen('user.txt', 'w');

         foreach ($updated_user_data as $line1) {
         fwrite($file, $line1);
         fclose($file);

        }


                  ?>
                  <html>
                    <body>
                      Your Password Change successfully<a href="change_pass.php">Back</a>
                    </body>
                  </html>
                  <?php
                }
              }
            } 
        else
        {
                 echo "invalid request...";
        }
?>