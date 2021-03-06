<?php include_once("header.php");
	
?>
			
			<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">
					
					<div class="row">
						<div class="col-md-8 offset-md-2">
								
							<!-- Register Content -->
							<div class="account-content">
								<div class="row align-items-center justify-content-center">
									<div class="col-md-7 col-lg-6 login-left">
										<img src="assets/img/login-banner.png" class="img-fluid" alt="Doccure Register">	
									</div>
									<div class="col-md-12 col-lg-6 login-right">
										<div class="login-header">
											<h3>Patient Register <a href="doctor-register.php">Are you a Doctor?</a></h3>
										</div>
										
										<!-- Register Form -->
										<form action="config/register.php"  method="post" enctype="multipart/form-data">
										<input type="hidden" name="patient" />
											<div class="form-group form-focus">
												<input type="text" name="name" value="<?php if(isset($_SESSION['data'])){echo $_SESSION['data']['name'];}?>" class="form-control floating" required>
												<label class="focus-label" >Name</label>
											</div>
											<div class="form-group form-focus">
												<input type="date" name ="date_of_birth" class="form-control floating" value="<?php if(isset($_SESSION['data'])){echo $_SESSION['data']['date_of_birth'];}?>" required>
												<label class="focus-label" >Date Of Birth</label>
											</div>
											<div class="form-group form-focus">
												<input type="email" name="email" value="<?php if(isset($_SESSION['data'])){echo $_SESSION['data']['email'];}?>" class="form-control floating"required >
												<label class="focus-label" >Email</label>
												<span class="text text-danger"><?php if(isset($_SESSION['emailErr'])){echo $_SESSION['emailErr']; unset($_SESSION['emailErr']);}else{echo '';}?></span>
											</div>
											<div class="form-group form-focus">
												<input type="file" name="fileToUpload" id="fileToUpload">
												
  												<span class="text text-danger"><?php if(isset($_SESSION['imageErr'])){echo $_SESSION['imageErr']; unset($_SESSION['imageErr']);}else{echo '';}?></span>
											</div>
											
											<div class="form-group form-focus">
												<input type="password" name="password" class="form-control floating" required>
												<label class="focus-label">Create Password</label>
												<span class="text text-danger"><?php if(isset($_SESSION['passwordErr'])){echo $_SESSION['passwordErr']; unset($_SESSION['passwordErr']);}else{echo '';}?></span>
											
											</div>
											<div class="form-group form-focus">
												<input type="text" name="occupation" value="<?php if(isset($_SESSION['data'])){echo $_SESSION['data']['occupation'];}?>" class="form-control floating" required>
												<label class="focus-label">Occupation</label>
											</div>
											<div class="form-group form-focus">
											<input type="radio" name="gender" value="male" />
											<label class="focus-label" value="<?php if(isset($_SESSION['data']) ){ if($_SESSION['data']['gender']=='male'){echo "selected";}}?>">male</label>
											</div>
											<div class="form-group form-focus">
											<input type="radio" name="gender" value="female" />
											<label class="focus-label">male</label>
											</div>
											
											<div class="text-right">
												<a class="forgot-link" href="login.php">Already have an account?</a>
											</div>
											<button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Signup</button>
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
										</form>
										<!-- /Register Form -->
										
									</div>
								</div>
							</div>
							<!-- /Register Content -->
								
						</div>
					</div>

				</div>
<?php
	unset($_SESSION['data']);
?>
			</div>		
			<!-- /Page Content -->
   
			<!-- Footer -->
			<?php include_once("footer.php") ?>