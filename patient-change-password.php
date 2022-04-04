<?php

 include_once("header.php");
 include_once("config/config.php");
	$password_validation = null;
	if(isset($_POST["submit"])){
		$new_password = $_POST['newpassword'];
		$confrim_password = $_POST['confirmpassword'];
		if($new_password !== $confrim_password){
			$password_validation = 'Password and Confirm password should match!';
		}else{

		
		$id =  $_SESSION["id"];
	if (count($_POST) > 0) {
			$result = mysqli_query($con, "SELECT * from users WHERE id='" . $id . "'");
			$row = mysqli_fetch_array($result);
			if ($_POST["oldpassword"] == $row["password"]) {
				mysqli_query($con, "UPDATE users set password='" . $_POST["newpassword"] . "' WHERE id='" . $id . "'");
				$succes_message = "password changes";
			} else
				$message = "Current Password is not correct";

		}
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
						
							<!-- Profile Sidebar -->
							<div class="profile-sidebar">
								<div class="widget-profile pro-widget-content">
									<div class="profile-info-widget">
										<a href="#" class="booking-doc-img">
											<img src="assets/img/doctors/doctor-thumb-02.jpg" alt="User Image">
										</a>
										<div class="profile-det-info">
											<h3>Dr. Darren Elder</h3>
											
											<div class="patient-details">
												<h5 class="mb-0">BDS, MDS - Oral & Maxillofacial Surgery</h5>
											</div>
										</div>
									</div>
								</div>
								<div class="dashboard-widget">
									<nav class="dashboard-menu">
										<ul>
											<li>
												<a href="doctor-dashboard.php">
													<i class="fas fa-columns"></i>
													<span>Dashboard</span>
												</a>
											</li>
											<li>
												<a href="appointments.php">
													<i class="fas fa-calendar-check"></i>
													<span>Appointments</span>
												</a>
											</li>
											<li>
												<a href="my-patients.php">
													<i class="fas fa-user-injured"></i>
													<span>My Patients</span>
												</a>
											</li>
											<li>
												<a href="schedule-timings.php">
													<i class="fas fa-hourglass-start"></i>
													<span>Schedule Timings</span>
												</a>
											</li>
											<li>
												<a href="invoices.php">
													<i class="fas fa-file-invoice"></i>
													<span>Invoices</span>
												</a>
											</li>
											<li>
												<a href="reviews.php">
													<i class="fas fa-star"></i>
													<span>Reviews</span>
												</a>
											</li>
											<li>
												<a href="chat-doctor.php">
													<i class="fas fa-comments"></i>
													<span>Message</span>
													<small class="unread-msg">23</small>
												</a>
											</li>
											<li>
												<a href="doctor-profile-settings.php">
													<i class="fas fa-user-cog"></i>
													<span>Profile Settings</span>
												</a>
											</li>
											<li>
												<a href="social-media.php">
													<i class="fas fa-share-alt"></i>
													<span>Social Media</span>
												</a>
											</li>
											<li class="active">
												<a href="doctor-change-password.php">
													<i class="fas fa-lock"></i>
													<span>Change Password</span>
												</a>
											</li>
											<li>
												<a href="index-2.php">
													<i class="fas fa-sign-out-alt"></i>
													<span>Logout</span>
												</a>
											</li>
										</ul>
									</nav>
								</div>
							</div>
							<!-- /Profile Sidebar -->
							
						</div>
						
						<div class="col-md-7 col-lg-8 col-xl-9">
						<span class="badge badge-pill badge-success"><?php if(isset($succes_message)){echo $succes_message;}else{
														echo '';
													}?></span>
	
						<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col-md-12 col-lg-6">
										
											<!-- Change Password Form -->
											<form method="post" action="">
											
												<div class="form-group">
													<label>Old Password</label>
													<input type="password" name="oldpassword" class="form-control">
													<span class="badge badge-pill badge-danger"><?php if(isset($message)){echo $message;}else{
														echo '';
													}?></span>

												</div>
												<div class="form-group">
													<label>New Password</label>
													<input type="password" name="newpassword" class="form-control">
													<span class="badge badge-pill badge-danger"><?php if(isset($password_validation)){echo $password_validation;}else{
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