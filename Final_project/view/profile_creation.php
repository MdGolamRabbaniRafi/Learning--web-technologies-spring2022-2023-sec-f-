<?php
session_start();
if(isset($_SESSION['usertype']) && $_SESSION['usertype'] === 'patient' ||$_SESSION['usertype'] === 'doctor' )
{ 
    ?>
    <h1>Create Your Profile</h1>
    <form action="../controls/create_profile.php" method= "post" enctype="multipart/form-data" onsubmit = "return validation() ">
        <input type="hidden" name="user_id" value =<?php echo $_SESSION['id'];?> id="">
        <label for="fullname">Your Fullname:</label>
        <input type="text" name="fullname" id="fullname"> <br>
        <label for="gender">Your Gender :</label>
        <select name="gender" id="gender" style="margin-top:5px;">
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select><br>
        <label for="age">Your Age : </label>
        <input type="number" name="age" id="age"><br>
        <label for="mobile">Mobile Number :</label>
        <input type="text" name="mobile" id="mobile"><br>
        <label for="image">Your Profile Picture :</label>
        <input type="file" name="profile_picture" id="profile_picture"><br>
        <input type="submit" name="submit" value ="Create" id="">
    </form>
    <?php

}

?>

<style>
    body {
        background-color: #b6cfd1;
        padding-top: 30px;
        padding-right:10px;
        text-align:center;
      }
      
      input[type="number"]{
        padding:3px;
        border-radius:3px;
        margin-top:5px;
      }
      input[type="text"]{
        padding:3px;
        border-radius:3px;
        margin-top:5px;
      }
	  input[type="submit"] {
        background-color: green;
        padding:5px;
        border-radius:3px;
        color:white;
        margin-top:5px;
      }
	  input[type="submit"]:hover{
        background-color: black;
      }


    </style>
<script>
    function validation ()
    {
    let fullname = document.getElementById('fullname').value;
    let age = document.getElementById('age').value;
    let gender = document.getElementById('gender').value;
    let mobile = document.getElementById('mobile').value;
    if (fullname == '' || age =='' || gender =='' || mobile =='' )
    {
        alert('Fill up this fields !');
        return false ;
    }
    return true ; 
}
</script>