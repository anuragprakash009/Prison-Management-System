<?php session_start();
	session_regenerate_id();
	
	require('connect.php');
	if($_SERVER["REQUEST_METHOD"] == "POST") {
	$no = $_POST['noinput'];
     $name = $_POST['nameinput']; 
	 
	 $add = $_POST['addinput'];
     $crime = $_POST['crimeinput']; 
	 $sex = $_POST['gender'];
	 $t = $_POST['type'];
	 $at_date = $_POST['a_date'];
	 $d_date = $_POST['date'];
	 $c = $_POST['c_no'];
	 $d = $_POST['d_imp'];

	  
	 $query= "insert into prisoner values ('$no','$name','$at_date','$d_date','$add','$crime','$sex','$t','$d','$c')";
	 $result = mysqli_query($con,$query);
	 echo "Successfully Added";
	 
 
	 
	 
	 }
	
	 
?>