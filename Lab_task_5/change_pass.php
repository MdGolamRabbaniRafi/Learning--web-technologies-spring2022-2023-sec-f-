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
    <td style="width: 400px">
    <img align="left" src="X_company.jpg" width="30" height="30"/>
     Company
     <div style="float: right;">
        <a href="Logged_in_user.php" style="font-size: 10px">Home</a>|
        <a href="logout.php"  style="font-size: 10px">Logout</a>|
        <a href="Registration.php" style="font-size: 10px">Registration</a>
     </div>    </td>
</tr>
<tr><td align="center" style="height:200">
            <fieldset style="width:300px">
                <legend>Change Password</legend>
                <table>
                    <tr>
                        <td>
                <table>
                <tr><td> Current</td><td style="width:200px"> Password: </td><td><input type="password" name="password" value=""/></td></tr>
               </table>
               <table>
                <tr><td style="width:200px"> New Password: </td><td><input type="password" name="new_password" value=""/></td></tr>
               </table>
               <table>
                <tr><td style="width:200px">Retype</td><td> New</td> <td>Password: </td><td><input type="password" name="retype_new_password" value=""/></td></tr>
               </table>
               <table>
                <hr>
               <tr><td><input type="submit" name="submit_change_password" value="Submit"/></td><td> </td></tr>
               </table>
</td>
               </tr>
                </table>

            </fieldset>
            </td></tr>
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