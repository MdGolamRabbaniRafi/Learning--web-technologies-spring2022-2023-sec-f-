<?php 
    session_start();
    if(isset($_SESSION['flag']))
    {
            if(isset($_REQUEST['article'])){
            if($_REQUEST['article'] == "wrong"){
                echo "Null value";
            }else{
                header('location: searching.php');
            }
        }
       
?>

<html>
    <head>
        <title>Log in</title>
    </head>

    <body>

        <form method="POST" action="../controller/LoggedinCheck.php" enctype="">
        <table border="1">
<tr>
    <td style="width: 400px">
    <img align="left" src="X_company.png" width="30" height="30"/>Welcome to Doctor's portal
     <div style="float: right;">
        <a href="Logged_in_user.php" style="font-size: 10px">Home</a>|
        <a href="logout.php"  style="font-size: 10px">Logout</a>|
        <a href="Registration.php" style="font-size: 10px">Registration</a>
     </div>    </td>
</tr>
<tr><td align="center" style="height:200">
            <fieldset style="width:300px">
                <legend>Search Article</legend>
                <table>
                    <tr>
                        <td>
                <table>
                <tr><td style="width:200px"> Article Title: </td><td><input type="text" name="article_title" value="" placeholder="Title Name"/></td></tr>
               </table>             
                <hr>
               <tr><td><input type="submit" name="search_article" value="Search"/></td></tr>
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