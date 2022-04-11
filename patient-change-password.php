<?php

 include_once("header.php");
 include_once("config/config.php");
	
?>
			
			<!-- Breadcrumb -->
			<div class="breadcrumb-bar">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-md-12 col-12">
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index-2.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Change Password</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Change Password</h2>
						</div>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->
			
			<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">
					<div class="row">
						
							<?php include_once('patient-profile-side-bar.php');?>
							
						
						<div class="col-md-7 col-lg-8 col-xl-9">
						<span class="badge badge-pill badge-success"><?php if(isset($_SESSION['suceess'])){echo $_SESSION['suceess']; unset($_SESSION['suceess']);}else{
														echo '';
													}?></span>
	
						<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col-md-12 col-lg-6">
										
											<!-- Change Password Form -->
											<form method="post" action="config/UpdatePassword.php">
											
												<div class="form-group">
													<label>Old Password</label>
													<input type="password" name="oldpassword" class="form-control">
													<span class="badge badge-pill badge-danger"><?php if(isset($_SESSION['oldPassword'])){echo $_SESSION['oldPassword']; unset($_SESSION['oldPassword']);}else{
														echo '';
													}?></span>

												</div>
												<div class="form-group">
													<label>New Password</label>
													<input type="password" name="newpassword" class="form-control">
													<span class="badge badge-pill badge-danger"><?php if(isset($_SESSION['newPassword'])){echo $_SESSION['newPassword']; unset($_SESSION['newPassword']);}else{
														echo '';
													}?></span>
												</div>
												<div class="form-group">
													<label>Confirm Password</label>
													<input type="password" name="confirmpassword" class="form-control">
												</div>
												<div class="submit-section">
													<button type="submit" name="submit" class="btn btn-primary submit-btn">Save Changes</button>
												</div>
											</form>
											<!-- /Change Password Form -->
											
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>		
			<!-- /Page Content -->
   
			<?php include_once("footer.php") ?>