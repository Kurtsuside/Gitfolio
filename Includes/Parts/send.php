<?php
include "function.php";

$connect = dBconnect();

$name = mysqli_real_escape_string($connect, $_POST['name']);
$email = mysqli_real_escape_string($connect, $_POST['email']);
$message = mysqli_real_escape_string($connect, $_POST['message']);
$today = date("Y-m-d");
if ($message == "") {
    error_reporting(0);
    ini_set('display_errors', 0);
    echo"Please fill in something";
}
else{
    $sql = "INSERT INTO mails (formName, formEmail, formMessage, formDate) VALUES ('$name', '$email', '$message', '$today')";
}

if(mysqli_query($connect, $sql) ){
    die();
} else{

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($connect);
}
// Close connection
mysqli_close($connect);
?>