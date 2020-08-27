
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
<h2>Update User</h2>
Id: <input type="number" name="id" value="<?php echo $_REQUEST['id'] ?>"><br><br>
Name: <input type="text" name="name" value="<?php echo $_REQUEST['name'] ?>"><br><br>
Age: <input type="number" name="age" value="<?php echo $_REQUEST['age'] ?>"><br><br>
Image: <input type="file" name="ufilename" value="<?php echo $_FILES['filename'] ?>"required>
<input type="submit" name ="update" value="Update User"><br><br>

</form>

<?php
$controller = new Controller();
if ($_REQUEST['update']) {
    $userID = $_REQUEST['id'];
    $userName = $_REQUEST['name'];
    $userAge = $_REQUEST['age'];
    $ufilename = $_FILES["ufilename"]["name"];
    $tempname = $_FILES["ufilename"]["tmp_name"];
    $folder = "./../image/" . $ufilename;
    move_uploaded_file($tempname, $folder);
    if ($userID != "" && $userName != "" && $userAge != "" && $ufilename != "") {
        $result = $controller->updateUser($userID, $userName, $userAge, $ufilename);
        if ($result) {
            echo "User updated, Check updated list <a href='viewlist.php'> here</a>";
        } else {echo "Enter all required fields";}
    }
} else {
    echo "Click on Update button to save changes";
}

?>


</body>

</html>

