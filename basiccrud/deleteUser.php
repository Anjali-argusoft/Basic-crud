<?php
include "connection.php";
$uID = $_GET['id'];
$query = "DELETE FROM USER WHERE id= $uID";
$data = $conn->query($query);
if ($data) {
    echo "User deleted successfully, Check updated list <a href='viewUser.php'>here</a>";
} else {
    echo "User not deleted, Check list <a href='viewUser.php'>here</a>";
}
