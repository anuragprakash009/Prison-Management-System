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
<legend class="sansserif">Cleaner Details</legend>
<hr>

<?php
	$con = mysqli_connect("localhost","root","","dbms_prison");
	
	//mysqli_select_db($con,"_4nm16is009");
	$result = $con->query("SELECT * FROM cleaner");
?>
<table border=1 cellspacing="2" width ="30%">
<tr>
	<th>cno</th>
	<th>cname</th>
	<th>DOB</th>
	<th>sex</th>
	<th>starting_date</th>
	<th>caddress</th>
	<th>assigned_cellno</th>
	 
  
 
  <tr align = centre>
  <?php
    while($row = mysqli_fetch_array($result))
    {
	 
	 echo "<td>" . $row['cno'] . "</td>";
	 echo "<td>" . $row['cname'] . "</td>";
	 echo "<td>" . $row['DOB'] . "</td>";
	 echo "<td>" . $row['sex'] . "</td>";
	 echo "<td>" . $row['starting_date'] . "</td>";
	 echo "<td>" . $row['caddress'] . "</td>";
	 echo "<td>" . $row['assigned_cellno'] ."</td>"."</tr>";
	 
	 
 	
	
    }
  
  ?>
    
   </table>

 </body>
 </html>