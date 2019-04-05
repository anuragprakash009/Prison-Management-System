<?php session_start();
	session_regenerate_id();
	
	require('connect.php');
	if($_SERVER["REQUEST_METHOD"] == "POST") {
	$no = $_POST['noinput'];
     $name = $_POST['nameinput']; 
	 
	 
     $d_date = $_POST['d_date'];
	 $sex = $_POST['gender'];
	 
	 $at_date = $_POST['a_date'];
	 $add = $_POST['addinput'];
	 $c = $_POST['c_no'];
	 

	  
	 $query= "insert into cleaner values ('$no','$name','$d_date','$sex','$at_date','$add','$c')";
	 $result = mysqli_query($con,$query);
	 echo "Successfully Added";
	 
 
	 
	 
	 }
	
	 
?>