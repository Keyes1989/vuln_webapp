<?php

require_once __DIR__ . '/../bootstrap/app.php';

$config = new App\Config();
?>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    body {
      background-color: transparent;
      transform: perspective(1400px) matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
      transform-style: preserve-3d;
    }
    .gwd-img-1dej {
      position: absolute;
      width: 180px;
      height: 130px;
      transform-origin: 94px 65px 0px;
      left: 40px;
      top: 510px;
    }
    .gwd-img-15t8 {
      position: absolute;
      height: 130px;
      width: 180px;
      transform-origin: 95px 64.5px 0px;
      left: 265px;
      top: 510px;
    }
    .gwd-img-13lj {
      position: absolute;
      width: 180px;
      height: 130px;
      transform-origin: 94.5px 64px 0px;
      left: 490px;
      top: 510px;
    }
    .gwd-img-ye0x {
      position: absolute;
      width: 180px;
      height: 130px;
      transform-origin: 93.7685px 65px 0px;
      left: 720px;
      top: 510px;
    }
  </style>
</head>

<body class="htmlNoPages">
  <form action="login.php" method="post">
  <p style="text-align: right;">  
  <a href="login.php" class="btn btn-primary">Login</a>  
  <a href="register.php" class="btn btn-primary">Register</a> 
 </form>
  </p>
  <h1 style="text-align: center;">
    <span style="color: #ff0000;">
      <img src="http://www.comtex.co.jp/tradeone_campaign/images/banner_campaign2018-gourmet_42.gif" alt="" width="444" height="141" />
    </span>
  </h1>
  <h1 style="text-align: center;">
    <span style="color: #ff0000;">Oishii Man</span>
  </h1>
  <h3 style="text-align: center;">From the #1 Store, Right to your Door!</h3>
  <h3>
    <img style="display: block; margin-left: auto; margin-right: auto;" src="images/mascot2.png" alt="" width="158" height="203" />
 <br></br>
  </h3>
  <h3>&nbsp;</h3>
  <p>&nbsp;</p>
</body>
</html>
