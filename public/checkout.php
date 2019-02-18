<?php

session_start();

//Check if user is logged in, if not redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}


echo "You bought all the foods";

$_SESSION['cart'] = "0";

?>

<html>
<body>
<form action="welcome.php" method="post">
<button id="home">Home</button>
</form>
</body>
</html>
