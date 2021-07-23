<?php 
include("inc/rowdisplay.php");
include("inc/header.php");

?>
<table>

	<tr bgcolor='#CCCCCC'>
		<td>Name</td>
		<td>Quantity</td>
		<td>Unit Price</td>
		<td>Tax</td>
		<td>Total</td>
		<td>Edit</td>
	</tr>
	<?php 
	$withouttax=0;
	$withtax=0;

	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['name']."</td>";
		echo "<td>".$res['qty']."</td>";
		echo "<td> $".$res['price']."</td>";
		echo "<td>".$res['tax']."%</td>";
		$t=$res['tax']/100;
		$tax=1+$t;	
		$taxamount=$res['price']*$res['qty']*$tax;
		$withouttax=$withouttax+$res['price']*$res['qty'];

		$withtax=$withtax+$taxamount;
		echo "<td>$<i>".$taxamount."</i></td>";	
		
		echo "<td id='edit'><a href=\"update.php?id=$res[id]\">Update</a> | <a href=\"control.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
	}
	?>
	
	</table>
	<a href="index.php">Back To Home Page</a>