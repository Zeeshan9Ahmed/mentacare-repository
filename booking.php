<?php 
	include_once("config/config.php");

	include_once("header.php");
	
	if(isset($_GET['id'])){
		$_SESSION['doctor_id'] = $_GET['id'];
		
		if(!isset($_SESSION['login_data'])){
			header("Location: login.php?message=Please login first to make an Appoinment");
		}
		
			
	}
	
		$doctor_query = 'Select * from users where id ="'.$_SESSION['doctor_id'].'"';
		$user_query = 'Select * from users where id ="'.$_SESSION['login_data']['id'].'"';
		$doctor = $con->query($doctor_query);
		$patient = $con->query($user_query);
		
	
?>
			
			<!-- Breadcrumb -->
			<div class="breadcrumb-bar">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-md-12 col-12">
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index-2.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Checkout</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Checkout</h2>
						</div>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->
			
			<!-- Page Content -->
			<div class="content">
				<div class="container">

					<div class="row">
						<div class="col-md-7 col-lg-8">
							<div class="card">
								<div class="card-body">
								
									<!-- Checkout Form -->
									<form method="post" action="config/createAppoinment.php">
										<!-- Personal Information -->
										<div class="info-widget">
											<h4 class="card-title">Appointment Time</h4>
											<div class="row">
											<div class="col-md-6 col-sm-12">
											
											<input class="form-control" type="datetime-local"  name="date" required>
											
										</div>	
										</div>
										</div>

										<!-- Personal Information -->
										<?php
											if($patient->num_rows > 0){
											while($row = $patient->fetch_assoc()){
										?>
										<div class="info-widget">
											<h4 class="card-title">Personal Information</h4>
											<div class="row">
												<div class="col-md-6 col-sm-12">
													<div class="form-group card-label">
														<label>Name</label>
														<input class="form-control" value="<?php echo $row['name'];?>" name="name" type="text">
													</div>
												</div>
												<div class="col-md-6 col-sm-12">
													<div class="form-group card-label">
														<label>Phone</label>
														<input class="form-control" value="<?php echo $row['phone'];?>" name="phone" type="text">
													</div>
												</div>
												<div class="col-md-12 col-sm-12">
													<div class="form-group card-label">
														<label>Email</label>
														<input class="form-control" value="<?php echo $row['email'];?>" name="email" type="email">
													</div>
												</div>
												
											</div>
											
										</div>
										<?php
											}
										}
										?>
										<!-- /Personal Information -->
										
										<div class="payment-widget">
											<h4 class="card-title">Payment Method</h4>
											
											<!-- Credit Card Payment -->
											<div class="payment-list">
												<label class="payment-radio credit-card-option">
													<input type="radio" name="radio" checked>
													<span class="checkmark"></span>
													Cash On Delivery
												</label>
												
											</div>
											<!-- /Credit Card Payment -->
											
											
											<!-- Terms Accept -->
											
											<!-- /Terms Accept -->
											
											<!-- Submit Section -->
											<div class="submit-section mt-4">
												<button type="submit" name="submit" class="btn btn-primary submit-btn">Confirm and Pay</button>
											</div>
											<!-- /Submit Section -->
											
										</div>
									</form>
									<!-- /Checkout Form -->
									
								</div>
							</div>
							
						</div>
						
						<div class="col-md-5 col-lg-4 theiaStickySidebar">
						
							<!-- Booking Summary -->
							<div class="card booking-card">
								<div class="card-header">
									<h4 class="card-title">Booking Summary</h4>
								</div>
								<div class="card-body">
									<?php 
										if($doctor->num_rows > 0){
										while($row = $doctor->fetch_assoc()){
										$_SESSION['fees'] = $row['fees'];
									?>
									<!-- Booking Doctor Info -->
									<div class="booking-doc-info">
										<a href="doctor-profile.php" class="booking-doc-img">
											<img src="assets/img/doctors/doctor-thumb-02.jpg" alt="User Image">
										</a>
										<div class="booking-info">
											<h4><a href="doctor-profile.php"><?php echo $row['name'];?></a></h4>
											<div class="rating">
												
												<span class=""><?php echo $row['phone'];?></span>
											</div>
											<div class="clinic-details">
												<p class="doc-location"><i class="fas fa-map-marker-alt"></i> <?php echo $row['address'];?></p>
											</div>
										</div>
									</div>
									
									<!-- Booking Doctor Info -->
									
									<div class="booking-summary">
										<div class="booking-item-wrap">
											<div class="booking-total">
												<ul class="booking-total-list">
													<li>
														<span>Total</span>
														<span class="total-cost">$<?php echo $row['fees'];?></span>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /Booking Summary -->
							<?php
										}
										}
									?>
						</div>
					</div>

				</div>

			</div>		
			<!-- /Page Content -->
   
<?php
	include_once("footer.php");
?>