<?php 
    session_start();
    require_once('../model/user_model.php');

    if(isset($_SESSION['flag']))
    {
        if(isset($_REQUEST['Null'])){
            if($_REQUEST['Null'] == "empty"){
                ?>
                <html>
                  <body>
                      <script>
                          alert("Don't give blank value");
                          header('location: edit_profile.php');
                      </script>
                  </body>
                </html>
                <?php
            }
            else
            {
                header('location: edit_profile.php');
            }
        }
        elseif(isset($_REQUEST['edit'])){
            if($_REQUEST['edit'] == "success")
            {
                ?>
                <html>
                  <body>
                      <script>
                          alert("Profile information update successfully");
                          header('location: View_profile.php');
                      </script>
                  </body>
                </html>
                <?php            
            }
            else{
                header('location: edit_profile.php');
            }
        }
        
        $username=$_SESSION['username'];
        $profile=view_profile($username);
        $Name=$profile['Name'];
        $Email=$profile['Email'];
        $gender=$profile['gender'];
        $dob=$profile['dob'];
?>

<html>
    <head>
        <title>Edit Profile</title>
        <link rel="stylesheet" href="style.css"/>

    </head>

    <body>
    <div class="view_profile">

        <form method="POST" action="../controller/LoggedinCheck.php" enctype="">
        <table border="1" style="width:820px; height: 350px;">
<tr>
    <td style="width: 300px">
    <img align="left" src="X_company.png" width="30" height="30"/>
    <div class="c1">Welcome to Doctor's portal</div>
     <div style="float: right;">
     Loggedin as <a href="View_profile.php" style="font-size: 10px"><?php echo $username?></a>|
        <a href="logout.php" style="font-size: 10px">Logout</a>
     </div>    </td>
</tr>
<tr><td align="left" style="height:200">
           
                <table>
                    <tr>
                        <td>
                <tr><td> Account <hr></td></tr>
                <tr><td>
                <a href="Dashboard.php">Dashboard</a><br>
                <a href="View_profile.php">View Profile</a><br>
                <a href="change_pass.php">Change Password</a><br>
                <a href="Searching.php">Searching</a>  <br>
               
                <a href="logout.php">Log Out</a></td></tr>
</td>
               </tr>
                </table>

            </td>
            <td>
                <table>
                    <tr>
                        <td>
                        <table>
                        <tr>
                    <td>
                <fieldset style="width:420px; height: 250px;"><legend><div class="c3"> Edit Profile</div></legend>

<table>
    <tr>
        <td>
      
                    <table>
                        
    <tr><td style ="width: 150px">Name:</td><td>  <div class="c4"><input type="text" name="Change_name" placeholder="Enter New Name" value="<?php echo $Name?>"></div></td></tr>


    </td></tr>
    </table>
<table>
    
<hr>

<tr><td style ="width: 150px">Email:</td><td>  <div class="c4"><input type="email" name="Change_email" placeholder="Enter New Email" value="<?php echo $Email?>"></div></td></tr>
    </table>
    <table>
        <hr>
        <input type="radio" name="Change_gender" value="Male"<?php if ($gender == 'Male') echo 'checked'; ?>> Male
        <input type="radio" name="Change_gender" value="Female"<?php if ($gender == 'Female') echo 'checked'; ?>> Female
        <input type="radio" name="Change_gender" value="Female"<?php if ($gender == 'Other') echo 'checked'; ?>> Other
    <tr>
        <td>

    </td>
</tr>
    </table>
    <table>
        <hr>

    <tr>
    <tr height="25"><td style ="width: 150px">Date of Birth:</td><td>  <div class="c4"><input type="text" name="change_date" placeholder="Enter New Date of Birth" value="<?php echo $dob;?>"></div>  </td></tr>

        </tr>
        </table>
        <table>
        <hr>

    <tr>
    <tr height="25"><td style ="width: 150px"><div class="c5"><input type="submit" name="Edit_submit" value="Submit"></div></td></tr>

        </tr>
        </table>

        </td>
        
    </tr>
</table>
        </fieldset>
        </td>
                </tr>

                        </td>
                    </tr>
                </table>
</td>
</tr>

</table>  
</table>

</form> 
    </div> 

    </body>
</html>
<?php
}
else
{
    ?>
    <html>
        <body>
            Invalid Request.<a href="Public_user.php">Back</a>
        </body>
    </html>
    <?php
}
?>