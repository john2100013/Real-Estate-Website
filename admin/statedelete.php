<?php
include("config.php");
$sid = $_GET['id'];
$sql = "DELETE FROM state WHERE sid = {$sid}";
$result = mysqli_query($con, $sql);
if($result == true)
{
	$msg="<p class='alert alert-success'>County Deleted</p>";
	header("Location:stateadd.php?msg=$msg");
}
else{
	$msg="<p class='alert alert-warning'>County Not Deleted</p>";
	header("Location:stateadd.php?msg=$msg");
}
mysqli_close($con);
?>
