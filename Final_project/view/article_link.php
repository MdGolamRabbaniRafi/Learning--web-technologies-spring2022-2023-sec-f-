<?php 
    session_start();
    if(isset($_SESSION['flag']))
    {
        if(isset($_REQUEST['E'])){
            if($_REQUEST['E'] == "user"){
                echo "No article available of this name";
            }else{
                header('location: searching.php');
            }
        }
        if(isset($_REQUEST['Error'])){
            if($_REQUEST['Error'] == "username"){
                echo "No article available of this name";
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
                <legend>Aricle</legend>
                <table>
                    <tr>
                        <td>
                <table>
                <tr><td style="width:80px">Title: </td><td><?php echo $_SESSION['found_article']; ?></td></tr>
               </table>             
                <hr>
                <?php 
                if($_SESSION['found_article']=='Essay on Doctor for Students and Children'){
                ?>
                <table>
                <tr><td style="width:200px">Go to the article: <a href="https://www.toppr.com/guides/essays/essay-on-doctor/#:~:text=Doctors%20have%20a%20very%20noble,them%20in%20performing%20their%20treatment.">Click</a></td></tr>
               </table> 
               <?php 
                }elseif($_SESSION['found_article']=='Accelerating progress towards better health and equitable health care through open research')
                {
               ?>
                <table>
                <tr><td style="width:200px">Go to the article: <a href="https://f1000research.com/sociology_of_health?utm_source=google&utm_medium=sem&utm_campaign=JQF21317&gclid=Cj0KCQiAx6ugBhCcARIsAGNmMbi4Xlzy1lnhjbcWUz4b4jq6ya4be4irlibfcwEUJhMCJbRyfp5d6-4aAjOvEALw_wcB">Click</a></td></tr>
               </table>             
                <?php 
                }
                ?>
                <hr>
               <tr><td><input type="submit" name="Back_article" value="Back"/></td></tr>
<?php
}
else
{
    ?>
    <html>
        <body>
            Invalid Request.<a href="../view/Public_user.php">Back</a>
        </body>
    </html>
    <?php
}
?>
?>
