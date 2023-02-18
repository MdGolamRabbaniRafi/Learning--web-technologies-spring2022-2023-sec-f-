<html><body>
    
<table>
            <tr>  
                <td>      <form>
            <fieldset>
                <legend>Date Of Birth</legend>
                <input type="date" email="DOB" value=""/> <br>
                <hr>
                           <input type="submit" name="submit" value="Submit"/>
           
            </fieldset>
        </td>
        </tr>

        </form>
    </table>
    <?php 
		if(isset($_POST['DOB'])){
			echo "value inserted ";
		}
	?>
    </body>
    </html>