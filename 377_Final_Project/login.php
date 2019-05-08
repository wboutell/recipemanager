<?php

$dbuser = "root";
$dbpass = "inst377inst377";
$dbname = "mydb";

$conn = new mysqli("localhost", $dbuser, $dbpass, $dbname);
if ($conn->connect_error) {
  die('Connection Failed: ' . $conn->connect_error);
}

function sanitize_user_input($str, $conn) {
	return htmlentities($conn->real_escape_string($str));
}

 ?>
