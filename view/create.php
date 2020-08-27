<?php
include "./../header.php";

include "./../controller/controller.php";
?>

<html>
<div class="topnav">
<a href="../index.php">Home</a>
    <a href="create.php">Add Product</a>
  <a href="viewlist.php">View Product</a>
  </div>
<head>
</head>
<body>

<form action="" method="POST" enctype="multipart/form-data">
<h2>Add User</h2>
Id: <input type="number" name="id" value="" required><br><br>
Name: <input type="text" name="name" value=""required><br><br>
Age: <input type="number" name="age" value=""required><br><br>
Image:<input type="file" name="filename" value=""required><br><br>
<input type="submit" name ="addUser" value="Add User"><br><br>
</form>

<?php

$controller = new Controller();
if ($_POST['addUser']) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $filename = $_FILES["filename"]["name"];
    $tempname = $_FILES["filename"]["tmp_name"];
    $folder = "./../image/".$filename;
    move_uploaded_file($tempname, $folder);
    if ($id != "" && $name != "" && $age != "" && $filename != "") {
        $controller->createUser($id, $name, $age, $folder);
    } else {
        echo "Enter all valid fields";
    }
} else {
    echo "Click on Add to add User";
}

?>

</body>

</html>

<?php
