<?php session_start();
	session_regenerate_id();
	
	require('connect.php');
	if($_SERVER["REQUEST_METHOD"] == "POST") {
	$no = $_POST['noinput'];
    $query= "delete from prisoner where pno = '$no'";
	$result = mysqli_query($con,$query);
	echo "Successfully Deleted";
	}
?>
