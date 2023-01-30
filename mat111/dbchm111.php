
<?php
session_start();


include("../../function.php");

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "new_db";

// Create connection
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$debit = -100;
$remainingbal = $_SESSION['usedcash'];


$valey = 'adds';
$id = $_SESSION['user_id'];
$sql = "UPDATE users SET usedcash= usedcash - 100 WHERE user_id = '$id'";


if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
header ("Location: paid.html");
die;




?>
    
            
