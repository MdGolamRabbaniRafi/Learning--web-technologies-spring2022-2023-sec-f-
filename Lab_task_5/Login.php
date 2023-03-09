<?php 
    session_start();
    if(isset($_REQUEST['msg'])){
        if($_REQUEST['msg'] == "error"){
            echo "Invalid user/password, please register first!";
        }else{
            header('location: Login.php');
        }
    }
?>

<html>
    <head>
        <title>Log in</title>
    </head>

    <body>

        <form method="POST" action="loginCheck.php" enctype="">
        <table border="1">
<tr>
    <td style="width: 400px">
    <img align="left" src="X_company.jpg" width="30" height="30"/>
     Company
     <div style="float: right;">
        <a href="public_user.php" style="font-size: 10px">Home</a>|
        <a href="Login.php"  style="font-size: 10px">Login</a>|
        <a href="Registration.php" style="font-size: 10px">Registration</a>
     </div>    </td>
</tr>
<tr><td align="center" style="height:200">
            <fieldset style="width:100px">
                <legend>LOGIN</legend>
                <table>
                    <tr>
                        <td>
<table>
                <tr><td> Username: </td><td><input type="text" name="username" value="<?php if(isset($_COOKIE['username'])) {echo $_COOKIE['username'];}?>"/></td></tr>
               <tr><td> Password:</td> <td> <input type="password" name="password" value="<?php if(isset($_COOKIE['password'])) {echo $_COOKIE['password'];}?>"/> </td></tr>
               </table>
               <table>
                <tr>
                    <td>
                    <input type="checkbox" name="Remember" value="Remember"/> Remember Me

                    </td>
                </tr>
               </table>
               <table>
                <hr>
               <tr><td><input type="submit" name="confirm_Log_in" value="Submit"/></td><td><a href="forget.php">Forget Password?</a> </td></tr>
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