<?php
include('config.php');

if ($link->connect_error) {
	die ("Connection failed: " . $link->connect_error);
}
	echo "Connected Successfully";


$sql = "SELECT * from users";
$result = $link->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - firstName: " . $row["firstName"]. "<br>";
   }
} else {
    echo "0 results";
}
$link->close();

?>
