<?php include "./../header.php";?>

<?php

include "./../controller/controller.php";
$controller = new Controller();
$uID = $_GET['id'];
$controller->deleteUser($uID);
// Mesage after updation
echo "<script>alert('Record Deleted successfully');</script>";
// Code for redirection
echo "<script>window.location.href='viewlist.php'</script>";

?>