
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

<form action="" method="GET">
<h2>Update User</h2>
Id: <input type="number" name="id" value="<?php echo $_GET['id'] ?>"><br><br>
Name: <input type="text" name="name" value="<?php echo $_GET['name'] ?>"><br><br>
Age: <input type="number" name="age" value="<?php echo $_GET['age'] ?>"><br><br>
<input type="submit" name ="update" value="Update User"><br><br>

</form>

<?php
$controller = new Controller();
if ($_GET['update']) {
    $userID = $_GET['id'];
    $userName = $_GET['name'];
    $userAge = $_GET['age'];
    if ($userID != "" && $userName != "" && $userAge != "") {
        $result = $controller->updateUser($userID, $userName, $userAge);
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

