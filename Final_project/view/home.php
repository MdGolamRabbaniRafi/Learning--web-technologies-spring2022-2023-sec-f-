<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    body {
        background-color: #b6cfd1;
        padding-top: 10px;
        padding-right:10px;
      }
      input[type="submit"] {
        background-color: #0faff2;
        padding:5px;
        border-radius:3px;
        color:white;
        border: none;
        font-size:20px;
      }
      input[type="submit"]:hover{
        background-color: black;
      }
      img{
        border-radius:10px;
        width: 100%;
      }
     


    </style>



    <title>Doctors Portal</title>
</head>

<body>
    <section>
        <table align="center" width="600px" height="70px">
            <tr>
                <td>
                    <!-- <h2><a href="home.php">Home</a></h2> -->
                    <form action="home.php" method="POST">
                    <input type="submit"  value="Home">
	                </form>
                </td>
                <td>
                    <!-- <h2><a href="blog.php">Blogs</a></h2> -->
                    <form action="blog.php" method="POST">
                    <input type="submit"  value="Blogs">
	                </form>
                </td>
                <td>
                    <!-- <h2><a href="login.php">Log in</a></h2> -->
                    <form action="login.php" method="POST">
                    <input type="submit"  value="Log in">
	                </form>
                </td>
                <td>
                <form action="signup.php" method="POST">
                    <!-- <h2><a href="signup.php">Sign up</a></h2> -->
                    <input type="submit"  value="Sign Up">
	            </form>
                </td>
            </tr>
        </table>

    </section>

    <section>

        <img src="../media/Banner.png" alt="" />
    </section>



</body>

</html>