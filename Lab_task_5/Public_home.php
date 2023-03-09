<?php
session_start();
if(isset($_SESSION['flag'])){
?>
<html>
<head>
<title>Public Home</title>
</head>
<body>
<table border="1">
<tr>
    <td style="width: 400px">
    <img align="left" src="X_company.jpg" width="30" height="30"/>
     Company
     <div style="float: right;">
        <a href="public_user.php" style="font-size: 10px">Home</a>|
        <a href="Login.php" style="font-size: 10px">Login</a>|
        <a href="Registration.php" style="font-size: 10px">Registration</a>
     </div>    </td>
</tr>
<tr height="75"><td>
    Welcome to xCompany
</td></tr>
<tr><td align="center">
    Copyright 2017
</td></tr>
</table>    

</body>

</html>
<?php
}
?>