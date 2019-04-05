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
<legend class="sansserif">Prisoner Details</legend>
<hr>

<?php
	$con = mysqli_connect("localhost","root","","dbms_prison");
	
	//mysqli_select_db($con,"_4nm16is009");
	$result = $con->query("SELECT * FROM prisoner");
?>
<table border=1 cellspacing="2" width ="30%">
<tr>
	<th>pno</th>
	<th>Name</th>
	<th>admit_date</th>
	<th>DOB</th>
	<th>address</th>
	<th>crime</th>
	<th>sex</th>
	<th>ptype</th>
	<th>duration</th>
	<th>cellno</th>
	
	 
  
 
  <tr align = centre>
  <?php
    while($row = mysqli_fetch_array($result))
    {
	 
	 echo "<td>" . $row['pno'] . "</td>";
	 echo "<td>" . $row['Name'] . "</td>";
	 echo "<td>" . $row['admit_date'] . "</td>";
	 echo "<td>" . $row['DOB'] . "</td>";
	 echo "<td>" . $row['address'] . "</td>";
	 echo "<td>" . $row['crime'] . "</td>";
	 echo "<td>" . $row['sex'] . "</td>";
	 echo "<td>" . $row['ptype'] . "</td>";
	 echo "<td>" . $row['duration'] . "</td>";
	 echo "<td>" . $row['cellno'] ."</td>"."</tr>";
	 
	 
 	
	
    }
  
  ?>
    
   </table>
 </body>
 </html>

