<?php
include("inc/header.php");
$id = $_GET['id'];
include_once("db/config.php");

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($con, "SELECT * FROM order_invoice WHERE id=$id"); // using mysqli_query instead
$res = mysqli_fetch_array($result);
?>
<form method="POST" action="control.php">
<table>
	<td style="display: none;"><input type="text" name="id" value=<?php echo $res['id'] ?>></td>
	<?php
	echo "<tr>";
		echo "<td><input type='text' name='name' value=".$res['name']." > </td>";
		echo "<td><input type='number' min='1' step='any' name='qty' value=".$res['qty']."> </td>";
		echo "<td> <input type='number' min='1' step='any' name='price' value=".$res['price']." ></td>";
		echo "<td> <select name='tax' required>Tax  
            	<option value=".$res['tax'].">".$res['tax']."%</option>
            	<option value='0'>0</option>	           	
            	<option value'1'>1%</option>
            	<option value='5'>5%</option>
            	<option value='10'>10%</option>
             </select></td>";
             ?>
             <td><input type="submit" name="update" value="Update"></td>
         </form>
</table>