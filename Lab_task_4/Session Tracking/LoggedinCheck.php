<?php 
    session_start();
   
              
   
    if(isset($_REQUEST['submit_change_picture']))
    {
      
     $filename= $_REQUEST['file'];
     if($filename!="")
    {
      $_SESSION['image2']=$filename;
      if($_SESSION['image2']=="")
      {
        $_SESSION['image']=$_SESSION['image1'];
      }
      elseif($_SESSION['image2']!="")
      {
        $_SESSION['image']=$_SESSION['image2'];
      }
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
               elseif(isset($_REQUEST['Dashboard']))
              {

                $_SESSION['flag'] = "true";
                
                header('location: Dashboard.php');
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
                $_SESSION['Name']=$_REQUEST['Change_name'];
                $_SESSION['email']=$_REQUEST['Change_email'];
                $_SESSION['gender']=$_REQUEST['Change_gender'];
                $_SESSION['date']=$_REQUEST['change_date'];
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
                if($password!=$_SESSION['password'])
                {
                  ?>
                  <html>
                    <body>
                      Incorrect Password<a href="change_pass.php">Back</a>
                    </body>
                  </html>
                  <?php
                }
                elseif($newpassword!=$retype)
                {
                  ?>
                  <html>
                    <body>
                      Pasword are not match. Please enter same password to the new Pasword and retype password.<a href="change_pass.php">Back</a>
                    </body>
                  </html>
                  <?php
                }
                elseif($newpassword==$_SESSION['password'])
                {
                  ?>
                  <html>
                    <body>
                      You Enter your previous password. Check Again.<a href="change_pass.php">Back</a>
                    </body>
                  </html>
                  <?php
                }
                else
                {
                  $_SESSION['password']=$newpassword;
                  $_SESSION['Confirm_password']=$retype;
                  ?>
                  <html>
                    <body>
                      Your Password Change successfully<a href="change_pass.php">Back</a>
                    </body>
                  </html>
                  <?php
                }
              }
           
           
             
                        
            
        
        else
        {
                 echo "invalid request...";
        }
?>