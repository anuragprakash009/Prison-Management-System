<?php session_start();
	session_regenerate_id();
	
	require('connect.php');
	if($_SERVER["REQUEST_METHOD"] == "POST") {
	$no = $_POST['noinput'];
     $name = $_POST['nameinput']; 
	 $d_date = $_POST['date'];
	 $add = $_POST['addinput'];
	 $at_date = $_POST['a_date'];
	 $sex = $_POST['gender'];
	 $b = $_POST['b_no'];
     $g = $_POST['shift'];

	  
	 $query= "insert into guard values ('$no','$name','$d_date','$add','$at_date','$sex','$b','$g')";
	 $result = mysqli_query($con,$query);
	 echo "Successfully Added";
	 
 
	 
	 
	 }
	
	 
?>