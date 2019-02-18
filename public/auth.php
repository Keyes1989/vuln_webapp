<?php

session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: welcome.php");
    exit;
}
 
// Include config file
include("config.php");
 
// Define variables and initialize with empty values
$user = $_POST['username'];
$pass = $_POST['password'];
if(!$_POST["username"] || !$_POST["password"])
{
echo "Please enter required details";
}

//prepare sql statement
//$query = "SELECT * FROM users WHERE userName = '".$_POST["username"]."' AND password ='".$_POST["password"]."';";
$query = "SELECT * FROM users WHERE userName = '${user}' ";//AND password = '${pass}'";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);

//check if valid user
if ( $row["password"] == $pass){

//Create a session
//Just session start needed to revert back
//session_start();
$your_type = $row["userType"];
session_commit();
session_id($your_id);
session_start();
setcookie("type", $your_type, time() + (86400 * 30), "/"); //86400 = 1 day

//Set Session Variables
 $_SESSION["loggedin"] = true;
 $_SESSION["type"] = $row["userType"];
 $_SESSION["username"] = $user;

//send to welcome page, just location:welcome.php is needed to revert back
header("location: welcome.php?" .session_name() . "=" .session_id());
}
else{
 print "Invalid Credentials";
}

?>
