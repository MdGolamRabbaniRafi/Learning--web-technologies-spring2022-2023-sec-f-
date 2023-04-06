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
           Display
        </legend>
        <table border='1'>
            <tr>
                <td>
                    Name
                </td>
                <td>
                    Profit
                </td>
            </tr>
            <tr rowspan="4">
                <td>
                    <?php
                    echo $name;
                    ?>

                </td>
                <td>
                    <?php
                     echo $profit;

                    ?>

                </td>
                <td>
                    <a href="edit.php">edit</a>
                </td>
                <td>
                    <a href="delete.php">delete</a>
                </td>
            </tr>
        </table>
    </fieldset>


    </form>
     </body>
</html>