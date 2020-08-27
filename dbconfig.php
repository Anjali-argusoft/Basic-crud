<?php
class Dbconnection
{
    public function OpenCon()
    {
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "argusadmin";
        $db = "cruddb";
        try {
            $conn = new PDO("mysql:host=localhost;dbname=cruddb", $dbuser, $dbpass);
// set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function CloseCon($conn)
    {
        $conn->close();
    }
}
