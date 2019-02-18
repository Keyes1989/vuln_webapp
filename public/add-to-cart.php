<?php

//Include config file
include("config.php");

//Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
 header("location: login.php");
   exit;
}

$quantity = $_POST['quantity'];
$pid = $_POST['productID'];

$query = "SELECT * FROM products WHERE id = ${pid}";
$result = mysqli_query($link, $query);
while($row = mysqli_fetch_array($result)){
 $pname = $row['name'];
 $price = $row['price'];
}

$cost = $quantity * $price;
echo $cost;
//$cartArray = array(
//	$pname,
//	$price,
//	$quantity,
//	$cost);
$cartArray = array("Product"=> $pname, "Price" => $price, "Quantity" => $quantity, "Cost" => $cost);


$_SESSION['cart'] = $cartArray; 
//var_dump($_SESSION);

header("Location:/cart.php");
?> 
