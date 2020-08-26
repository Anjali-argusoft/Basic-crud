<style>
td{
    padding:10px ;
}
</style>
<?php
include "./../controller/controller.php";
?>


<table>
<tr>
<td><b>User Id</td>
<td><b>Name</td>
<td><b>Age</td>
<td colspan=2><b>Operation</td>
</tr>


</table>

<?php
$controller = new Controller();
$controller->getUser();

?>






