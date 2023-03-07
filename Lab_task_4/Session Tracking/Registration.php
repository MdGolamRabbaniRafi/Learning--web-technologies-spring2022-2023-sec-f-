<?php
session_start();
if(isset($_SESSION['flag'])){
?>
<html>
<head>
<title>Registration</title>
</head>
<body>
    <form method="POST" action="loginCheck.php" enctype="">
<table border="1">
<tr>
    <td style="width: 400px">
    <img align="left" src="X_company.jpg" width="30" height="30"/>
     Company
     <div style="float: right;">
        <a href="public_user.php" style="font-size: 10px">Home</a>|
        <a href="Login.php"  style="font-size: 10px">Login</a>|
        <a href="Registration.php" style="font-size: 10px">Registration</a>
     </div>    </td>
</tr>
<tr><td>
   <fieldset>
    <legend>Registration</legend>
<table>
    <tr><td style ="width: 150px">Name</td><td> :<input type="text" name="Name" value=""/>
    </td>    </tr>
    </table>
<table>
    
<hr>

    <tr height="25"><td style ="width: 150px">Email</td><td> :<input type="email" name="email" value=""/></td></tr>
    </table>
    <table>
    <tr><td style ="width: 150px">User Name</td><td>  :<input type="text" name="username" value=""/></td></tr>
    <hr>
    </table>
<table>
<hr>
    <tr><td style ="width: 150px"> Password </td><td>:<input type="password" name="password" value=""/></td></tr>
    </table>
    <table><hr><tr><td style ="width: 150px">Confirm Password </td><td>:<input type="password" name="Confirm_password" value=""/></td></tr>
    </table>
    <table>
        <hr>

    <tr>
        <td colspan="3">
    <fieldset style="width:300px">
    <legend>Gender</legend>
    <input type="radio" name="gender" value="Male"/> Male
    <input type="radio" name="gender" value="Female"/> Female
    <input type="radio" name="gender" value="Other"/> Other
    </fieldset>

    </td>
</tr>
    </table>
    <table>
        <hr>

    <tr>
        <td colspan="3">
    <fieldset style="width:300px">
    <legend>Date Of Birth</legend>
    <input type="date" name="date" value=""/>
  
    </fieldset>
     <hr style="width:365">
    </td>
</tr>
    </table>
   
    <table>
    <tr>
        <td colspan="3">
    <input type="submit" name="confirm_Registration" value="Submit"/>
    
    <input type="submit" name="Reset" value="Reset"/>

  
    </td>
</tr>
    </table>


   </fieldset>
</td></tr>
<tr><td align="center">
    Copyright 2017
</td></tr>
</table>  
</form>  

</body>

</html>
<?php
}

?>