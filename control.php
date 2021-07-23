<?php
//including the database connection file
include_once("db/config.php");

if(isset($_POST['Submit'])) {	
	$name = mysqli_real_escape_string($con, $_POST['name']);
	$qty = mysqli_real_escape_string($con, $_POST['qty']);
	$price = mysqli_real_escape_string($con, $_POST['price']);
	$tax =	mysqli_real_escape_string($con, $_POST['tax']);
	
	// checking empty fields
	if(empty($name) || empty($qty) || empty($price)) {
				
		if(empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($qty)) {
			echo "<font color='red'>Quantity field is empty.</font><br/>";
		}
		
		if(empty($price)) {
			echo "<font color='red'>price field is empty.</font><br/>";
		}
		
		
		
		
	} else { 
		// if  fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($con, "INSERT INTO order_invoice(name,qty,price,tax) VALUES('$name','$qty','$price','$tax')");
		
		header('Location:index.php');
		
		
	}
}

if(isset($_POST['update'])) {	
	$id = $_POST['id'];
	$name = mysqli_real_escape_string($con, $_POST['name']);
	$qty = mysqli_real_escape_string($con, $_POST['qty']);
	$price = mysqli_real_escape_string($con, $_POST['price']);
	$tax =	mysqli_real_escape_string($con, $_POST['tax']);
	
	// checking empty fields
	if(empty($name) || empty($qty) || empty($price)) {
				
		if(empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($qty)) {
			echo "<font color='red'>Quantity field is empty.</font><br/>";
		}
		
		if(empty($price)) {
			echo "<font color='red'>Price field is empty.</font><br/>";
		}
		
		
		
		
	} else { 
		// if  fields are filled (not empty) 
			
		//Update data to database
		$result = mysqli_query($con, "UPDATE order_invoice SET name ='$name' ,qty = '$qty' ,price = '$price' ,tax = '$tax' WHERE id = '$id'");
		header('Location: edit.php');
	}
}
$id = $_GET['id'];

//deleting the row from table
$result = mysqli_query($con, "DELETE FROM order_invoice WHERE id=$id");

//redirecting to the display page (index.php in our case)
header("Location:edit.php");
?>