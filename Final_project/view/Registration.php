<?php
 session_start();

//     }else{
//         header('location: Registration.php');
//     }
// }
// elseif(isset($_REQUEST['error2'])){
//     if($_REQUEST['error2'] == "erroruser"){

//     }
//     else{
//         header('location: Registration.php');
//     }
// }

?>
<html>
<head>
<script>
    function validation()
    {
        var name=document.getElementById("name");
        var email=document.getElementById("email");
        var password=document.getElementById("password");
        var confirm_password=document.getElementById("confirm_password");
        var username=document.getElementById("username");

    if(name.value==""||email.value==""||password.value==""||confirm_password.value==""||username.value=="")
    {
        alert('Null name');
    }
    else if(password.value.length < 8)
    {
        alert('Password must be at least 8 digit');

    }
    else if(password.value!=confirm_password.value)
    {
         alert('Password and confirm password must be the same');
    }

    }
</script>
<title>Registration</title>
</head>
<body>
    <form method="POST" action="../controller/loginCheck.php" enctype="">
<table border="1">
<tr>
    <td style="width: 400px">
    <img align="left" src="X_company.png" width="30" height="30"/>
    Welcome to Doctor's portal
     <div style="float: right;">
        <a href="public_user.php" style="font-size: 10px">Home</a>|
        <a href="Login.php"  style="font-size: 10px">Login</a>|
        <a href="Registration.php" style="font-size: 10px">Registration</a>|
        <a href="Term_conditin.php" style="font-size: 10px">Term & condition</a>

     </div>    </td>
</tr>
<tr><td>
   <fieldset>
    <legend>Registration</legend>
<table>
    <tr><td style ="width: 150px">Name</td><td> :<input type="text" name="Name" value="" id="name" placeholder="Name"/>
    </td>    </tr>
    </table>
<table>
    
<hr>

    <tr height="25"><td style ="width: 150px">Email</td><td> :<input type="email" name="email" id="email" value="" placeholder="Email"/></td></tr>
    </table>
    <table>
    <tr><td style ="width: 150px">User Name</td><td>  :<input type="text" name="username" id="username" value="" placeholder="Username"/></td></tr>
    <hr>
    </table>
<table>
<hr>
    <tr><td style ="width: 150px"> Password </td><td>:<input type="password" name="password" id="password" value="" placeholder="Password"/></td></tr>
    </table>
    <table><hr><tr><td style ="width: 150px">Confirm Password </td><td>:<input type="password" name="Confirm_password" id="confirm_password" value="" placeholder="Confirm Password"/></td></tr>
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
    <fieldset style="width:300px">
    <legend>Registration as a</legend>
    <input type="radio" name="select_user" value="Doctor" />Doctor
    <input type="radio" name="select_user" value="Patient"/>Patient

    </fieldset>
     <hr style="width:365">
    </td>
</tr>
    </table>
   
    <table>
    <tr>
        <td colspan="3">
    <input type="submit" name="confirm_Registration" value="Submit" onclick="validation()"/>
    
    <input type="submit" name="Reset" value="Reset"/>

  
    </td>
</tr>
    </table>


   </fieldset>
</table>  
</form>  

</body>

</html>
