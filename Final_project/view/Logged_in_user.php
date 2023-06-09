<?php 
    session_start();

    if(isset($_SESSION['flag']))
    {
        require_once('../model/user_model.php');
        $username=$_SESSION['username'];
        $user_check=view_profile($username);
        $user= $user_check['user'];
        $picture=view_picture($username);
        $pic=$picture['pic'];
?>
<html>
    <head>
        <link rel="stylesheet" href="style.css"/>

    </head>

    <body>
        <div class="c2">
      <form method="POST" action="../controller/LoggedinCheck.php" enctype="">
            <table style="width:420px; height: 250px;">
                <tr> 
                    <td>    
                        <table border='1' style="width:200px; height: 200px;">
                            <tr><td><div class="c6"><input type="submit" name="View_Profile" value="View Profile"/></div></td></tr>
                            <tr><td><div class="c6"><input type="submit" name="Change_password" value="Change password"/></div></td></tr>
                            <tr><td><div class="c6"><input type="submit" name="searching" value="Searching"/></div></td></tr>
                            
                            <?php
                if($user=="Doctor")
                {
                    ?>
                    <html>
                        <body>
                        <tr><td><div class="c6"><input type="submit" name="Review_request" value="Review Request"/></div></td></tr>
                        </body>
                    </html>
                    <?php
                }
                ?>
                            <tr><td><div class="c7"><input type="submit" name="Log_out" value="Log out"/></div></td></tr>

                        </table>
                    </td>
                    <td rowspan="5"><img align="center" src="<?php echo $pic?>" width="120" height="120"/> <br>  Logged in User</td>
                </tr>
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