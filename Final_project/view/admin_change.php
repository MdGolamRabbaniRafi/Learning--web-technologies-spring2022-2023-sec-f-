<!DOCTYPE html>
<html>
<head>
	<title>Admin Email and Password Change</title>

	<style>
    body {
        background-color: #b6cfd1;
        padding-top: 10px;
        padding-right:10px;
      }
      input[type="submit"] {
        background-color: green;
        padding:5px;
        border-radius:3px;
        color:white;
        margin-right:20px;
      }
      input[type="submit"]:hover{
        background-color: black;
      }
      a{
        background-color: green;
        padding:5px;
        border-radius:3px;
        color:white;
        text-decoration:none;
      }
      a:hover{
        background-color: black;}
      .dbutton{
        float: right;
        padding-top: 30px;
      
      }


    </style>
</head>
<body align="center">

<section>
        <table align="center" width="600px">
            <tr>
                <td>
                    <h2><a href="admin.php">Back to Dashboard</a></h2>
                </td>
                <td>
                    <h2><a href="../controls/logout.php">Logout</a></h2>
                </td>
                
            </tr>
        </table>

    </section>




	<h1>Change Admin Email and Password</h1>
	<form method="post" action="" onsubmit="return formValidate()">
		<label>Old Email:</label>
		<input type="email" name="old_email" id='old_email' > <br><br>
		<label>New Email:</label>
		<input type="email" name="new_email" id='new_email'><br><br>
		<label>Old Password:</label>
		<input type="password" name="old_password" id="old_password"><br><br>
		<label>New Password:</label>
		<input type="password" name="new_password" id="new_password"><br><br>
		
		<input type="submit" name="submit" value="Submit">
	</form>



</body>
</html>




<?php
include_once "../models/db.php";
include_once "../models/user_model.php";
session_start();
if(isset($_SESSION['usertype']) && $_SESSION['usertype'] === 'admin'){
	if (isset($_REQUEST['submit']))
  {
	$old_email = $_POST['old_email'];
	$new_email = $_POST['new_email'];
	$old_password = $_POST['old_password'];
	$new_password = $_POST['new_password'];

		
  $user_id = $_SESSION['id'];
  $admin_alldata = show_data_byId($user_id);
  $admin_data = mysqli_fetch_assoc($admin_alldata);
  ?>
  
  <?php
 $stored_email = $admin_data['email'];
  ?>
  
  <?php
   $stored_password =  $admin_data['password'];
   if ($old_password == $stored_password && $old_email == $stored_email )
   
   {
      $new_data = ['email'=> $new_email , 'password'=> $new_password];
      $update_data = updateData ($new_data , $user_id);
      $alert_flag ==true ; 
      


   
   }
   else 
   {
    echo " Email or Password did not match";
   }
}
}
  ?>
  <script>
    function formValidate()
    {
    let old_email = document.getElementById('old_email').value;
    let old_password = document.getElementById('old_password').value;
    let new_email = document.getElementById('new_email').value;
    let new_password = document.getElementById('new_password').value;
    if (old_email == '' || old_password == '' || new_email == '' || new_password =='')
    {
      alert('pleasse fill !');
      return false;
    }
    alert('Successsfully Updated !');
    return true ; 
  }

  </script>

  
