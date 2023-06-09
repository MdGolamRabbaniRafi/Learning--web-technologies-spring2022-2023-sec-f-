<?php 
    session_start();
    require_once('../model/user_model.php');

    if(isset($_SESSION['flag']))
    {
        $username=$_SESSION['username'];
        $picture=view_picture($username);
       $pic=$picture['pic'];

       if(isset($_REQUEST['changepic'])){
        if($_REQUEST['changepic'] == "success"){
          ?>
          <html>
            <body>
                <script>
                    alert('Profile Picture changed ');
                    header('location: View_profile.php');
                </script>
            </body>
          </html>
          <?php
        }else{
            header('location: change_pass.php');
        }
    }
?>

<html>
    <head>
        <title>Change Profile Picure</title>
        <link rel="stylesheet" href="style.css"/>

    </head>

    <body>
    <div class="view_profile">

        <form method="POST" action="../controller/LoggedinCheck.php" enctype="">
        <table border="1" style="width:820px; height: 300px;">
<tr>
    <td style="width: 300px">
    <img align="left" src="X_company.png" width="30" height="30"/>
    <div class="c1">Welcome to Doctor's portal</div>
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
                <a href="change_pass.php">Change Password</a><br>
                <a href="Searching.php">Searching</a>  <br>

                <a href="logout.php">Log Out</a></td></tr>
</td>
               </tr>
                </table>

            </td>
            <td> <fieldset style="width:300px">
                <legend><div class="c3"> PROFILE PICTURE</div></legend>
                <table>
                    <tr>
                        <td>
<table>
                <tr><td>    <img align="left" src="<?php echo $pic?>" width="80" height="80"/></td></tr>
               </table>
               <table>
                <tr>
                    <td>
                    <div class="c5"><input type="file" name="file"/></div>
                    </td>
                </tr>
               </table>
               <table>
                <hr>
               <tr><td><div class="c5"><input type="submit" name="submit_change_picture" value="Submit"/></div></td><td> </td></tr>
               </table>
</td>
               </tr>
                </table>

            </fieldset></td>

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