
<?php

include "./../controller/controller.php";
?>

<html>
<head>
</head>
<body>

<form action="" method="GET">
<h2>Update User</h2>
Id: <input type="number" name="id" value="<?php echo $_GET['id'] ?>"><br><br>
Name: <input type="text" name="name" value="<?php echo $_GET['name'] ?>"><br><br>
Age: <input type="number" name="age" value="<?php echo $_GET['age'] ?>"><br><br>
<input type="submit" name ="update" value="Update User"><br><br>
<a href="viewlist.php">View Users</a><br><br>
</form>

<?php
$controller = new Controller();
if($_GET['update']) {
    $userID = $_GET['id'];
    $userName = $_GET['name'];
    $userAge = $_GET['age'];
    if ($userID != "" && $userName != "" && $userAge != "") {
         $controller->updateUser($id, $name, $age);
    }
    else {
        echo "Enter all valid fields";
    }
} else {
    echo "Click on Update to update User";
}

?>


</body>

</html>

