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
                    <td>
                        Welcome to PRD management system
                    </td>
                </tr>
               <tr><td><input type="submit" name="add" value="Add feature"></td></tr>
               <tr><td><input type="submit" name="view" value="View feature"></td></tr>
               <tr><td><input type="submit" name="Update" value="Update feature"></td></tr>


            </table>
            
        </form>
       
    </body>
</html>