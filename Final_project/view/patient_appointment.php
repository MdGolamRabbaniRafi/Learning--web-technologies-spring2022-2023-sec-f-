<?php 
    session_start();
    if(isset($_SESSION['flag']))
    {
        if(isset($_REQUEST['appointment']))
        {
          if($_REQUEST['appointment'] == "error"){
            ?>
            <html>
              <body>
                  <script>
                      alert('Enter date and time currectly');
                      header('location: patient_appointment.php');
                  </script>
              </body>
            </html>
            <?php
          }
          elseif($_REQUEST['appointment'] == "success")
          {
            ?>
            <html>
              <body>
                  <script>
                      alert("Request sent to the doctor. Please wait untill doctor's response.");
                      header('location: patient_appointment.php');
                  </script>
              </body>
            </html>
            <?php
          }
          else
          {
              header('location: patient_appointment.php');
          }
        }
?>

<html>
    <head>
        <title>Patient Appointment</title>
        <link rel="stylesheet" href="style.css"/>

        <script>
function ajax() {
  let date = document.getElementById('date').value;
  let time = document.getElementById('time').value;
  let xhttp = new XMLHttpRequest();
 
  xhttp.open('POST', 'bcd.php', true);
  xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
  xhttp.send('date=' + date + '&time=' + time);
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementsByTagName('h1')[0].innerHTML = this.responseText;
      document.getElementsByTagName('h1')[0].style.color= "Blue";
      document.getElementsByTagName('h1')[0].style.fontSize = "15px";
    }
  };
}

</script>

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
                <?php
                ?>
                <a href="logout.php">Log Out</a></td></tr>
</td>
               </tr>
                </table>

            </td>
            
            <td>
                
                <table>
                  <h1 id="im"></h1> <h1 id="I"></h1>
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

                    <tr>
  <td style="width: 100px">Date</td>
  <td>:
    <input type="date" id="date" name="Appointment_date" value="" onchange="ajax()" />
  </td>
</tr>
    </table>
        <td>   
            <table>                
            <tr><td style ="width: 100px">| Time</td><td> :<input type="time" name="Appointment_time" id="time" onchange="ajax()" value=""/>
</table></td>
    </tr>
</table>

<table>
        <hr>

    <tr>
    <tr><td><input type="submit" name="send_request" value="Send Request"/></td><td> </td></tr>
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