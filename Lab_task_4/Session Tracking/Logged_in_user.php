<?php 
    session_start();

?>
<html>
    <head>
        <title></title>
    </head>

    <body>
        
      <form method="POST" action="LoggedinCheck.php" enctype="">
            <table border='1'>
                <tr> 
                    <td>    
                        <table border='1'>
                            <tr><td><input type="submit" name="Dashboard" value="Dashboard"/></td></tr>
                            <tr><td><input type="submit" name="View_Profile" value="View Profile"/></td></tr>

                            <tr><td><input type="submit" name="Edit_Profile" value="Edit Profile"/></td></tr>

                            <tr><td><input type="submit" name="Change_profile_picture" value="Change profile picture"/></td></tr>
                            <tr><td><input type="submit" name="Change_password" value="Change password"/></td></tr>
                            <tr><td><input type="submit" name="Log_out" value="Log out"/></td></tr>

                        </table>
                    </td>
                    <td rowspan="5"><img align="center" src="<?php echo $_SESSION['image']?>" width="80" height="75"/> <br>  Logged in User</td>
                </tr>
            </table>
            
        </form>
    </body>
</html>