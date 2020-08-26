<style>
td{
    padding:10px ;
}
</style>
<?php
include "connection.php";
$query = "SELECT * FROM USER";
$data = $conn->query($query);
$total = $data->num_rows;
//$data = mysqli_query($conn, $query); // query run and data saved
//$total = mysqli_num_rows($data); //No of rows in database
?>

<table>
<tr>
<td><b>User Id</td>
<td><b>Name</td>
<td><b>Age</td>
<td colspan=2><b>Operation</td>

</tr>


 <?php
if ($total != 0) {
    while ($result = $data->fetch_assoc()) // fetched an array..  $result = mysqli_fetch_assoc($data) in procedure
    {
        echo " <tr>
                <td>" . $result['id'] . "</td>
                <td>" . $result['name'] . "</td>
                <td>" . $result['age'] . "</td>
                <td><a href='editUser.php?id=$result[id]&&name=$result[name]&&age=$result[age]'>Edit</a></td>
                <td><a href='deleteUser.php?id=$result[id]'>Delete</a></td>
            </tr>";
    }

}
echo "<tr><td><b><a a href='addUser.php'>Add User</a></td></tr>";

?>
</table>