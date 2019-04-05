<html>

<head>
<title> Add Guard </title>
<link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<script src="bootstrap-3.3.7-dist/jquery/3.2.1/jquery.min.js"></script>


<!------ Include the above in your HEAD tag ---------->
<head>

<body>
<form class="form-horizontal" action="a_reg_dbms.php" method="post">	
<fieldset>

<!-- Form Name -->
<legend>Add a new Admin</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Name: </label>  
  <div class="col-md-4">
  <input id="textinput" name="noinput" type="text" placeholder="eg: Anurag" class="form-control input-md">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Password: </label>  
  <div class="col-md-4">
  <input id="textinput" name="passinput" type="text" placeholder="eg: anu1234" class="form-control input-md">
    
  </div>
</div>





<!-- Password input-->


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