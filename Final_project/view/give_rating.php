<?php 
    session_start();
    require_once('../model/user_model.php');
    if(isset($_SESSION['flag']))
    {
        $doctor_username=$_SESSION['doctor_username'];
        $picture=view_picture($doctor_username);
        $pic=$picture['pic'];
        $doctor_profile=search_doctor($doctor_username);
        $doctor_name=$doctor_profile['Name'];
        $rating_check=check_doctor_rating($doctor_username);
        $rating=$rating_check['rate'];
        if($rating=='0')
        {
            $rating="Don't have any rating yet";
        }
        if(isset($_REQUEST['rating']))
        {
        if($_REQUEST['rating'] == "success"){
            ?>
            <html>
              <body>
                  <script>
                      alert('Rating Submitted ');
                      header('location: give_rating.php');
                  </script>
              </body>
            </html>
            <?php
          }
          else
          {
              header('location: give_rating.php');
          }
        }
?>

<html>
    <head>
        <title>Give Rating</title>
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

    <tr><td style ="width: 150px">Name</td><td> :<?php echo $doctor_name;?>
    </td></tr>
    </table>
        <td>   
            <table>                
        <tr><td align="right"><img align="right" src="<?php echo $pic?>" width="80" height="75"/></td></tr>
</table></td>
    </tr>
</table>
<table>
        <hr>

    <tr>
    <tr height="25"><td style ="width: 150px">Current Rating</td><td> :<?php echo $rating;?></td></tr>

        </tr>
        </table>
<table>                
        <tr><td style ="width: 150px">Select Rating</td><td><select name="rating">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>

                </select>
            </td></tr>
</table>
<table>
        <hr>

    <tr>
    <tr><td><input type="submit" name="rating_submit" value="Submit"/></td><td> </td></tr>
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