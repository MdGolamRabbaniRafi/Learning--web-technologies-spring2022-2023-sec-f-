<?php 
    session_start();
              
    require_once('../model/user_model.php');
    if(isset($_REQUEST['submit_change_picture']))
    {
      $_SESSION['flag'] = "true";
      
      $picture=$_REQUEST['file'];
      $username=$_SESSION['username'];
      $status=change_picture($username,$picture);
       if($status)
       {
        header('location: ../view/change_profile.php?changepic=success');
       }
       else
       {
        ?>
        <html>
         <body>
           Database error <a href="../view/change_profile.php">Back</a>
         </body>
        </html>
        <?php
       }
    }
   
  
               elseif(isset($_REQUEST['Dashboard']))
              {

                $_SESSION['flag'] = "true";
             
                         header('location: ../view/Dashboard.php');
              }
              elseif(isset($_REQUEST['View_Profile']))
              {
           
                $_SESSION['flag'] = "true";
                
                header('location: ../view/View_profile.php');
              }
              elseif(isset($_REQUEST['Edit_Profile'])) 
              {
                $_SESSION['flag'] = "true";
                header('location: ../view/edit_profile.php');
              

              }
              elseif(isset($_REQUEST['Edit_submit']))
              {
                $_SESSION['flag'] = "true";
                $username=$_SESSION['username'];
               $change_name=$_REQUEST['Change_name'];
               $change_email=$_REQUEST['Change_email'];
               $change_gender=$_REQUEST['Change_gender'];
               $change_date=$_REQUEST['change_date'];
               
               if($change_name==""||$change_email==""||$change_gender==""||$change_date=="")
               {
                header('location: ../view/edit_profile.php?Null=empty');

               }
               else
              {
                $status=update_profile($change_name,$change_email,$change_gender,$change_date,$username);
                if($status)
                {


                  header('location: ../view/edit_profile.php?edit=success');
                 
  
  
                 
                }
                else
                {
                  
                  ?>
                  <html><body>
                 DB error <a href="../view/edit_profile.php">Back</a>
                  </body></html>
  
                  <?php
  
                }

              } 




              }

              elseif(isset($_REQUEST['Term_back']))
              {
                                
                header('location: ../view/Public_user.php');

              } 

              elseif(isset($_REQUEST['Change_profile_picture'])) 
              {

                $_SESSION['flag'] = "true";
                
                header('location: ../view/change_profile.php');
              
              }
              elseif(isset($_REQUEST['Change_password'])) 
              {
                $_SESSION['flag'] = "true";
                
                header('location: ../view/change_pass.php');
              

              }
              elseif(isset($_REQUEST['Log_out'])) 
              {
                $_SESSION['flag'] = "true";
                
                header('location: ../view/logout.php');
              

              }
              elseif(isset($_REQUEST['searching'])) 
              {
                $_SESSION['flag'] = "true";
                
                header('location: ../view/searching.php');
              

              }
              elseif(isset($_REQUEST['rating_submit']))
              {
                $_SESSION['flag'] = "true";
                $rating=$_REQUEST['rating'];
                $username=$_SESSION['doctor_username'];
                $status=submit_rating($username,$rating);
                 if($status)
                 {
                  header('location: ../view/give_rating.php?rating=success');


                 }
                 else
                 {
                  ?>
                  <html>
                   <body>
                     Database error <a href="../view/Doctor_profile_view.php">Back</a>
                   </body>
                  </html>
                  <?php
                 }
              }
              elseif(isset($_REQUEST['search_doctor'])) 
              {
                $_SESSION['flag'] = "true";
                $doctor_username=$_REQUEST['Doctor_username'];
                if($doctor_username=="")
                {
                  header('location: ../view/Doctor_profile.php?Error=null');

                }
                else
                {
                  $_SESSION['flag'] = "true";
                  $found=search_doctor($doctor_username);
                  if($found!="")
                  {
                    $_SESSION['doctor_username']=$doctor_username;
                   header('location: ../view/Doctor_profile_view.php');
                  }
                  else
                  {
                    header('location: ../view/Doctor_profile.php?E=user');

                  }

                }              

              }
              elseif(isset($_REQUEST['Back_article']))
              {
                
                $_SESSION['flag'] = "true";
                
                header('location: ../view/article_profile.php');
              }
              elseif(isset($_REQUEST['send_request']))
              {
                $username=$_SESSION['username'];
                 if($_REQUEST['Appointment_date']==""|| $_REQUEST['Appointment_time']=="")
                 {

                    header('location: ../view/patient_appointment.php?appointment=error');

                 }
                 else
                 {

                  $_SESSION['flag'] = "true";
                  $check_date=$_REQUEST['Appointment_date'];
                  $check_time=$_REQUEST['Appointment_time'];
                  $check_date=date('d/m/Y', strtotime($check_date));
                  $check_time = date('g:i A', strtotime($check_time));
                  $status=send_request($_SESSION['username'],$_SESSION['doctor_username'],$check_date,$check_time);
                  header('location: ../view/patient_appointment.php?appointment=success');

                 }
                 }
              
              elseif(isset($_REQUEST['Review_request']))
              {
                $pending=Review_request($_SESSION['username']);
                
                if($pending!="")
                {
                  $_SESSION['flag'] = "true";
                
                header('location: ../view/Doctor_appoint.php');
                }
                else
                {
                  ?>
                  <html>
                    <body>
                      You have no pending Request.<a href="../view/Logged_in_user.php">Back</a>
                    </body>
                  </html>
                  <?php
                }
              }
              elseif(isset($_REQUEST['Review_Reject_request']))
              {
                $username=$_SESSION['username'];
                $review=Confirmation($username);
                if($review)
                {
                  ?>
                  <html>
                    <body>
                     Appointment Rejected. <a href="../view/Logged_in_user.php">Back</a>
                    </body>
                  </html>
                  <?php     
              }
            }






              elseif(isset($_REQUEST['Review_confirm_request']))
              {
                $username=$_SESSION['username'];
                $review=Confirmation($username);
                if($review)
                {
                  ?>
                  <html>
                    <body>
                     Appointment Confirmed. <a href="../view/Logged_in_user.php">Back</a>
                    </body>
                  </html>
                  <?php                }

              
              }


              elseif(isset($_REQUEST['search_article']))
              {
                $article=$_REQUEST['article_title'];
                if($article=="")
                {
                  header('location: ../view/article_profile.php?article=wrong');
                }
                else
                {
                  
                $file = fopen('../view/article.txt', 'r');
                $flag=false;
                while (($line = fgets($file)) !== false) {
                  $user = explode('|', $line);
                  if(trim($user[0]) == $article) {
                     $flag=true;
                  }
                
                }
                if($flag)
                {
                  $flag=false;
                  $_SESSION['found_article']=$article;                
                header('location: ../view/article_link.php');
                }
                elseif($article=="")
                {
                  ?>
                  <html>
                   <body>
                   Blank Value <a href="../view/article_profile.php">Back</a>
                   </body>
                  </html>
                  <?php
                }
                else
                {
                 ?>
                 <html>
                  <body>
                  Sorry, We have no article of this name <a href="../view/article_profile.php">Back</a>
                  </body>
                 </html>
                 <?php
                }
                }

              }
              elseif(isset($_REQUEST['Search']))
              {
                      $filter=$_REQUEST['Filter'];
                      if($filter=='Doctor')
                      {
                        
                          header('location: ../view/Doctor_profile.php');
                          
                        
                      }
                      elseif($filter=='Article')
                      {
                        header('location: ../view/article_profile.php');
                      }
                      else
                      {
                        ?>
                        <html>
                          <body>
                            Select what you want to search<a href="../view/searching.php">Back</a>
                          </body>
                        </html>
                        <?php
                      }
              } 
              elseif(isset($_REQUEST['submit_change_password']))
              {
                $current_password=$_REQUEST['password'];
                $newpassword=$_REQUEST['new_password'];
                $retype=$_REQUEST['retype_new_password'];

                $username = $_SESSION['username']; 
                $profile=view_profile($username); 
                $password = $profile['password']; 
                if($current_password!=$password)
                {
                  header('location: ../view/change_pass.php?pass=not');

                }
                elseif(strlen($newpassword)<8)
                {
                  header('location: ../view/change_pass.php');
                }
                elseif($newpassword!=$retype)
                {
                  header('location: ../view/change_pass.php?match=not');
                }
                elseif($newpassword=="")
                {
                  header('location: ../view/change_pass.php?match=blank');
                }
                
                
                   
                elseif($newpassword==$password)
                {
                  header('location: ../view/change_pass.php?match=previous');

                }
                else
                {
                  $status=change_password($username,$newpassword);
                  if($status)
                  {  
                    header('location: ../view/change_pass.php?match=success');
                  }
                  else
                  {
                    ?>
                    <html>
                      <body>
                        Database error<a href="../view/change_pass.php">Back</a>
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