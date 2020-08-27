<?php include "./../header.php";?>
<style>
td{
    padding:10px ;
}
</style>

<html>
<div class="topnav">
<a href="../index.php">Home</a>
    <a href="create.php">Add Product</a>
  <a href="viewlist.php">View Product</a>
  </div>
<head>
</head>
<body>
<?php include "./../controller/controller.php";?>

<table>
<tr>
<td><b>User Id</td>
<td><b>Name</td>
<td><b>Age</td>
<td colspan=2><b>Operation</td>
</tr>
<?php
$controller = new Controller();
$result = $controller->getUser();
if ($result) {
    foreach ($result as $user) {
        echo " <tr>
        <td>" . $user['id'] . "</td>
        <td>" . $user['name'] . "</td>
        <td>" . $user['age'] . "</td>
        <td><a href='update.php?id=$user[id]&&name=$user[name]&&age=$user[age]'>Edit</a></td>
        <td><a href='delete.php?id=$user[id]'>Delete</td>
    </tr>";
    }

}
?>



</table>



</body>
</html>

