<?php

include("config.php");

//initialize the session
session_start();
//Check if user is logged in, if not redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

?>

<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
<body>
<a href="welcome.php" class="btn btn-primary">Home</a>
<br></br>
<form action="/postComment.php" method="post">
<div>
Name: <input type="text" name="name"></input>
<br></br>
Subject: <input type="text" name="subject"></input>
<br></br>
<textarea name="commentBox" id="commentBox" rows="20" cols="100">Leave Your Comment Here!</textarea>
</div>
<input type="submit" value="Submit" id="submit">
</form>

<?php
echo file_get_contents("comments.txt");

?>
</body>
</html>
