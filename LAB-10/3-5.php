<!-- 3.5 Write a PHP script to create a session  -->

<?php
session_start();

$_SESSION["username"] = "nishar";
$_SESSION["email"] = "nishar9@gmail.com";

echo "Session created successfully.<br>";
echo "Username: " . $_SESSION["username"];
?>