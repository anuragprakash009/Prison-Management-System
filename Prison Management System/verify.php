<?php session_start();
	session_regenerate_id();
	
	require('connect.php');
	if($_SERVER["REQUEST_METHOD"] == "POST") {
	$user = $_POST['textinput'];
     $pass = $_POST['passwordinput']; 
	 $auth= "SELECT gno FROM guard WHERE gno='$user' and password='$pass';";
	 $result = mysqli_query($con,$auth);
	 
     $count = mysqli_num_rows($result);
	 if($count==1)
	 {
		echo "Successfully Logged In!";
	    header("Location: user.html");
	 }	
	 else
		 echo "Unexpected error";
	 
	 }
	
	 
?>