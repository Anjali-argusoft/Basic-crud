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

    public function update($id, $name, $age)
    {
        $dbcon = new Dbconnection();
        $conn = $dbcon->OpenCon();

        // $conn = OpenCon();
        $query = "UPDATE USER SET name = '$name', age = '$age' where id = '$id'";
        $stmt = $conn->prepare($query);
        $result = $stmt->execute();
        return $result;

    }
    public function fetchUser()
    {
        $dbcon = new Dbconnection();
        $conn = $dbcon->OpenCon();
        //fetch data
        $getUsers = $conn->prepare('SELECT * FROM USER');
        $getUsers->execute();
        $users = $getUsers->fetchAll();
        return $users;

    }

    public function removeUser($uID)
    {
        $dbcon = new Dbconnection();
        $conn = $dbcon->OpenCon();
        //delete data
        $query = "DELETE FROM USER WHERE id= '$uID'";
        $data = $conn->exec($query);

    }
}
