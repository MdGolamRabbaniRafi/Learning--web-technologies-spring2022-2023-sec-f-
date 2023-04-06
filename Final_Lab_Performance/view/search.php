<?php
    session_start();

require_once '../model/product_model.php';

if(isset($_REQUEST['submit_search']))
{

if(isset($_REQUEST['Searching']))
{
$_SESSION['Product_name']=$_REQUEST['Searching'];
$product_name=$_SESSION['Product_name'];
$product=search($product_name);
if($product!="")
{
    
$name=$product['Name'];
$buy=$product['buy'];
$sell=$product['sell'];
$profit=$sell-$buy;
}
else
{
    echo 'Not found this product';
}
}
else
{
    echo 'Not found';
}

}
?>
<html>
    <body>
    <form method="POST" action="search.php" enctype="">

        <fieldset style="width:100px">
            <legend>
                SEARCH
            </legend>
            <table>
                <tr>
                <td>
                    <input type="text" name="Searching">


                </td>
                <td>
                    <input type="submit" name="submit_search" value="Search By Name">
                </td>
            </tr>
            <tr>
                <hr>
                <table border="1">
                    <tr>
                        <td>
                            Name
                        </td>
                        <td>
                            Profit
                        </td>
                        
                    </tr>
                    <tr>
                        <td>
                            <?php if(isset($name)){echo $name;}?>
                        </td>
                        <td>
                        <?php if(isset($profit)){echo $profit;}?>
                        </td>
                        <?php if(isset($name))
                        {?>
                        <td>
                            <a href="edit.php">edit</a>
                        </td>
                        <td>
                            <a href="delete.php">delete</a>
                        </td>
                       <?php 
                      } 
                    
                    ?>
                    </tr>
                </table>
            </tr>
        </table>
        </fieldset>
        </form>

    </body>
</html>