<?php include_once('header.php'); 
 include_once('config/config.php'); 

	
	


    $message="";
    if(count($_POST)>0) {
        $result = mysqli_query($con,"SELECT * FROM users WHERE email='" . $_POST["email"] . "' and password = '". $_POST["password"]."'");
        $row  = mysqli_fetch_array($result);
        if(is_array($row)) {
			echo '<pre>';
		$_SESSION['login_data'] = ['role' => $row['role'] ,'id' => $row['id'], 'name' => $row['name']];
        } else {
         $message = "Invalid Username or Password!";
        }
    }
   
	if(isset($_SESSION["login_data"]))
	{
		$role =$_SESSION['login_data']['role'];

		if($role == "doctor") {
	
		header("Location: doctor-dashboard.php");

    }
	else{
		if($role == "patient"){
			if(isset($_SESSION['doctor_id'])){
			    header("Location: booking.php");
			}else{
      			header("Location: patient-dashboard.php");
			}
			
			
	
		}
	}
	 
   }
?>
			
			<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">
					
					<div class="row">
						<div class="col-md-8 offset-md-2">
							
							<!-- Login Tab Content -->
							<div class="account-content">
								<div class="row align-items-center justify-content-center">
									<div class="col-md-7 col-lg-6 login-left">
										<img src="assets/img/login-banner.png" class="img-fluid" alt="Doccure Login">	
									</div>
									<div class="col-md-12 col-lg-6 login-right">
										<div class="login-header">
											<h3>Login <span>Mentcare</span></h3>
										</div>

										<form name="frmUser" method="post" action="" >
										<div class="message"><?php if($message!="") { echo $message; } ?></div>
											<div class="form-group form-focus">
												<input type="email" name="email" class="form-control floating">
												<label class="focus-label">Email</label>
											</div>
											<div class="form-group form-focus">
												<input type="password" name="password" class="form-control floating">
												<label class="focus-label">Password</label>
											</div>
											<div class="text-right">
												<a class="forgot-link" href="forgot-password.php">Forgot Password ?</a>
											</div>
											<button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Login</button>
											<div class="login-or">
												<span class="or-line"></span>
												<span class="span-or">or</span>
											</div>
											<div class="row form-row social-login">
												<div class="col-6">
													<a href="#" class="btn btn-facebook btn-block"><i class="fab fa-facebook-f mr-1"></i> Login</a>
												</div>
												<div class="col-6">
													<a href="#" class="btn btn-google btn-block"><i class="fab fa-google mr-1"></i> Login</a>
												</div>
											</div>
											<div class="text-center dont-have">Don’t have an account? <a href="register.php">Register</a></div>
										</form>
									</div>
								</div>
							</div>
							<!-- /Login Tab Content -->
								
						</div>
					</div>

				</div>

			</div>		
			<!-- /Page Content -->
   
			<?php include_once('footer.php'); ?>