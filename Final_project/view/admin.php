<?php

session_start();

if (!isset($_SESSION['usertype']) || $_SESSION['usertype'] != 'admin') {
	
	header("Location: login.php");
	exit();
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
  <style>
      body {
        background-color: #b6cfd1;
        padding-top: 10px;
        padding-right:10px;
      }
      table, th, td {
         border: 1px solid;
         padding: 5px;
         margin: auto;
         background-color: #27777d;
         font-size: 17px ;
      }
      input[type="submit"] {
        background-color: #9e3e42;
        padding:5px;
        border-radius:3px;
        color:white;
      }
      input[type="submit"]:hover{
        background-color: black;
      }
      a{
        text-decoration: none;
        background-color:green;
        color: #b6cfd1;
        border:1px solid ;
        padding: 5px;
        border-radius:5px;
      }
      a:hover{
        background-color:black;
      }
      


  </style>
</head>
<body align="center">
	<h1>Welcome Admin</h1>

<section align="right">

<h3><a href="admin_change.php">Change your Password</a><h3>

	<p><a href="../controls/logout.php">Logout</a></p>
</section>
</body>
</html>



<?php
 
        
 if(isset($_SESSION['usertype']) && $_SESSION['usertype'] === 'admin'){

    include_once "../models/user_model.php";

    $result = showusers ();
    echo'<h1>All users :</h1>';
    echo '<table width="600px" align="center" border= 1>';
    echo '<tr><th>Name</th><th>Email</th><th>Password</th><th>Role</th><th>Action</th></tr>';

          while ($showusers= mysqli_fetch_assoc ($result))
          {

            echo '<tr>';
        echo '<td>' . $showusers['username'] . '</td>';
        echo '<td>' . $showusers['email'] . '</td>';
        echo '<td>' . $showusers['password'] . '</td>';
        echo '<td>' . $showusers['type'] . '</td>';
         ?>
        <td> 
        <form action='../controls/delete_user.php' method='post'>
    <input type='hidden' name='id' value='<?php echo $showusers['id']; ?>'>
    <input type='submit' name='submit' value='Delete'>
      </form>
      </td>
      </tr>
    <?php

        
              
        
      }
      echo '</table>';
 }
 


?>







