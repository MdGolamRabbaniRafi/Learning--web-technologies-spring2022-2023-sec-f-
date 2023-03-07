<?php 
    session_start();
?>

<html>
    <head>
        <title>View Profile</title>
    </head>

    <body>

        <form method="POST" action="LoggedinCheck.php" enctype="">
        <table border="1">
<tr>
    <td style="width: 300px">
    <img align="left" src="X_company.jpg" width="30" height="30"/>
     Company
     <div style="float: right;">
     Loggedin as <a href="View_profile.php" style="font-size: 10px"><?php echo $_SESSION['username']?></a>|
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
                <a href="edit_profile.php">Edit Profile</a><br>

                <a href="change_profile.php">Change Profile Picture</a><br>
                <a href="change_pass.php">Change Password</a><br>
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
                <fieldset><legend>Profile</legend>

<table>
    <tr>
        <td>
      
                    <table>
                        
    <tr><td style ="width: 150px">Name</td><td> : <input type="text" name="Change_name" value="<?php echo $_SESSION['Name']?>"></td></tr>


    </td></tr>
    </table>
<table>
    
<hr>

<tr><td style ="width: 150px">Email</td><td> : <input type="text" name="Change_email" value="<?php echo $_SESSION['email']?>"></td></tr>
    </table>
    <table>
        <hr>
        <input type="radio" name="Change_gender" value="Male"<?php if ($_SESSION['gender'] == 'Male') echo 'checked'; ?>> Male
        <input type="radio" name="Change_gender" value="Female"<?php if ($_SESSION['gender'] == 'Female') echo 'checked'; ?>> Female
        <input type="radio" name="Change_gender" value="Female"<?php if ($_SESSION['gender'] == 'Other') echo 'checked'; ?>> Other

            
    <tr>
        <td>

    </td>
</tr>
    </table>
    <table>
        <hr>

    <tr>
    <tr height="25"><td style ="width: 150px">Date of Birth</td><td> : <input type="text" name="change_date" value="<?php echo $_SESSION['date'];?>">  </td></tr>

        </tr>
        </table>
        <table>
        <hr>

    <tr>
    <tr height="25"><td style ="width: 150px"><input type="submit" name="Edit_submit" value="Submit"></td></tr>

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
<tr><td align="center">
    Copyright 2017
</td></tr></table>

</form>  

    </body>
</html>