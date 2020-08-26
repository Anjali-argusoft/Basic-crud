<?php
include "connection.php";

?>


<html>
<head>
</head>
<body>

<form action="" method="GET">
<h1>Update User</h1>
Id: <input type="number" name="id" value="<?php echo $_GET['id'] ?>"><br><br>
Name: <input type="text" name="name" value="<?php echo $_GET['name'] ?>"><br><br>
Age: <input type="number" name="age" value="<?php echo $_GET['age'] ?>"><br><br>
<input type="submit" name ="update" value="Update"><br><br>

</form>

<?php

if ($_GET['update']) {
    $userID = $_GET['id'];
    $userName = $_GET['name'];
    $userAge = $_GET['age'];
    if ($userID != "" && $userName != "" && $userAge != "") {
        $query = "UPDATE USER SET name = '$userName', age = '$userAge' where id = '$userID'";
        $result = $conn->query($query);

        if ($result) {
            echo "User updated, Check updated list <a href='viewUser.php'> here</a>";
        }
    } else {echo "Enter all required fields";}

} else {
    echo "Click on Update button to save changes";
}

?>

</body>

</html>







