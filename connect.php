<?php
$username = "root";
$password = "";
$host="localhost";
$dbname="attmgsystem";

// Create connection
$conn =mysqli_connect($host, $username, $password, $dbname);

// Check connection
if (!$conn) {
  echo mysqli_connect_error();
}else{
echo "Connected successfully";
}
?>