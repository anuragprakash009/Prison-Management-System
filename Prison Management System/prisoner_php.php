<html>

<head>
<title> Login Php Page </title>
<link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<script src="bootstrap-3.3.7-dist/jquery/3.2.1/jquery.min.js"></script>


<!------ Include the above in your HEAD tag ---------->
<head>

<body>
<form class="form-horizontal" action="p_reg_dbms.php" method="post">	
<fieldset>

<!-- Form Name -->
<legend>Add a new Prisoner</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Prisoner No: </label>  
  <div class="col-md-4">
  <input id="textinput" name="noinput" type="text" placeholder="eg: 0000" class="form-control input-md">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Prisoner Name: </label>  
  <div class="col-md-4">
  <input id="textinput" name="nameinput" type="text" placeholder="eg: Anurag" class="form-control input-md">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Admit Date: </label>  
  <div class="col-md-4">
  <input id="textinput" name="a_date" type="text" placeholder="eg: YYYY-MM-DD" class="form-control input-md">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">DOB: </label>  
  <div class="col-md-4">
  <input id="textinput" name="date" type="text" placeholder="eg: YYYY-MM-DD" class="form-control input-md">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Address: </label>  
  <div class="col-md-4">
  <input id="textinput" name="addinput" type="text" placeholder="eg: Patna" class="form-control input-md">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Committed Crime </label>  
  <div class="col-md-4">
  <input id="textinput" name="crimeinput" type="text" placeholder="eg: Murder" class="form-control input-md">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Cell no: </label>  
  <div class="col-md-4">
  <input id="textinput" name="c_no" type="text" placeholder="eg: 9999" class="form-control input-md">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Duration of Imprisonment: </label>  
  <div class="col-md-4">
  <input id="textinput" name="d_imp" type="text" placeholder="eg: 1 Months" class="form-control input-md">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Prisoner Type: </label>  
     
<select name="type">
    <option>Minimum security</option> 
	<option>Standard security</option> 
	<option>Maximum security</option> 
</select>   
  </div>
</div>
  </div>
</div>

<!-- Password input-->
<div class="form-group">
<label class="col-md-4 control-label" for="textinput">Gender: </label>  
<input type="radio" name="gender" value = "Male">
Male
<br>
<input type="radio" name="gender" value = "Female">
Female
 

</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Submit</button>
  </div>
</div>

</fieldset>
</form>
</body>
</html>