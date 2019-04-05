<html>
<head>
<style>
table {
    border-collapse: collapse;
    width: 100%;
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
<legend class="sansserif">Guard Details</legend>
<hr>
<?php
	$con = mysqli_connect("localhost","root","","dbms_prison");
	
	//mysqli_select_db($con,"_4nm16is009");
	$result = $con->query("SELECT * FROM guard");
?>
<table border=1 cellspacing="2" width ="30%">
<tr>
	<th>gno</th>
	<th>gname</th>
	<th>DOB</th>
	<th>address</th>
	<th>starting_date</th>
	<th>sex</th>
	<th>assigned_block</th>
	<th>shift</th>
	<th>password</th>
	 
  
 
  <tr align = centre>
  <?php
    while($row = mysqli_fetch_array($result))
    {
	 
	 echo "<td>" . $row['gno'] . "</td>";
	 echo "<td>" . $row['gname'] . "</td>";
	 echo "<td>" . $row['DOB'] . "</td>";
	 echo "<td>" . $row['address'] . "</td>";
	 echo "<td>" . $row['starting_date'] . "</td>";
	 echo "<td>" . $row['sex'] . "</td>";
	 echo "<td>" . $row['assigned_block'] . "</td>";
	 echo "<td>" . $row['shift'] . "</td>";
	 echo "<td>" . $row['password'] ."</td>"."</tr>";
	 
	 
 	
	
    }
  
  ?>
    
   </table>
 </body>
 </html>
