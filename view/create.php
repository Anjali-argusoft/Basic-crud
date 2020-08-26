
<?php

include "./../controller/controller.php";
?>

<html>
<head>
</head>
<body>

<form action="" method="GET">
<h2>Add User</h2>
Id: <input type="number" name="id" value=""><br><br>
Name: <input type="text" name="name" value=""><br><br>
Age: <input type="number" name="age" value=""><br><br>
<input type="submit" name ="addUser" value="Add User"><br><br>
<a href="viewlist.php">View Users</a><br><br>
</form>

<?php

$controller = new Controller();
if($_GET['addUser']) {
    $id = $_GET['id'];
    $name = $_GET['name'];
    $age = $_GET['age'];
    if($id != "" && $name != "" && $age != "") {
         $controller->createUser($id, $name, $age);
    }
    else {
        echo "Enter all valid fields";
    }
} else {
    echo "Click on Add to add User";
}

?>

</body>

</html>







