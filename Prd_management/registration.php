<?php
session_start();
if(isset($_REQUEST['error'])){
    if($_REQUEST['error'] == "errorpass"){
        echo "Your Pasword and Confirm password are not same please check again";
    }else{
        header('location: Registration.php');
    }
}
elseif(isset($_REQUEST['error1'])){
    if($_REQUEST['error1'] == "errorinfo"){
        echo "Don't give blank value";
    }else{
        header('location: Registration.php');
    }
}
elseif(isset($_REQUEST['error2'])){
    if($_REQUEST['error2'] == "erroruser"){
        echo "Already Exist this username";
    }
    elseif($_REQUEST['error2'] == "errorname")
    {
        echo "Invaid Name";
    }
    elseif($_REQUEST['error2'] == "errorpassword")
    {
        echo "Password must be at least 8 digit";
    }
    else{
        header('location: Registration.php');
    }
}

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
    Welcome to Requirment management system
     <div style="float: right;">
        <a href="prd.php" style="font-size: 10px">Back</a>

     </div>    </td>
</tr>
<tr><td>
   <fieldset>
    <legend>Registration</legend>
<table>
    <tr><td style ="width: 150px">Name</td><td> :<input type="text" name="Name" value="" placeholder="Name"/>
    </td>    </tr>
    </table>
<table>
    
<hr>

    <tr height="25"><td style ="width: 150px">Email</td><td> :<input type="email" name="email" value="" placeholder="Email"/></td></tr>
    </table>
    <table>
    <tr><td style ="width: 150px">User Name</td><td>  :<input type="text" name="username" value="" placeholder="Username"/></td></tr>
    <hr>
    </table>
<table>
<hr>
    <tr><td style ="width: 150px"> Password </td><td>:<input type="password" name="password" value="" placeholder="Password"/></td></tr>
    </table>
    <table><hr><tr><td style ="width: 150px">Confirm Password </td><td>:<input type="password" name="Confirm_password" value="" placeholder="Confirm Password"/></td></tr>
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
    </td>
</tr>
    </table>
    <table>

    <tr>
        <td colspan="3">
    </td>
</tr>
    </table>
   
    <table>
    <tr>
        <td colspan="3">
    <input type="submit" name="confirm_Registration" value="Submit"/>
  
    </td>
</tr>
    </table>


   </fieldset>
</table>  
</form>  

</body>

</html>
