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
    Welcome to Requirment management system
     <div style="float: right;">
     
        <a href="registration.php" style="font-size: 10px">Registration</a>|

     </div>    </td>
</tr>
<tr><td align="center" style="height:200">
            <fieldset style="width:100px">
                <legend>LOGIN</legend>
                <table>
                    <tr>
                        <td>
<table>
                <tr><td> Username: </td><td><input type="text" name="username" placeholder="Username" value=""/></td></tr>
               <tr><td> Password:</td> <td> <input type="password" name="password" placeholder="Password" value=""/> </td></tr>
               </table>
               <table>
                <hr>
               <tr><td><input type="submit" name="confirm_Log_in" value="Submit"/></td></tr>
               </table>
</td>
               </tr>
                </table>

            </fieldset>
            </td></tr>

</table>  
</form>  


    </body>
</html>