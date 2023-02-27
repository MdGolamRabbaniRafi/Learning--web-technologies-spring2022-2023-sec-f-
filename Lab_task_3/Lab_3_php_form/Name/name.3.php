<html><body>
    
<table>
            <tr>  
                <td>      <form>
            <fieldset>
                <legend>Name</legend>
                <input type="text" name="name" value=""/> <br>
                <hr>
                           <input type="submit" name="submit" value="Submit"/>
           
            </fieldset>
        </td>
        </tr>

        </form>
    </table>
    <?php 
		if(isset($_POST['name'])){
			echo "Name inserted ";
		}
	?>
    </body>
    </html>