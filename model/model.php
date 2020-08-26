<?php
include "./../dbconfig.php";
class Model
{
    public function insert($id, $name, $age)
    {
        $dbcon = new Dbconnection();
        $conn = $dbcon->OpenCon();
        // $conn = OpenCon();
        $query = "INSERT INTO USER VALUES('$id', '$name', '$age')";
        $data = $conn->exec($query);
        if ($data) {
            echo "User added, Check updated list <a href='viewlist.php'>here</a>";
        } else {
            echo "Enter all required fields";
        }

    }

    public function update($userID, $userName, $userAge)
    {
        $dbcon = new Dbconnection();
        $conn = $dbcon->OpenCon();
        // $conn = OpenCon();
        $query = "UPDATE USER SET name = '$userName', age = '$userAge' where id = '$userID'";
        $stmt = $conn->prepare($query);
        $result = $stmt->execute();
        if ($result) {
            echo "User updated, Check updated list <a href='viewlist.php'> here</a>";
        } else {echo "Enter all required fields";}

    }
    public function fetchUser()
    {
        $dbcon = new Dbconnection();
        $conn = $dbcon->OpenCon();

        //fetch data
        $getUsers = $conn->prepare('SELECT * FROM USER');
        $getUsers->execute();
        $users = $getUsers->fetchAll();
        if ($users) {
            foreach ($users as $user) {
                //echo $user['id'] . $user['name'] . $user['age'] . "<br/>";
                echo " <tr>
                <td>" . $user['id'] . "</td>
                <td>" . $user['name'] . "</td>
                <td>" . $user['age'] . "</td>

                <td><a href='update.php?id=$user[id]&&name=$user[name]&&age=$user[age]'>Edit</a></td>
                <td><a href='delete.php?id=$user[id]'>Delete</a></td> <br><br>
            </tr>";
            }

        }
    }
}
