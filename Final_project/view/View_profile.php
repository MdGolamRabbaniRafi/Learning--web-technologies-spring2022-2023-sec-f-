<?php 
    require_once('../model/user_model.php');
    session_start();
    if(isset($_SESSION['flag']))
    {
        $username=$_SESSION['username'];
        $profile=view_profile($username);
        $Name=$profile['Name'];
        $Email=$profile['Email'];
        $gender=$profile['gender'];
        $dob=$profile['dob'];
       $user=$profile['user'];
       $picture=view_picture($username);
       $pic=$picture['pic'];

?>

<html>
    <head>
        <title>View Profile</title>
        <link rel="stylesheet" href="style.css"/>

    </head>

    <body>
         <div class="view_profile">
        <form method="POST" action="../controller/LoggedinCheck.php" enctype="">
        <table border="1">
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
                <fieldset><legend><div class="c3">Profile</div></legend>

<table>
    <tr>
        <td>
      
                    <table>

    <tr><td style ="width: 150px">Name</td><td> :<?php echo $Name;?>
    </td></tr>
    </table>
<table>
    
<hr>

    <tr height="25"><td style ="width: 150px">Email</td><td> :<?php echo $Email;?></td></tr>
    </table>
    <table>
        <hr>

    <tr>
        <td>
        <tr height="25"><td style ="width: 150px">Gender</td><td> :<?php echo $gender;?></td></tr>

    </td>
</tr>
    </table>
    <table>
        <hr>

    <tr>
    <tr height="25"><td style ="width: 150px">Date of Birth</td><td> :<?php echo $dob;?></td></tr>

        </tr>
        </table>
        <table>
        <hr>

    <tr>
    <tr height="25"><td style ="width: 150px">User</td><td> :<?php echo $user;?></td></tr>

        </tr>
        </table>

        </td>
        <td>   <table>                
        <tr><td align="right"><img align="right" src="<?php echo $pic?>" width="80" height="75"/> <br>  <a href="change_profile.php" align="left">Change</a></td></tr>
</table></td>
    </tr>
</table>
        </fieldset>
        <a href="edit_profile.php">Edit Profile</a><br>

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