<?php 
    session_start();
    if(isset($_SESSION['flag']))
    {
?>

<html>
    <head>
        <title>Log in</title>
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
            <td>Welcome<?php echo' '.$_SESSION['Name']?></td>

        </tr>
<tr><td align="center">
    Copyright 2017
</td></tr>
</table>  
</form>  

    </body>
</html>
<?php
}
?>