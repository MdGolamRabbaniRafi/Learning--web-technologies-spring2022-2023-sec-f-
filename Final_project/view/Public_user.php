<?php 
    session_start();
    if(count($_SESSION)>2){
        $_SESSION['have_id']="true";
    }
    else
    {
        $_SESSION['have_id']="false";

    }
?>

<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="style.css"/>

    </head>

    <body>
    <div class="view_profile">

        <form method="POST" action="../controller/loginCheck.php" enctype="">
        <table border="1" style="width:820px; height: 350px;">
               <tr><td rowspan="5"><img align="center" src="Public_Image.png" width="80" height="75"/> <br>Doctor's portal</td></tr>
               <tr><td>               <input type="submit" name="Registration" value="Registration"/></td></tr>
               <tr><td>               <input type="submit" name="Log_in" value="Log in"/></td></tr>
               <tr><td>               <input type="submit" name="Forget_Password" value="Forget Password"/></td></tr>

            </table>
            
        </form>
</div>
       
    </body>
</html>