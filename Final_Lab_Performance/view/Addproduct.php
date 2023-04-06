<html>
<body>
<form method="POST" action=" ../controller/check.php" enctype="">
    <fieldset style="width:100px">
        <legend>
            ADD Product
        </legend>
        <table>
            <tr>
                <td>
                    Name 
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" name="Product_name">
                </td>
            </tr>
            <tr>
                <td>
                    Buying Price 
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" name="Buying_price">
                </td>
            </tr>
            <tr>
                <td>
                    Selling Price 
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" name="Selling_price">
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
                <input type="submit" name="Save" value="Save">
                <input type="submit" name="Search" value="Search">


                </td>
              
            </tr>

        </table>
    </fieldset>

    </form>
      
</body>
</html>