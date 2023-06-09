<?php 
    session_start();
    require_once('../model/user_model.php');

    if(isset($_SESSION['flag']))
    {
        $profile=view_profile($_SESSION['username']);
        $name=$profile['Name'];
?>

<html>
    <head>
        <title>Dashboard</title>
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
</td></tr>
</td>
               </tr>
                </table>

            </td>
            <td>Welcome<?php echo' '.$name?></td>

        </tr>
</table>  
</form>  

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