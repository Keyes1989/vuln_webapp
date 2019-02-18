<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reset Password</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>


<?php

include("config.php");

//initialize the session
session_start();

//Check if user is logged in, if not redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}


$DisplayForm = True;
//determines if submit button was clicked
if(isset($_POST['submit'])){

//prepare sql statement
$query = "UPDATE users SET password = '$_POST[confirm_password]' WHERE userName = '$_POST[username]'";

mysqli_query($link, $query);

echo "Password Changed";

?>
<form action="/welcome.php" method="post">
</br>
<button id="homeButton">Home</button>
</form>
<?php

//Turn form field off
$DisplayForm = False;
}
//If Display the form, use following html code to display a page
if($DisplayForm){
?>
    <div class="wrapper">
        <h2>Reset Password</h2>
        <p>Please fill out this form to reset your password.</p>
        <form action="reset-password.php" method="post"> 
                <label>Username</label>
		<input type="text" name="username">
		<label>New Password</label>
                <input type="password" name="new_password">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password">
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit" name="submit">
                <a class="btn btn-link" href="welcome.php">Cancel</a>
            </div>
        </form>
    </div>    
<?php
}
?>


</body>
</html>






