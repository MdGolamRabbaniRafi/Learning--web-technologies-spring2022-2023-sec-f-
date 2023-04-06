<?php
    session_start();
    require_once '../model/product_model.php';
    if(isset($_REQUEST['Search']))
    {
        header('location: ../view/search.php');

    }

    elseif(isset($_REQUEST['Save']))
    {
        $product_name=$_REQUEST['Product_name'];
        $Buying_price=$_REQUEST['Buying_price'];
        $Selling_prce=$_REQUEST['Selling_price'];
        $add=add($product_name,$Buying_price,$Selling_prce);
        if($add)
        {
            if(empty($_REQUEST["Display"]))
            {
                header('location: ../view/Addproduct.php');
            }
            else
            {
                $_SESSION['Product_name']=$product_name;
                header('location: ../view/display.php');
            }
           
        }
    }

    elseif(isset($_REQUEST['edit']))
    {
        $name=$_REQUEST['Product_name'];
        $buy=$_REQUEST['Buying_price'];
        $sell=$_REQUEST['Selling_price'];
        $status=edit($name,$buy,$sell);
        if($status)
       {

        if(!empty($_REQUEST["Display"]))
        {
            $_SESSION['Product_name']=$name;
            header('location: ../view/display.php');        
        }
        else
        {
            
         ?>
         <html><body>
         Profile information update successfully <a href="../view/edit.php">Back</a>
          </body></html>
   
         <?php
        }

  
  
                 
       }
       else
       {
        ?>
        <html><body>
          edit unseccessful <a href="../view/edit.php">Back</a>
        </body></html>

        <?php
       }

    }
    elseif(isset($_REQUEST['delete']))
    {
        $status=delete($_SESSION['Product_name']);
        if($status)
       {     
         ?>
         <html><body>
         Deleted successfully <a href="../view/Addproduct.php">Back</a>
          </body></html>
   
         <?php        
       }
       else
       {
        ?>
        <html><body>
          Operation unseccessful <a href="../view/Addproduct.php">Back</a>
        </body></html>

        <?php
       }
    }

   

?>
