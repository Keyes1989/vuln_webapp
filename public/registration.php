<?php

require_once __DIR__ . '/../bootstrap/app.php';
?>

<html>
<body>
	<form action="../src/registerUser.php" method="post">
	First Name: <input type="text" name="firstName"><br>
	<input type="submit" value="Submit">
	</form>
</body>
</html>

