<?php
if(isset($_COOKIE['doc-log-flag']))
{
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <style>
    body {
        background-color: #b6cfd1;
        padding-top: 30px;
        padding-right:10px;
      }
      a{
        background-color: green;
        padding:5px;
        border-radius:3px;
        color:white;
        text-decoration:none;
      }
      a:hover{
        background-color: black;
      }
      .dbutton{
        float: right;
        padding-top: 50px;
      }


    </style>


</head>
<body>


<section class="dbutton">
<?php
    require_once "../models/profile_model.php";
    session_start();
    $doctor_id = $_SESSION['id'];
    $profile_data = getProfileData($doctor_id);
    $doctor_profile = mysqli_fetch_assoc ($profile_data);
    $doctor_picture = $doctor_profile['picture'];
     


    ?>
    <img style ="width: 50 px; height: 50px "src="../pictures/<?php echo $doctor_picture ; ?>" alt="">

    <div>
    <h2><a href="profile_creation.php">Create a Profile</a></h2>
    </div>
    <div>
    <h2><a href="blog.php">Blogs</a></h2>
    </div>
    <div>
    <h2><a href="../controls/logout.php">Logout</a></h2>
    </div>

    </section>
    <section>
    <h1 style="text-align:center; font-size:40px;">
        welcome doctor
    </h1>
    <div style="text-align:center;">
        <p>To study the phenomenon of disease without books is to sail an
uncharted sea,<br/> while to study books without patients is not to go to sea
at all. Sir William Osler (1849-1919).</p>
    </div>
    </section>

    
    
</body>
</html>
<?php
}
else {
    echo "invalid request";
}
?>