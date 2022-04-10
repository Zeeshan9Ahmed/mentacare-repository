<?php

 include_once("header.php");
 include_once("config/config.php");

	if(isset($_POST["submit"])){
		$id =  $_SESSION["id"];
	if (count($_POST) > 0) {
			$result = mysqli_query($con, "SELECT * from users WHERE id='" . $id . "'");
			$row = mysqli_fetch_array($result);
			

			if ($_POST["oldpassword"] == $row["password"]) {
				mysqli_query($con, "UPDATE users set password='" . $_POST["newpassword"] . "' WHERE id='" . $id . "'");
				$message = "password changes";
			} else
				$message = "Current Password is not correct";
		}
	}

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
						<div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">
						
							<?php include_once('doctor-profile-side-bar.php'); ?>
							
						</div>
						<div class="col-md-7 col-lg-8 col-xl-9">
							<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col-md-12 col-lg-6">
										
											<!-- Change Password Form -->
											<form method="post" action="">
											
												<div class="form-group">
													<label>Old Password</label>
													<input type="password" name="oldpassword" class="form-control">
												</div>
												<div class="form-group">
													<label>New Password</label>
													<input type="password" name="newpassword" class="form-control">
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