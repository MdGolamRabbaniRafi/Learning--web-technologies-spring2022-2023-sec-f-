<?php 
    session_start();
    if(isset($_SESSION['flag']))
    {
        if(isset($_REQUEST['pass']))
        {
            if($_REQUEST['pass']=="not")
            {
                ?>
                  <html>
                    <body>
                        <script>
                            alert('Incorrect Password');
                            header('location: change_pass.php');
                        </script>
                    </body>
                  </html>
                  <?php
            }
            else{
                header('location: change_pass.php');
            }
        }
        if(isset($_REQUEST['match']))
        {
            if($_REQUEST['match']=="not")
            {
                ?>
                <html>
                  <body>
                      <script>
                          alert('Pasword are not match. Please enter same password to the new Pasword and retype password.');
                          header('location: change_pass.php');
                      </script>
                  </body>
                </html>
                <?php
          }
          elseif($_REQUEST['match']=="blank")
          {
            ?>
                <html>
                  <body>
                      <script>
                          alert(" Pasword can't be blanked.");
                          header('location: change_pass.php');
                      </script>
                  </body>
                </html>
                <?php
          } 
          elseif($_REQUEST['match']=="previous")
          {
            ?>
                <html>
                  <body>
                      <script>
                          alert(" You Enter your previous password. Check Again.");
                          header('location: change_pass.php');
                      </script>
                  </body>
                </html>
                <?php
          }
          elseif($_REQUEST['match']=="success")
          {
            ?>
                <html>
                  <body>
                      <script>
                          alert(" Your Password Change successfully");
                          header('location: change_pass.php');
                      </script>
                  </body>
                </html>
                <?php
          }
          else{
              header('location: change_pass.php');
          }

            

        }

?>

<html>
    <head>
        <script>
             function ajax(){
                let password = document.getElementById('password').value;
                let xhttp = new XMLHttpRequest();
                xhttp.open('post', 'abc.php', true);
                xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                xhttp.send('password='+password);
                xhttp.onreadystatechange = function(){
                    
                    if(this.readyState == 4 && this.status == 200){
                     // alert(this.responseText);
                      document.getElementsByTagName('h4')[0].innerHTML = this.responseText;
                      document.getElementsByTagName('h4')[0].style.color= "red";
                      document.getElementsByTagName('h4')[0].style.fontSize = "10px";
                    }
                }

            }
    
        </script>
        <title>Change Password</title>
        <link rel="stylesheet" href="style.css"/>
    </head>

    <body>
    <div class="view_profile">

        <form method="POST" action="../controller/LoggedinCheck.php" enctype="">
        <table border="1" style="width:820px; height: 300px;">
<tr>
    <td style="width: 400px">
    <img align="left" src="X_company.png" width="30" height="30"/>Welcome to Doctor's portal
     <div style="float: right;">
        <a href="Logged_in_user.php" style="font-size: 10px">Home</a>|
        <a href="logout.php"  style="font-size: 10px">Logout</a>|
        <a href="Registration.php" style="font-size: 10px">Registration</a>|
        <a href="Term_conditin.php" style="font-size: 10px">Term & condition</a>

     </div>    </td>
</tr>
<tr><td align="center" style="height:200">
            <fieldset style="width:300px">
                <legend>Change Password</legend>
                <table>
                    <tr>
                        <td>
                <table>
                <tr><td> Current</td><td style="width:200px"> Password: </td><td><input type="password" name="password" placeholder="Current Password" value=""/></td></tr>
               </table>
               <table>
                <tr><td style="width:200px"> New Password: </td><td><input type="password" id="password" name="new_password" placeholder="New Password"  onkeyup="ajax()" value=""/><h4 id='m'></h4></td></tr>
               </table>
               <table>
                <tr><td style="width:200px">Retype</td><td> New</td> <td>Password: </td><td><input type="password" name="retype_new_password"placeholder="Retype new Password" value=""/></td></tr>
               </table>
               <table>
                <hr>
               <tr><td><input type="submit" name="submit_change_password" value="Submit"/></td><td> </td></tr>
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