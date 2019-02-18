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
//if ($_SESSION["type"] == "Admin"){
//if (session_id() == "3" or $_SESSION['type'] == "Admin"){
if($_COOKIE['type'] == "Admin"){

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to your home page.</h1>
    </div>
    <p>
	<a href="admin.php" class ="btn btn-primary">Admin Console</a>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
	<a href="comment_board.php" class="btn btn-primary">Comments</a>
    </p>
</body>
</html>
<?php
}

else{
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
     <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to the store.</h1>
    </div>
     <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
	<a href="cart.php" class="btn btn-success">Shopping Cart</a>
	<a href="comment_board.php" class="btn btn-primary">Comments</a>
    </p>

<div class="wrapper">
  <div class="desc">
    <h1>Available Products</h1>

    <div class="todo">
      <span>Those delicious Tings</span>
    <br></br>
   </div>
  </div>

<?php
$query = "SELECT * from products";
$result = mysqli_query($link, $query);
while($row = mysqli_fetch_array($result)){
 $pname = $row['name'];
 $price = $row['price'];
 $description = $row['description'];
 $image_location = $row['image'];
 $pid = $row['id'];
?>

  <div class="content">
    <!-- content here -->
    <div class="product-grid product-grid--flexbox">
      <div class="product-grid__wrapper">
        <!-- Product list start here -->

        <!-- Single product -->
        <div class="product-grid__product-wrapper">
          <div class="product-grid__product">
            <div class="product-grid__img-wrapper">
              <img src="<?php echo $image_location ?>" alt="Img" class="product-grid__img" />
            </div>
            <span class="product-grid__title">Name: <?php echo $pname;?></span>
           <br></br>
	    <span class="product-grid__price">Price: <?php echo $price;?> yen</span>
	    <input type="hidden" name="productID" value="<?php echo $pid;?>"/>
            <div class="product-grid__extend-wrapper">
              <div class="product-grid__extend">
		<br></br>
                <p class="product-grid__description"><?php echo $description;?></p>
                <form action="add-to-cart.php" method="post">
		<input type="hidden" name="productID" value="<?php echo $pid;?>">
		<input type="number" name="quantity" min="0" max="9">
		<input type="submit" value="Add To Cart" name="addToCart">
		</form>
           <br></br>
           <br></br>
             </div>
            </div>
          </div>
        </div>
<?php
}}

?>
</body>
</html>



