<html><body>
    
<table>
            <tr>  
                <td>      <form>
            <fieldset>
                <legend>degree</legend>
                <input type="checkbox" name="option[]" value=""/> SSC
                <input type="checkbox" name="option[]" value=""/> HSC
                <input type="checkbox" name="option[]" value=""/> BSc
                <hr>
                           <input type="submit" name="submit" value="Submit"/>
           
            </fieldset>
        </td>
        </tr>

        </form>
    </table>
    <?php 
		if(isset($_POST['degree'])){
			echo "Value inserted ";
		}
	?>
    </body>
    </html>