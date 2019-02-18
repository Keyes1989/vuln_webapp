<html>
<head>
<title>Register </title>
<link rel="stylesheet" href="style.css" />
</head>
<body>

<?php
$DisplayForm = True;
//Determines if submit button was clicked and if so do this
if(isset($_POST['submit'])){

include('config.php');

//Prepare sql statement
$query = "INSERT INTO users (userType, firstName, lastName, address, userName, password, creditCard) VALUES ('User', '$_POST[firstname]', '$_POST[lastname]', '$_POST[address]', '$_POST[username]', '$_POST[password]', '$_POST[ccn]')";


mysqli_query($link, $query);

echo "Thanks for registering!";
?>
<form action="/login.php" method="post">
</br>
<button id="loginButton">Login</button>
</form>
<?php

//Turn form field off
$DisplayForm = False;
}
//If Display the form, use this html code which displays a page
if ($DisplayForm){
?>
<form action="/register.php" method="post">
<p22>Register User </p22> </br>
<p>Username: <input type="text" name= "username"></p>
<p>Password: <input type="password" name= "password"></p>
<p>Name: <input type="text" name= "firstname"> </p>
<p>Surname: <input type="text" name= "lastname"> </p>
Age:
<input type="number"> </br></br>
Address:
<input type="text" name= "address"> </br><br>
Birthday:
<input type="date" name="bday"> </br> </br>
Credit Card Number:
<input type=text" name="ccn"></br></br>
<input type="Submit" value="Submit" name="submit" > </br> </br>
<p23> Already a member? <a href="login.php">click to login </a> </p23>
</form>
<?php
}
?>

</body>
</html>
