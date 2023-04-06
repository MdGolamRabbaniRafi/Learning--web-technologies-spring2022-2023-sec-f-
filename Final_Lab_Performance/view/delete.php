<?php
    session_start();

require_once '../model/product_model.php';
$product_name=$_SESSION['Product_name'];
$product=display($product_name);
$name=$product['Name'];
$buy=$product['buy'];
$sell=$product['sell'];
?>
<html>
<body>
<form method="POST" action=" ../controller/check.php" enctype="">
    <fieldset style="width:150px">
        <legend>
            Delete
        </legend>
        <table>
            <tr>
                <td>
                    Name : <?php echo $name ?>
                </td>
            </tr>
            <tr>
                <td>
                    Buying Price :<?php echo $buy ?>
                </td>
            </tr>
           
            <tr>
                <td>
                    Selling Price : <?php echo $sell ?>
                </td>
            </tr>
         
            <tr>
                <td>
                    Displable : Yes
                </td>
            </tr>
            <tr>
                <td>
                    <hr>
                <input type="submit" name="delete" value="Delete">
                </td>
            </tr>

        </table>
    </fieldset>
    </form>

</body>
</html>