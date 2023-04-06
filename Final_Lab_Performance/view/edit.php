<?php
    session_start();

require_once '../model/product_model.php';
$product_name=$_SESSION['Product_name'];
$product=display($product_name);
$name=$product['Name'];
$buy=$product['buy'];
$sell=$product['sell'];
$profit=$sell-$buy;
?>

<html>
<body>
<form method="POST" action=" ../controller/check.php" enctype="">

    <fieldset style="width:100px">
        <legend>
            Edit Product
        </legend>
        <table>
            <tr>
                <td>
                    Name 
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" name="Product_name" value="<?php echo $name ?>">
                </td>
            </tr>
            <tr>
                <td>
                    Buying Price 
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" name="Buying_price" value="<?php echo $buy ?>">
                </td>
            </tr>
            <tr>
                <td>
                    Selling Price 
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" name="Selling_price"value="<?php echo $sell ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <hr>
                    <input type="checkbox" name="Display" value="Display"/> Display
                </td>
            </tr>
            <tr>
                <td>
                    <hr>
                <input type="submit" name="edit" value="Save">
                </td>
            </tr>

        </table>
    </fieldset>
    </form>
      
</body>
</html>