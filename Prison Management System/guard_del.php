<html>

<head>
<title> Delete Guard </title>
<link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<script src="bootstrap-3.3.7-dist/jquery/3.2.1/jquery.min.js"></script>


<!------ Include the above in your HEAD tag ---------->
<head>

<body>
<form class="form-horizontal" action="g_del_dbms.php" method="post">	
<fieldset>

<!-- Form Name -->
<legend>Delete Guard Details</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Guard No: </label>  
  <div class="col-md-4">
  <input id="textinput" name="input" type="text" placeholder="eg: 0000" class="form-control input-md">
    
  </div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Delete</button>
  </div>
</div>

</fieldset>
</form>
</body>
</html>