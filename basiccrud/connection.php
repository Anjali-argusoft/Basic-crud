<?php
$servername = "localhost";
$username = "root";
$password = "argusadmin";
$dbname = "cruddb";

//Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection Fail" . $conn->connect_error);
} else {

    echo "";
}
?>
