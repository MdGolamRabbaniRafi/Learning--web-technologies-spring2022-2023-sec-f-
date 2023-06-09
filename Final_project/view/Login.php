<?php 
    session_start();
    if(isset($_REQUEST['msg'])){
          if($_REQUEST['msg'] == "error"){
            ?>
            <html>
              <body>
                  <script>
                      alert("Invalid user/password, please register first!");
                      header('location: Login.php');
                  </script>
              </body>
            </html>
            <?php
            
        }else{
            header('location: Login.php');
        }
       
    }
    if(isset($_REQUEST['mesg'])){
       if($_REQUEST['mesg'] == "error"){
        ?>
      <html>
      <body>
          <script>
              alert("NULL VALUE!");
              header('location: Login.php');
          </script>
      </body>
    </html>
    <?php
    }
    else{
        header('location: Login.php');
    }
}


    
?>

<html>
    <head>
    <script>
    function validation()
    {
        var username=document.getElementById("username");
        var password=document.getElementById("password");
    if(username.value==""||password.value=="")
    {
        alert('Null name');
    }
    }
</script>



        <title>Log in</title>
            <link rel="stylesheet" href="style.css"/>
    </head>

    <body>
    <div class="c2">
        <form method="POST" action="../controller/loginCheck.php" enctype="">
        <table border="1">
<tr>
    <td style="width: 400px">
    <img align="left" src="X_company.png" width="30" height="30"/>
   <div class="c1"> Welcome to Doctor's portal</div>
     <div style="float: right;">
        <a href="public_user.php" style="font-size: 10px">Home</a>|
        <a href="Login.php"  style="font-size: 10px">Login</a>|
        <a href="signup.php" style="font-size: 10px">Registration</a>|
        <a href="Term_conditin.php" style="font-size: 10px">Term & condition</a>

     </div>    </td>
</tr>
<tr><td align="center" style="height:200">

            <fieldset style="width:100px">
                <legend><div class="c3"> LOGIN</div></legend>
                <table>
                    <tr>
                        <td>
<table>
                <tr><td> Username: </td><td><div class="c4"><input type="text" name="username" placeholder="Username" id="username" value="<?php if(isset($_COOKIE['username'])) {echo $_COOKIE['username'];}?>"/></div></td></tr>
               <tr><td> Password:</td> <td><div class="c4"> <input type="password" name="password" id="password" placeholder="Password" value="<?php if(isset($_COOKIE['password'])) {echo $_COOKIE['password'];}?>"/></div> </td></tr>
               </table>
               <table>
                <tr>
                    <td>
                    <input type="checkbox" name="Remember" value="Remember"/> Remember Me

                    </td>
                </tr>
               </table>
               <table>
                <hr>
               <tr><td><div class="c5"> <input type="submit" name="confirm_Log_in" onclick="validation()" value="Submit"/></div></td><td><a href="forget.php">Forget Password?</a> </td></tr>
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