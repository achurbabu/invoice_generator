<?php
//including the database connection file
include_once("db/config.php");

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($con, "SELECT * FROM order_invoice"); // using mysqli_query instead
?>