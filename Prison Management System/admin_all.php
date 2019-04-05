<html>
<head>
<style>
table {
    border-collapse: collapse;
    width: 40%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #DC2345;
    color: white;
}
.sansserif {
    font-family: Arial, Helvetica, sans-serif;
	font-size: 25px;
}
</style>
</head>
<body>
<legend class="sansserif">Admin Details</legend>
<hr>

<?php
	$con = mysqli_connect("localhost","root","","dbms_prison");
	
	//mysqli_select_db($con,"_4nm16is009");
	$result = $con->query("SELECT * FROM admin");
?>
<table border=1 cellspacing="2" width ="30%">
<tr>
	<th>name</th>
	<th>password</th>
	
	
	 
  
 
  <tr align = centre>
  <?php
    while($row = mysqli_fetch_array($result))
    {
	 
	
	 echo "<td>" . $row['name'] . "</td>";
	 echo "<td>" . $row['password'] ."</td>"."</tr>";
	 
	 
 	
	
    }
  
  ?>
    
   </table>
 </body>
 </html>
