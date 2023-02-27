<html><body>
    
<table>
            <tr>  
                <td>      <form>
            <fieldset>
                <legend>Gender</legend>
                <input type="radio" name="gender" value=""/> Male
                <input type="radio" name="gender" value=""/> Female
                <input type="radio" name="gender" value=""/> Other                 <hr>
                           <input type="submit" name="submit" value="Submit"/>
           
            </fieldset>
        </td>
        </tr>

        </form>
    </table>
    <?php 
		if(isset($_POST['Gender'])){
			echo "Value inserted ";
		}
	?>
    </body>
    </html>