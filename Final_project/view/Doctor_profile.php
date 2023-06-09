<?php 
    session_start();
    require_once('../model/user_model.php');

    if(isset($_SESSION['flag']))
    {
        if(isset($_REQUEST['E'])){
            if($_REQUEST['E'] == "user"){
                ?>
                <html>
                    <body>
                        <script>
                            alert('No doctor available of this username')
                        </script>
                    </body>
                </html>
                <?php
            }else{
                header('location: searching.php');
            }
        }
        if(isset($_REQUEST['Error'])){
            if($_REQUEST['Error'] == "null"){
                ?>
                <html>
                    <body>
                        <script>
                            alert('Null value')
                        </script>
                    </body>
                </html>
                <?php
            }
            elseif($_REQUEST['Error'] == "username"){
                ?>
                <html>
                    <body>
                        <script>
                            alert('No doctor available of this username')
                        </script>
                    </body>
                </html>
                <?php
            }
            else{
                header('location: searching.php');
            }
        }
?>

<html>
    <head>
        <title>Doctor profile search</title>
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
        <a href="Logged_in_user.php" style="font-size: 10px">Home</a>|
        <a href="logout.php"  style="font-size: 10px">Logout</a>|
        <a href="Registration.php" style="font-size: 10px">Registration</a>
     </div>    </td>
</tr>
<tr><td align="center" style="height:200">
            <fieldset style="width:300px">
                <legend><div class="c3">Search Doctor</div></legend>
                <table>
                    <tr>
                        <td>
                <table>
                <tr><td style="width:200px"> Username: </td><td><div class="c4"><input type="text"placeholder="Enter Username" name="Doctor_username" value=""/></div></td></tr>
               </table>             
                <hr>
               <tr><td><input type="submit" name="search_doctor" value="Search"/></td><td> </td></tr>
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