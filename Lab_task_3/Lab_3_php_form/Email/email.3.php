<html><body>
    
<table>
            <tr>  
                <td>      <form>
            <fieldset>
                <legend>Email</legend>
                <input type="email" name="email" value=""/> <br>
                <hr>
                           <input type="submit" name="submit" value="Submit"/>
           
            </fieldset>
        </td>
        </tr>

        </form>
    </table>
    <?php 
		if(isset($_POST['email'])){
			echo "Email inserted ";
		}
	?>
    </body>
    </html>