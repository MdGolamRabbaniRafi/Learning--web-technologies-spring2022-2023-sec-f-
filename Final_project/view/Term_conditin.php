<?php 
    session_start();
  
?>

<html>
    <head>
        <title>Term and condition</title>
        <link rel="stylesheet" href="style.css"/>

    </head>

    <body>
    <div class="view_profile">

        <form method="POST" action="../controller/LoggedinCheck.php" enctype="">
        <table border="1" style="width:820px; height: 350px;">
<tr>
    <td style="width: 400px">
    <img align="left" src="X_company.png" width="30" height="30"/>
    <div class="c1">Welcome to Doctor's portal</div>
     <div style="float: right;">
        <a href="Public_user.php" style="font-size: 10px">Home</a>|
        <a href="Registration.php" style="font-size: 10px">Registration</a>|
        <a href="Term_conditin.php" style="font-size: 10px">Term & condition</a>

     </div>    </td>
</tr>
<tr><td align="center" style="height:200">
            <fieldset style="width:780px">
                <legend>Term & condition</legend>
                <table>
                    <tr>
                        <td>
               <table>
                <tr><td><?php                 
                $text = file_get_contents('Term.txt');
                $_SESSION['term'] = $text;
               echo $_SESSION['term'];?></td></tr>
               </table>
               <table>
                <hr>
               <tr><td><input type="submit" name="Term_back" value="Back"/></td></tr>
               </table>
               
               
</td>
               </tr>
                </table>

            </fieldset>
            </td></tr>
</table>  
</form>  
</div>


    </body>
</html>
