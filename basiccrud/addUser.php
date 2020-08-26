<?php
include "connection.php";
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
<Label><a href='viewUser.php'>View User</a></label>

</form>

<?php
if ($_GET['addUser']) {
    $id = $_GET['id'];
    $name = $_GET['name'];
    $age = $_GET['age'];
    if ($id != "" && $name != "" && $age != "") {
        $query = "INSERT INTO USER VALUES('$id', '$name', '$age')";
        $data = $conn->query($query); //  $data = mysqli_query($conn, $query);
        if ($data) {
            echo "  User added, Check updated list <a href='viewUser.php'>here</a>";
        }
    } else {
        echo "Enter all required fields";
    }
}

?>

</body>

</html>







