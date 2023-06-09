<!DOCTYPE html>
<html >
<head>
    
    <title>Doctor's Portal - Blogs</title>

        <script>
             function ajax(){
              //  alert('ok');
                 let content = document.getElementById('content').value;
                let xhttp = new XMLHttpRequest();
                xhttp.open('post', 'abc.php', true);
                xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                xhttp.send('content='+content);
                xhttp.onreadystatechange = function(){
                    
                    if(this.readyState == 4 && this.status == 200){
                     // alert(this.responseText);
                      document.getElementsByTagName('p')[0].innerHTML = this.responseText;
                      document.getElementsByTagName('p')[0].style.color= "Black";
                      document.getElementsByTagName('p')[0].style.fontSize = "20px";

                    }
                }
            }
        </script>

      
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
   

    <?php
        session_start();
        
if (!isset($_SESSION['usertype'])) {
    echo "<script>alert('Please log in to access this page.');</script>";
    echo "<form action='login.php' method='get'>";
  echo "<h4 style='font-size:20px; color:red;'>You need to login !!! </h4><input type='submit' value='Log In' style='width:100px;'>";
  echo "</form>";
  echo "<img src='../media/401.jpg' alt='Login Image' style='width: 50%; padding:20px; border-radius: 5%;'>";
    exit;
  }
        
        if(isset($_SESSION['usertype']) && $_SESSION['usertype'] === 'doctor'){
            
            echo '
            <h1>Doctors Portal - Blogs</h1>
            <section class="dbutton">
            
              
                    <div>
                        <h2><a href="doctor.php">Back</a></h2>
                    </div>
                    <div>
                        <h2><a href="../controls/logout.php">Logout</a></h2>
                    </div>
                    
            </section>

<section>
            <form action="../controls/post_article.php" method="post" onsubmit =" return check_blank()">
                <label for="title" style="text-align:center; font-size:20px; padding-top:30px;">Article Title:</label><br>
                <input type="text" id="title" name="title" ><br><br>

                <label for="content" style="text-align:center; font-size:20px;">Article Content:</label><br>
                <textarea id="content" name="content" rows="10" onkeyup="ajax()" ></textarea><br><br>

                <input type="submit" name = "submit" value="Post Article"  style="margin-right:70px;">
            </form>

            </section>
            ';

            ?>
            <h2>
                Posts 
            </h2>
              <p></p>
            <?php
           
            include_once "../models/blogs_model.php";
            
            $doctor_id = $_SESSION['id'];
            $result = show ($doctor_id);
            //$show= mysqli_fetch_assoc ($result);
           // echo $show['title'];
          while ($show= mysqli_fetch_assoc ($result))
          {
            echo "<h3>" . $show['title'] . "</h3>";
            echo "<p>" . $show['content'] . "</p>";
            
              
            echo"<form action='../controls/delete_post.php' method='post'>";
            ?>
            <input type="hidden" name="blog_id" value= <?php echo $show['id'] ;?> id="">
            <input type='submit' name='submit' value='Delete' onclick=" return confirm ('DO YOU WANT TO DELETE ?')"  >

             </form>
             <?php
            
          }
          
          }
          //for patient 
          if(isset($_SESSION['usertype']) && $_SESSION['usertype'] === 'patient')
          {
            include_once "../models/blogs_model.php";
            $result = show_all_blogs ();

           echo ' <h1>Doctors Portal - Blogs</h1>';
            
          while ($show= mysqli_fetch_assoc ($result))
          {
              require_once "../models/user_model.php";
              
              $doctor_id = $show['doctor'];
              $doctor_name=  doctor_name($doctor_id);
              ?>
           <h4><?php echo $doctor_name; ?></h4>
           <?php
           echo "<h3>" . $show['title'] . "</h3>";
           echo "<p>" . $show['content'] . "</p>";
          
            
              

            
          }
          ?>
          <a href="../controls/logout.php">LOGOUT</a>
          <?php
          
        }
        

        
    ?>
</body>
<script>
  function check_blank()
  {
    let title = document.getElementById ('title').value;
    let content = document.getElementById ('content').value;
    if (title =='' || content =='')
    {
      alert('PLEASE FILL UP THE INFORMATION !');
      return false;
    }
    return true;
  }
</script>
</html>
