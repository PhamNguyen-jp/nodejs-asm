<link rel="stylesheet" type="text/css" href="style.css"/>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/responsive.css">
<script src="js/jquery-3.2.0.min.js"/></script>
<script src="js/jquery.dataTables.min.js"/></script>
<script src="js/dataTables.bootstrap.min.js"/></script>
<!--  <script>
function check()
{
	if(login.txtUsername.value=="")
	{
		alert("User name must be empty");
		login.txtUsername.focus();
		return false;
	}
	if(login.txtUsername.value.length>30)
	{
		alert("Maximum of user name is 30 chars");
		return false;
	}
	if(login.txtPass.value=="")
	{
		alert("Password must be empty");
		return false;
	}
	if(login.txtPass.value.length<6)
	{
		alert("Minimum of user name is 6 chars");
		return false;
	}
	return true;
}
</script> -->
<?php
if (isset($_POST['btnLogin'])) {
	$us = $_POST['txtUsername'];
	$pa = $_POST['txtPass'];

	$err = "";
	if($us==""){
		$err .= "Enter Username, please<br/>";
	}
	if($pa==""){
		$err .= "Enter Username, please<br/>";
	}

	if($err != "") {
		echo $err;
	}
	else{
		if($us==$pa)
			echo "You have loged in with". $us."and password is".$pa;
		else
			echo "You loged in fail";	
	}
}
?>

<h1>Login</h1>
<form id="login" name="login" method="POST" action=""> 
<!-- <form id="login" name="login" method="POST" action="Loginprocess.php" onsubmit="return check()">  -->
<div class="row">
    <div class="form-group">				    
        <label for="txtUsername" class="col-sm-2 control-label">Username(*):  </label>
		<div class="col-sm-10">
		      <input type="text" name="txtUsername" id="txtUsername" class="form-control" placeholder="Username" value=""/>
		</div>
      </div>  
      
    <div class="form-group">
		<label for="txtPass" class="col-sm-2 control-label">Password(*):  </label>			
		<div class="col-sm-10">
		      	<input type="password" name="txtPass" id="txtPass" class="form-control" placeholder="Password" value=""/>
		</div>
	</div> 
	<div class="form-group"> 
        <div class="col-sm-2"></div>
        <div class="col-sm-10">
        	<input type="submit" name="btnLogin"  class="btn btn-primary" id="btnLogin" value="Login"/>
            <input type="submit" name="btnCancel"  class="btn btn-primary" id="btnLogin" value="Cancel"/>
		</div>  
	</div>
 </div>
    
</form>
   