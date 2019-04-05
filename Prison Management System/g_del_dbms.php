<?php session_start();
	session_regenerate_id();
	
	require('connect.php');
	if($_SERVER["REQUEST_METHOD"] == "POST") {
	$no = $_POST['input'];
    $query= "delete from guard where gno = '$no'";
	$result = mysqli_query($con,$query);
	echo "Successfully Deleted";
	}
?>
