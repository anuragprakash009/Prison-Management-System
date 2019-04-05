<?php session_start();
	session_regenerate_id();
	
	require('connect.php');
	if($_SERVER["REQUEST_METHOD"] == "POST") {
	$name = $_POST['noinput'];
    $pass = $_POST['passinput']; 
	 
	

	  
	 $query= "insert into admin values ('$name','$pass')";
	 $result = mysqli_query($con,$query);
	 echo "Successfully Added";
	 
 
	 
	 
	 }
	
	 
?>