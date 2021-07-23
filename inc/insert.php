<form method="POST" action="control.php">
<div  style="overflow-x:auto;">
<table>
	<tr>
		<th>
			Name
		</th>
        <th>
            <input type="text" name="name"/ action="add.php" required>    
        </th>
    </tr>
    <tr>
		<th>
			Quantity	
		</th>
        <th>
            <input type="number" min="1" step="any"  name="qty"/ required>
        </th>
    </tr>
    <tr>
		<th>
			Unit Price
		</th>
        <th>
            <input type="number" min="1" step="any"  name="price"/required>
        </th>
    </tr>
    <tr>
		<th>
			Tax
		</th>
		<th>
            <select name="tax" required>Tax  
                <option value="0">0</option>                
                <option value="1">1%</option>
                <option value="5">5%</option>
                <option value="10">10%</option>
            </select>
        </th>
    
	</tr>
    <tr>
        
        
        
        <td>
        	<input type="submit" name="Submit"/>
        </td>
    </tr>
</form>
<tr><td><a href="edit.php">Edit Invoice</a></td></tr>
<tr>
<td><button id="download">Download Invoice</button></td>
<td><button id="print" onclick="PrintInvoice()">Generate Invoice</button></td>
</tr>
</table>
</div>
