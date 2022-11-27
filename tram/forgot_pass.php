<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Forgot Password</title>

	<link href="/css/bootstrap.min.css" rel="stylesheet">
	<link href="/css/datepicker3.css" rel="stylesheet">
	<link href="/css/styles.css" rel="stylesheet">
     <link rel = "stylesheet" href="forgot.css" >
	
	
</head>
<body>
	<style>
		#logo{
			padding-left:5px;
			padding-top:-20px;
		}
		</style>
		 <center>  <h3 >Forget Password</h3></center>
	<div class="row">
	<hr />
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Log in</div>
				<div class="panel-body">
					
	<form role="form" action="" method="post" id="" name="login">
		<fieldset>
		<div class="form-group">
		<input class="form-control" placeholder="E-mail" name="email" type="email" autofocus="" required="true">
		</div>
		<div class="checkbox">
		<a href="reset_password.php>"<button type="submit" value="" name="submit" class="btn btn-primary">Reset</button><span style="padding-left:250px"></a>	
		<a href="amazon.in" class="btn btn-primary">Login</a></span>
		</div>
		</fieldset>
		</form>
		</div>
		</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	

<script src="/js/jquery-1.11.1.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
</body>
</html>
<?php
session_start();
error_reporting(0);
include('connection.php');

if(isset($_POST['submit']))
  {
    $email=$_POST['email'];
    
        $query=mysqli_query($con,"select id from user where  email='$email' ");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
      $_SESSION['email']=$email;
     header('location:reset-password.php');
    }
    else{
      $msg="Invalid Details. Please try again.";
    }
  }
  ?>



