<?php

require_once __DIR__ . '/../bootstrap/app.php';

?>
<html>
   <head>
      <title>Login Page</title>
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         .box {
            border:#666666 solid 1px;
         }
      </style>
   </head>
   <body bgcolor = "#FFFFFF">
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
            <div style = "margin:30px">
               <form action = "auth.php" method = "post">
                  <label>UserName  :</label><input type = "text" name = "username"><br /><br />
                  <label>Password  :</label><input type = "password" name = "password"><br/><br />
                  <input type = "submit" value="Submit"><br />
               </form>
		 <p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
            </div>
         </div>            
      </div>
      <img style="display:block; margin-left: auto; margin-right:auto;"src="../images/mascot.png" alt=""width="432"height="289"/>
   </body>
</html>
