<?php 
/* include("config.php");
if(@$_SESSION['id']){
	header("Location: dashboard.php");
}
if(isset($_POST['submit'])){
	if(empty($_POST['email'])){
		   $emailErr= "Email is required !";
	  }
	  else{
					 
				  // Validate email
			if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {

			} else {
				$emailErr=$_POST['email']."  is not a valid email address";
			}
	  }
	  if(empty($_POST['password'])){
		   $passwordErr= "Password is required !";
	  }
	  if((!@$passwordErr)&& (!@$emailErr)){
		  $sql="SELECT * FROM users WHERE email='".$_POST['email']."' AND password='".$_POST['password']."'";
		  $rs=mysqli_query($conn,$sql);
		  $rowcount=mysqli_num_rows($rs); 	
		   if($rowcount==1){
					  $row=mysqli_fetch_assoc($rs);
					  $_SESSION['fname']=$row['fname'];
					  $_SESSION['email']=$row['email'];
					  $_SESSION['id']=$row['id'];
					  $_SESSION['user_type']=$row['user_type'];
					  if($row['images'])
						  $_SESSION['profile_img']=$row['images'];
					  else
					  $_SESSION['profile_img']="system/avatar5.png";
					  header("Location: dashboard.php");
				  }
		 
		  else{
			  $emailErr= "Email is required !";
			  $passwordErr= "Password is required !";
		  }
	  }
} */
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() ; ?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url() ; ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ; ?>assets/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="<?php echo base_url() ; ?>assets/index2.html"><b>Admin</b>LTE</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="<?php echo base_url("User/log_sub"); ?>" method="post">
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control <?php if(@$emailErr) echo "is-invalid"; ?>" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control <?php if(@$passwordErr) echo "is-invalid"; ?>" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" name="submit" value="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

     
     

    <!--    <p class="mb-0">
        <a href="register.html" class="text-center">Register a new membership</a>
      </p> -->
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo base_url() ; ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url() ; ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() ; ?>assets/dist/js/adminlte.min.js"></script>
</body>
</html>
