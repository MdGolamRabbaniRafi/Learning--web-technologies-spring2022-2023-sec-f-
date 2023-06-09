
<!DOCTYPE html>
<html>

<head>
	<title>Sign Up</title>

	<style>
    body {
        background-color: #b6cfd1;
        padding-top: 30px;
        padding-right:10px;
      }
      input[type="email"] {
        padding:3px;
        border-radius:3px;
		margin-left:23px;
      }
      input[type="password"]{
        padding:3px;
        border-radius:3px;
      }
      input[type="text"]{
        padding:3px;
        border-radius:3px;
      }
	  input[type="submit"] {
        background-color: green;
        padding:5px;
        border-radius:3px;
        color:white;
      }
	  input[type="submit"]:hover{
        background-color: black;
      }


    </style>
</head>

<body align="center">
	<h1>Sign Up</h1>
	<form action="../controller/loginCheck.php" method="POST" onsubmit="return checkBlank()">
		<label for="username">Username:</label>
		<input type="text" id="username" name="username"><br><br>

		<label for="username">Email:</label>
		<input type="email" id="email" name="email"><br><br>

		<label for="password">Password:</label>
		<input type="password" id="password" name="password"><br><br>
		<label for="usertype">User Type:</label>
		<select id="usertype" name="usertype">
			<!-- <option value="admin">Admin</option> -->
			<option value="doctor">Doctor</option>
			<option value="patient">Patient</option>
		</select><br><br>

		<input type="submit" name="submit_signup" value="Sign Up">
	</form>

</body>
<p>Already have an account! <a href="Login.php">Log In</a></p>

<script>
  function checkBlank(){
   let email = document.getElementById('email').value;
   let password = document.getElementById('password').value;
   let username = document.getElementById('username').value;
   let usertype = document.getElementById('usertype').value;
   if (email == '' || password =='' || username =='' || usertype== ''  )
    {
        alert('Fill up this fields !');
        return false ;
    }

    return true ; 
  }

  
</script>


</html>