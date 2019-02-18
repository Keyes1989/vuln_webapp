<?php

//initialize the session
session_start();

//Check if user is logged in, if not redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}


 //Set variables
   $file_name = "comments.txt";
   $msg_begin = "~~~~MSG BEGIN~~~~\n";
   $msg_end = "~~~~MSG END~~~~\n";

    // If there is a submission, write it to the file on the server.
    if(($_POST["subject"] != "") && ($_POST["commentBox"] != ""))
    {
        $file = fopen($file_name, "a"); // Open/create file to write in append mode
        fwrite($file, "\n");
        fwrite($file, $msg_begin);
        if (isset($_SESSION["loggedin"]))
            fwrite($file, "User: " . $_SESSION["username"] . "\n");
        fwrite($file, "Date: " . date("r") . "\n");
        // If the post contains a quotation symbol (e.g. "), it is by default replaced
        // with a backslash and quote (\") when written to the file. The purpose of
        // stripslashes below is to remove the backslash when it is written to the
        // file. Note that this enables the Javascript to be inserted into the
        // subject or comment text unaltered, causing a potential XSS hole.
        fwrite($file, "Subject: " . stripslashes($_POST["subject"]) . "\n");
        fwrite($file, "Comment:\n" . stripslashes($_POST["commentBox"]) . "\n");
        fwrite($file, $msg_end);
        fwrite($file, "\n\n");
        fclose($file);
	header("Location:/comment_board.php");
    }

?>
