<br><br>
<input  type="text" id="discount" onchange='dis_function()' placeholder="Enter Discount here">	
<p style="color:red" id="message"></p>
<div  id="invoice">
	<h4>Invoice <?php echo date("Ymd").rand(100,1000) ?></h4>
	Date: <span class="font-weight-semibold"><?php echo date("Y/m/d") ?></span>
<table>

	<tr>
		<td>Name</td>
		<td>Quantity</td>
		<td>Unit Price</td>
		<td>Tax</td>
		<td>Total</td>
		
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
		
		
	}
	?>
	
	<tr>
		<td></td>
		<td></td>
		<td></td>
		<td>Sub Total(Without Tax):</td>

		<td>$<i><?php echo $withouttax ?></i></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td></td>
		<td>Sub Total(With Tax):</td>
		<td>$<i id="subtotal"><?php echo $withtax ?></i></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td></td>
		<td>Discount:</td>

		<td>
			<i id="dollar"></i><i id="discount_value"></i><i id="percentage"></i>

		</td>
		
	</tr>
  
	<tr>
		<td></td>
		<td></td>
		<td></td>
		<td>Total:</td>

		<td>$<i id="total"><?php echo round($withtax) ?></i></td>
	</tr>
	</table>
	</div>
	
