<?php

require('db.php');

extract($_POST);
$sql = "INSERT into contactus (name,email,message,date) VALUES('" . $name . "','" . $email . "','" . $message . "','" . date('Y-m-d') . "')";

$success = $dbcon->query($sql);


if (!$success) {
    die("Couldn't enter data: ".$dbcon->error);
}

function function_alert($message) {
      
    // Display the alert box 
    echo "<script>alert('$message');</script>";
}
// Function call
function_alert( "Thank You For Contacting Us ");
// $conn->close();
?>
