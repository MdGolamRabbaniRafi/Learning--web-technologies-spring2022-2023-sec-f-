<html><body>
    
<table>
            <tr>  
                <td>      <form>
            <fieldset>
                <legend>Blood Group</legend>
                <select name="Blood">
                    <option value="A+">A+</option>
                    <option value="B+">B+</option>
                    <option value="A-">A-</option>
                    <option value="B-">B-</option>
                    <option value="O-">O-</option>
            
                    <option value="O+">O+</option>
                    <option value="AB-">AB-</option>
                    <option value="AB+">AB+</option>
                    
            
                </select> <br>
                 <hr>
                           <input type="submit" name="submit" value="Submit"/>
           
            </fieldset>
        </td>
        </tr>

        </form>
    </table>
    <?php 
		if(isset($_POST['Blood'])){
			echo "Value inserted ";
		}
	?>
    </body>
    </html>