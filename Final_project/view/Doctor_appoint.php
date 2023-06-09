<?php 
    session_start();
    require_once('../model/user_model.php');
    if(isset($_SESSION['flag']))
    {
        $username=$_SESSION['username'];
        $check= Review_request($username);
        $patient_name=$check['Patient_Name'];
        $date=$check['Date'];
        $time=$check['Time'];

        
?>

<html>
    <head>
        <title>Review Request</title>
        <link rel="stylesheet" href="style.css"/>

    </head>

    <body>
    <div class="view_profile">

        <form method="POST" action="../controller/LoggedinCheck.php" enctype="">
        <table border="1"style="width:820px; height: 350px;">
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
            <td>
                <table>
                    <tr>
                        <td>
                        <table>
                        <tr>
                    <td>
                <fieldset><legend><div class="c3">Profile</div></legend>

<table>
    <tr>
        <td>

        <table>

    <tr><td style ="width: 100px">Patient Name</td><td> :<?php echo $patient_name;
    ?>
    </td></tr></td></tr>
    </table>

    <tr>
     <td>
                          <table>

    <tr><td style ="width: 70px">Date</td><td> :<?php if(isset($date)){echo $date;}
    
    else
    {
        ?>
        <html>
            <body>
                Date is not set yet.            </body>
        </html>
        <?php
    }?>
    </td></tr>
    </table>
        <td>   
            <table>                
            <tr><td style ="width: 70px">| Time</td><td> :<?php if(isset($time)){echo $time;}
            
    else
    {
        ?>
        <html>
            <body>
                Time is not set yet.            </body>
        </html>
        <?php
    }?>
</table></td>
    </tr>
</table>

<table>
        <hr>

    <tr>
    <tr><td><input type="submit" name="Review_confirm_request" value="Confirm"/></td>
    <td><div class="c8"><input type="submit" name="Review_Reject_request" value="Reject"/></div></td></tr>
        </tr>
        </table>
</td>
    </tr>
</table>
        </fieldset>
        </td>

                </tr>

                        </td>
                    </tr>
                </table>
</td>
</tr>

</table>
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