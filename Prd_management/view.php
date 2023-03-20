<?php 
    session_start();
?>

<html>
    <head>
        <title></title>
    </head>

    <body>
        
        <form method="POST" action="loginCheck.php" enctype="">
            <table border='1'>
                <tr>
                    <td align='center' colspan="7">
                        Welcome to PRD management system
                    </td>
                </tr>
               <tr><td>Feature Name</td><td>Specification</td>
               <td>Screen Definition </td>
               <td>         User Story</td>
               <td>Acceptance critaria</td>
               <td colspan="5">UI</td></tr>
               <tr><td rowspan="3">Log in</td><td>Login [Admin] [Patients] [Doctors]</td><td>
                
    input=email <br>
    input=password <br>
    button=login <br>
    link=forget password <br>
    link=signup</td>
<td>
- Enter registered email (input) <br>
- Enter password (input) [Logic: At least<br> 8 characters long, atleast one special character]<br>
- Click Login (button) [Logic: If<br> the email and password matches with<br> any user's credential (predetermined credentials<br> from database), user will be able to access his dashboard]
</td>
<td>
- Email (input) field should only accept a valid<br> email address as input, otherwise will <br>show an 'invalid email' message.<br>
- Password (input) should be minimum <br>8 characters long, otherwise show an invalid message<br>
- upon trying more than five times sequentially,<br> user will be blocked for 1 hour. 
</td>
<td colspan="6">
<img align="left" src="Picture1.png" width="120" height="120"/>

</td>
</tr>



<tr><td>Signup [Doctors] [Patient]</td><td>
                
    input=name<br>
    input=email<br>
    input=password<br>
    input=re-password<br>
    button=signup<br>
    link=signin<br></td>
<td>
- Enter Full name (input)<br>
- Enter unregistered email (input)<br>
- Enter password (input) [Logic: At least 8<br> characters long, atleast one special character]<br>
- Enter password again (input) <br>[Logic: should match password input]<br>
- Click Signup (button) [Logic: If the <br>email is unique, user will be <br> registered to the sysmem (databse)]<br>
- Signin (link) [Logic: redirect user to Login page]<br>
</td>
<td>
- Password (input) should be minimum 8 characters<br> long. Otherwise show an invalid message.<br>
- Re-password (input) should match password.<br> Otherwise show 'password do not match' message.<br>
- On clicking signup button, credential will be stored<br> in database, user will be<br> redirected to his dashboard.<br>
- A copy of the login information will be sent to his email.</td>
<td colspan="6">
<img align="left" src="Picture2.png" width="120" height="120"/>

</td>
</tr>






<tr><td>Forget Password [Admin] [Doctors] [Patient]</td><td>
                
    input=email <br>
    button=reset password <br>
    link=signin
</td>
<td>
- Enter registered email (input)<br>
- Click Reset Password (button)<br> [Logic: sends a password reset link on<br> the user's email. By clicking on the <br>link users will be able to change their password]<br>
- Signin (link) [Logic: redirect<br> user to Login page]<br>
</td>
<td>
- Email (input) field should only<br> accept valid registered email address <br>as input, otherwise will show 'no user found' message.<br>
- On clicking reset button, a email<br> will be sent to the user's <br>email with a reset password link.<br>
- On clicking the reset password link, <br>user will be redirected to a page,<br> where user can input his new password.<br>
- The reset password link will <br>get expired within 1 hour of link generation.<br><td colspan="6">
<img align="left" src="Picture3.png" width="120" height="120"/>
</td>
</tr>




<tr><td>Tearms & Conditions  [Admin][Doctor] [Patient]</td><td>
a <br>
input <br>
 Tearms & Conditions  
</td>
<td>
~A button to make sure (input ) <br>
~Asks the users know if they are agreed upon the terms <br>
</td>
<td>~ Former input fields have to be filled properly <br>
~ A Click button has to be Clicked which makes sure<br> the terms and condtions are read and ensured<br> by the user who has been registering <br>
~ only agreeing can make the registration proceed <br>
<td colspan="6">
<img align="left" src="Picture4.png" width="120" height="120"/>

</td>
</tr>







<tr><td>Doctor profile[Doctor]</td><td>
a <br>
input <br>
 Tearms & Conditions  
</td>
<td>
~A button to make sure (input ) <br>
~Asks the users know if they are agreed upon the terms <br>
</td>
<td>~ Former input fields have to be filled properly <br>
~ A Click button has to be Clicked which makes sure<br> the terms and condtions are read and ensured<br> by the user who has been registering <br>
~ only agreeing can make the registration proceed <br>
<td colspan="6">
<img align="left" src="Picture5.png" width="120" height="120"/>
</td>
</tr>
<tr></tr>

<tr><td colspan="6"align="right"><input type="submit" name="Back" value="Back"></td></tr>




            </table>
            
        </form>
       
    </body>
</html>