<?php
include("config.php");

//initialize the session
session_start();
//Check if user is logged in, if not redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
echo "Admin Console";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Portal</title>
</head>
<body>
    <form action="fileUpload.php" method="post" enctype="multipart/form-data">
        Upload a new Product Image File:
        <input type="file" name="myfile" id="fileToUpload">
        <input type="submit" name="submit" value="Upload File Now" >
    </form>
<br></br>
<form action="/rssDisplay.php" method="post">
<p>RSS Feed: <input type="text" name="source"></p>
<input type="Submit" value="Submit" name="submit">
</form>
</body>
</html>
