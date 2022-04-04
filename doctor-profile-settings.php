<?php
 include_once("header.php"); 
 include_once("config/config.php"); 

	$id = $_SESSION["id"];

	
$query="select * from users where `id`= $id "; // Fetch all the data from the table customers
$result=mysqli_query($con,$query);
$singleRow = mysqli_fetch_row($result);

$query1="select * from clinics where `user_id`= $id "; // Fetch all the data from the table customers
$result1=mysqli_query($con,$query1);
$singleRow1 = mysqli_fetch_row($result1);

?>
			<!-- Breadcrumb -->
			<div class="breadcrumb-bar">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-md-12 col-12">
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index-2.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Profile Settings</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Profile Settings</h2>
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
											<li class="active">
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
											<li>
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
							<form method="post" action="add/update-profile.php">
							<!-- Basic Information -->
							<div class="card">
								<div class="card-body">
									<h4 class="card-title">Basic Information</h4>
									<div class="row form-row">
										<div class="col-md-12">
											<div class="form-group">
												<div class="change-avatar">
												
												</div>
											</div>
										</div>
										
										<div class="col-md-6">
											<div class="form-group">
												<label>Email <span class="text-danger">*</span></label>
												<input type="email" name="email" value="<?php echo $singleRow['3']; ?>" class="form-control" readonly>
											</div>
										</div>
								
										<div class="col-md-6">
											<div class="form-group">
												<label>Name <span class="text-danger">*</span></label>
												<input type="text" name="name" value="<?php echo $singleRow['2']; ?>" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Phone Number</label>
												<input type="text" name="phone" value="<?php echo $singleRow['4']; ?>" class="form-control" readonly>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>your gender is :<?php echo $singleRow['10']; ?></label>
												<select name="gender" class="form-control select">
													<option>Male</option>
													<option>Female</option>
												</select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group mb-0">
												<label>Date of Birth</label>
												<input type="text" value="<?php echo $singleRow['6']; ?>" class="form-control" readonly>
											</div>
										</div>
										<!-- <div class="col-md-6">
											<div class="form-group mb-0">
												<label>Change Date of Birth</label>
												<input type="date" name="date" class="form-control">
											</div>
										</div> -->
										
									</div>
								</div>
							</div>
							<!-- /Basic Information -->
							
						
							
							<!-- Clinic Info -->
							<div class="card">
								<div class="card-body">
									<h4 class="card-title">Clinic Info</h4>
									<div class="row form-row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Clinic Name</label>
												<input type="text" name="clinic-name" value="<?php echo $singleRow1['1']; ?>" name="clinic-name" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Clinic Address</label>
												<input type="text" name="clinic-address" value="<?php echo $singleRow1['2']; ?>" name="clinic-address" class="form-control">
											</div>
										</div>
									
									</div>
								</div>
							</div>
							<!-- /Clinic Info -->

						
							
							<!-- Pricing -->
							<div class="card">
								<div class="card-body">
									<h4 class="card-title">Pricing</h4>
									<div class="form-group mb-0">
										<label>Fees </label>
										<input class="form-control" type="text"   name="fees" value="<?php echo $singleRow['15']; ?>" >
									
									</div> 
	
									
									
									
								</div>
							</div>
							<!-- /Pricing -->
							
							<!-- Services and Specialization -->
							<div class="card services-card">
								<div class="card-body">
									
									<div class="form-group mb-0">
										<label>Specialization </label>
										<input class="input-tags form-control" type="text" data-role="tagsinput" placeholder="Enter Specialization" name="specialist" value="<?php echo $singleRow['8']; ?>" id="specialist">
										<small class="form-text text-muted">Note : Type & Press  enter to add new specialization</small>
									</div> 
								</div>              
							</div>
							<!-- /Services and Specialization -->
						
							<div class="submit-section submit-btn-bottom">
								<button type="submit" name="update-doctor" class="btn btn-primary submit-btn">Save Changes</button>
							</div>
							</form>
						</div>
					</div>

				</div>

			</div>		
			<!-- /Page Content -->
   
			<?php include_once("footer.php"); ?>