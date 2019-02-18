<?php

include("config.php");

//initialize the session
session_start();

//Check if user is logged in, if not redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}


//var_dump($_SESSION['cart']);

$quantity = $_SESSION['cart']['Quantity'];
$price = $_SESSION['cart']['Price'];
$pname = $_SESSION['cart']['Product'];
$cost = $_SESSION['cart']['Cost'];

?>

<html>
<body>

<table style="height: 144px;" width="818">
<tbody>
<tr>
<td style="width: 196px;">Product</td>
<td style="width: 198px;">Cost</td>
<td style="width: 198px;">Quantity</td>
<td style="width: 198px;">Total</td>
</tr>
<tr>
<td style="width: 196px;"><?php echo $pname;?></td>
<td style="width: 198px;"><?php echo $price;?></td>
<td style="width: 198px;"><?php echo $quantity;?></td>
<td style="width: 198px;"><?php echo $cost;?></td>
</tr>
</tbody>
</table>

<form action="checkout.php" method="post">
<button id="pay">Checkout</button>
</form>
</body>
</html>
