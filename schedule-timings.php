<?php
include_once('header.php');
?>

<!-- Breadcrumb -->
<div class="breadcrumb-bar">
	<div class="container-fluid">
		<div class="row align-items-center">
			<div class="col-md-12 col-12">
				<nav aria-label="breadcrumb" class="page-breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="index-2.php">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page">Schedule Timings</li>
					</ol>
				</nav>
				<h2 class="breadcrumb-title">Schedule Timings</h2>
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

				<?php
				include_once('doctor-profile-side-bar.php');
				?>

			</div>

			<div class="col-md-7 col-lg-8 col-xl-9">

				<div class="row">
					<div class="col-sm-12">
						<div class="card">
							<div class="card-body">
								<h4 class="card-title">Schedule Timings</h4>
								<div class="profile-box">
									<div class="row">



									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="card schedule-widget mb-0">

												<!-- Schedule Header -->
												<div class="schedule-header">

													<!-- Schedule Nav -->
													<div class="schedule-nav">
														<ul class="nav nav-tabs nav-justified " id="time">
															<li class="nav-item">
																<a class="nav-link" data-toggle="tab" href="#slot_sunday" data-value="sunday">Sunday</a>
															</li>
															<li class="nav-item">
																<a class="nav-link active" data-toggle="tab" href="#slot_monday" data-value="monday">Monday</a>
															</li>
															<li class="nav-item">
																<a class="nav-link" data-toggle="tab" href="#slot_tuesday" data-value="tuesday">Tuesday</a>
															</li>
															<li class="nav-item">
																<a class="nav-link" data-toggle="tab" href="#slot_wednesday" data-value="wednesday">Wednesday</a>
															</li>
															<li class="nav-item">
																<a class="nav-link" data-toggle="tab" href="#slot_thursday" data-value="thursday">Thursday</a>
															</li>
															<li class="nav-item">
																<a class="nav-link" data-toggle="tab" href="#slot_friday" data-value="friday">Friday</a>
															</li>
															<li class="nav-item">
																<a class="nav-link" data-toggle="tab" href="#slot_saturday" data-value="saturday">Saturday</a>
															</li>
														</ul>
													</div>
													<!-- /Schedule Nav -->

												</div>
												<!-- /Schedule Header -->

												<!-- Schedule Content -->
												<div class="tab-content schedule-cont">

													<!-- Sunday Slot -->
													<div id="slot_sunday" class="tab-pane fade">
														<h4 class="card-title d-flex justify-content-between">
															<span>Time Slots</span>
															<a class="edit-link" data-toggle="modal" href="#add_time_slot"><i class="fa fa-plus-circle"></i> Add Slot</a>
														</h4>
														<p class="text-muted mb-0">Not Available</p>
													</div>
													<!-- /Sunday Slot -->

													<!-- Monday Slot -->
													<div id="slot_monday" class="tab-pane fade show active">
														<h4 class="card-title d-flex justify-content-between">
															<span>Time Slots</span>
															<a class="edit-link" data-toggle="modal" href="#edit_time_slot"><i class="fa fa-edit mr-1"></i>Edit</a>
														</h4>

														<!-- Slot List -->
														<div class="doc-times">
															<div class="doc-slot-list">
																8:00 pm - 11:30 pm
																<a href="javascript:void(0)" class="delete_schedule">
																	<i class="fa fa-times"></i>
																</a>
															</div>
															<div class="doc-slot-list">
																11:30 pm - 1:30 pm
																<a href="javascript:void(0)" class="delete_schedule">
																	<i class="fa fa-times"></i>
																</a>
															</div>
															<div class="doc-slot-list">
																3:00 pm - 5:00 pm
																<a href="javascript:void(0)" class="delete_schedule">
																	<i class="fa fa-times"></i>
																</a>
															</div>
															<div class="doc-slot-list">
																6:00 pm - 11:00 pm
																<a href="javascript:void(0)" class="delete_schedule">
																	<i class="fa fa-times"></i>
																</a>
															</div>
														</div>
														<!-- /Slot List -->

													</div>
													<!-- /Monday Slot -->

													<!-- Tuesday Slot -->
													<div id="slot_tuesday" class="tab-pane fade">
														<h4 class="card-title d-flex justify-content-between">
															<span>Time Slots</span>
															<a class="edit-link" data-toggle="modal" href="#add_time_slot"><i class="fa fa-plus-circle"></i> Add Slot</a>
														</h4>
														<p class="text-muted mb-0">Not Available</p>
													</div>
													<!-- /Tuesday Slot -->

													<!-- Wednesday Slot -->
													<div id="slot_wednesday" class="tab-pane fade">
														<h4 class="card-title d-flex justify-content-between">
															<span>Time Slots</span>
															<a class="edit-link" data-toggle="modal" href="#add_time_slot"><i class="fa fa-plus-circle"></i> Add Slot</a>
														</h4>
														<p class="text-muted mb-0">Not Available</p>
													</div>
													<!-- /Wednesday Slot -->

													<!-- Thursday Slot -->
													<div id="slot_thursday" class="tab-pane fade">
														<h4 class="card-title d-flex justify-content-between">
															<span>Time Slots</span>
															<a class="edit-link" data-toggle="modal" href="#add_time_slot"><i class="fa fa-plus-circle"></i> Add Slot</a>
														</h4>
														<p class="text-muted mb-0">Not Available</p>
													</div>
													<!-- /Thursday Slot -->

													<!-- Friday Slot -->
													<div id="slot_friday" class="tab-pane fade">
														<h4 class="card-title d-flex justify-content-between">
															<span>Time Slots</span>
															<a class="edit-link" data-toggle="modal" href="#add_time_slot"><i class="fa fa-plus-circle"></i> Add Slot</a>
														</h4>
														<p class="text-muted mb-0">Not Available</p>
													</div>
													<!-- /Friday Slot -->

													<!-- Saturday Slot -->
													<div id="slot_saturday" class="tab-pane fade">
														<h4 class="card-title d-flex justify-content-between">
															<span>Time Slots</span>
															<a class="edit-link" data-toggle="modal" href="#add_time_slot"><i class="fa fa-plus-circle"></i> Add Slot</a>
														</h4>
														<p class="text-muted mb-0">Not Available</p>
													</div>
													<!-- /Saturday Slot -->

												</div>
												<!-- /Schedule Content -->

											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div>
							<span id="test"></span>
						</div>
					</div>
				</div>

			</div>
		</div>

	</div>

</div>
<!-- /Page Content -->

<!-- Footer -->
<footer class="footer">

	<!-- Footer Top -->
	<div class="footer-top">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-3 col-md-6">

					<!-- Footer Widget -->
					<div class="footer-widget footer-about">
						<div class="footer-logo">
							<img src="assets/img/footer-logo.png" alt="logo">
						</div>
						<div class="footer-about-content">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
							<div class="social-icon">
								<ul>
									<li>
										<a href="#" target="_blank"><i class="fab fa-facebook-f"></i> </a>
									</li>
									<li>
										<a href="#" target="_blank"><i class="fab fa-twitter"></i> </a>
									</li>
									<li>
										<a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
									</li>
									<li>
										<a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
									</li>
									<li>
										<a href="#" target="_blank"><i class="fab fa-dribbble"></i> </a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Footer Widget -->

				</div>

				<div class="col-lg-3 col-md-6">

					<!-- Footer Widget -->
					<div class="footer-widget footer-menu">
						<h2 class="footer-title">For Patients</h2>
						<ul>
							<li><a href="search.php"><i class="fas fa-angle-double-right"></i> Search for Doctors</a></li>
							<li><a href="login.php"><i class="fas fa-angle-double-right"></i> Login</a></li>
							<li><a href="register.php"><i class="fas fa-angle-double-right"></i> Register</a></li>
							<li><a href="booking.php"><i class="fas fa-angle-double-right"></i> Booking</a></li>
							<li><a href="patient-dashboard.php"><i class="fas fa-angle-double-right"></i> Patient Dashboard</a></li>
						</ul>
					</div>
					<!-- /Footer Widget -->

				</div>

				<div class="col-lg-3 col-md-6">

					<!-- Footer Widget -->
					<div class="footer-widget footer-menu">
						<h2 class="footer-title">For Doctors</h2>
						<ul>
							<li><a href="appointments.php"><i class="fas fa-angle-double-right"></i> Appointments</a></li>
							<li><a href="chat.php"><i class="fas fa-angle-double-right"></i> Chat</a></li>
							<li><a href="login.php"><i class="fas fa-angle-double-right"></i> Login</a></li>
							<li><a href="doctor-register.php"><i class="fas fa-angle-double-right"></i> Register</a></li>
							<li><a href="doctor-dashboard.php"><i class="fas fa-angle-double-right"></i> Doctor Dashboard</a></li>
						</ul>
					</div>
					<!-- /Footer Widget -->

				</div>

				<div class="col-lg-3 col-md-6">

					<!-- Footer Widget -->
					<div class="footer-widget footer-contact">
						<h2 class="footer-title">Contact Us</h2>
						<div class="footer-contact-info">
							<div class="footer-address">
								<span><i class="fas fa-map-marker-alt"></i></span>
								<p> 3556 Beech Street, San Francisco,<br> California, CA 94108 </p>
							</div>
							<p>
								<i class="fas fa-phone-alt"></i>
								+1 315 369 5943
							</p>
							<p class="mb-0">
								<i class="fas fa-envelope"></i>
								doccure@example.com
							</p>
						</div>
					</div>
					<!-- /Footer Widget -->

				</div>

			</div>
		</div>
	</div>
	<!-- /Footer Top -->

	<!-- Footer Bottom -->
	<div class="footer-bottom">
		<div class="container-fluid">

			<!-- Copyright -->
			<div class="copyright">
				<div class="row">
					<div class="col-md-6 col-lg-6">
						<div class="copyright-text">
							<p class="mb-0"><a href="templateshub.net">Templates Hub</a></p>
						</div>
					</div>
					<div class="col-md-6 col-lg-6">

						<!-- Copyright Menu -->
						<div class="copyright-menu">
							<ul class="policy-menu">
								<li><a href="term-condition.php">Terms and Conditions</a></li>
								<li><a href="privacy-policy.php">Policy</a></li>
							</ul>
						</div>
						<!-- /Copyright Menu -->

					</div>
				</div>
			</div>
			<!-- /Copyright -->

		</div>
	</div>
	<!-- /Footer Bottom -->

</footer>
<!-- /Footer -->

</div>
<!-- /Main Wrapper -->

<!-- Add Time Slot Modal -->
<div class="modal fade custom-modal" id="add_time_slot">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Add Time Slots</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form>
					<div class="hours-info">
						<div class="row form-row hours-cont">
							<div class="col-12 col-md-10">
								<div class="row form-row">
									<div class="col-12 col-md-6">
										<div class="form-group">
											<label>Start Time</label>
											<select id="start-time" class="form-control">
												<option>-</option>
												<option value="12:00 am">12.00 am</option>
												<option>12.30 am</option>
												<option>1.00 am</option>
												<option>1.30 am</option>
											</select>
										</div>
									</div>
									<div class="col-12 col-md-6">
										<div class="form-group">
											<label>End Time</label>
											<select id="end-time" class="form-control">
												<option>-</option>
												<option value="12:00 pm">12.00 am</option>
												<option>12.30 am</option>
												<option>1.00 am</option>
												<option>1.30 am</option>
											</select>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>


					<div class="submit-section text-center">
						<button class="btn btn-primary submit-btn" id="save-btn">Save Changes</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- /Add Time Slot Modal -->

<!-- Edit Time Slot Modal -->
<div class="modal fade custom-modal" id="edit_time_slot">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Edit Time Slots</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form>
					<div class="hours-info">
						<div class="row form-row hours-cont">
							<div class="col-12 col-md-10">
								<div class="row form-row">
									<div class="col-12 col-md-6">
										<div class="form-group">
											<label>Start Time</label>
											<select class="form-control">
												<option>-</option>
												<option selected>12.00 am</option>
												<option>12.30 am</option>
												<option>1.00 am</option>
												<option>1.30 am</option>
											</select>
										</div>
									</div>
									<div class="col-12 col-md-6">
										<div class="form-group">
											<label>End Time</label>
											<select class="form-control">
												<option>-</option>
												<option>12.00 am</option>
												<option selected>12.30 am</option>
												<option>1.00 am</option>
												<option>1.30 am</option>
											</select>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="row form-row hours-cont">
							<div class="col-12 col-md-10">
								<div class="row form-row">
									<div class="col-12 col-md-6">
										<div class="form-group">
											<label>Start Time</label>
											<select class="form-control">
												<option>-</option>
												<option>12.00 am</option>
												<option selected>12.30 am</option>
												<option>1.00 am</option>
												<option>1.30 am</option>
											</select>
										</div>
									</div>
									<div class="col-12 col-md-6">
										<div class="form-group">
											<label>End Time</label>
											<select class="form-control">
												<option>-</option>
												<option>12.00 am</option>
												<option>12.30 am</option>
												<option selected>1.00 am</option>
												<option>1.30 am</option>
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="col-12 col-md-2"><label class="d-md-block d-sm-none d-none">&nbsp;</label><a href="#" class="btn btn-danger trash"><i class="far fa-trash-alt"></i></a></div>
						</div>

						<div class="row form-row hours-cont">
							<div class="col-12 col-md-10">
								<div class="row form-row">
									<div class="col-12 col-md-6">
										<div class="form-group">
											<label>Start Time</label>
											<select class="form-control">
												<option>-</option>
												<option>12.00 am</option>
												<option>12.30 am</option>
												<option selected>1.00 am</option>
												<option>1.30 am</option>
											</select>
										</div>
									</div>
									<div class="col-12 col-md-6">
										<div class="form-group">
											<label>End Time</label>
											<select class="form-control">
												<option>-</option>
												<option>12.00 am</option>
												<option>12.30 am</option>
												<option>1.00 am</option>
												<option selected>1.30 am</option>
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="col-12 col-md-2"><label class="d-md-block d-sm-none d-none">&nbsp;</label><a href="#" class="btn btn-danger trash"><i class="far fa-trash-alt"></i></a></div>
						</div>

					</div>

					<div class="add-more mb-3">
						<a href="javascript:void(0);" class="add-hours"><i class="fa fa-plus-circle"></i> Add More</a>
					</div>
					<div class="submit-section text-center">
						<button type="submit" class="btn btn-primary submit-btn">Save Changes</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- /Edit Time Slot Modal -->

<!-- jQuery -->
<script src="assets/js/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<script>
	let doctor_id = <?php echo $_SESSION['login_data']['id']; ?>;
	let day = '';
	$(document).ready(function() {

		$("#time li").on('click', function(e) {
			
			day = e.target.getAttribute('data-value');
			
		});

		$("#save-btn").get(0).addEventListener('click', function() {
			let start_time = $("#start-time option:selected").val();
			let end_time = $("#end-time option:selected").val();
			if (day != null && doctor_id != null && start_time != null && end_time != null) {
				$.ajax({
					type: 'POST',
					url: 'config/schedule.php',
					data: {
						doctor_id: doctor_id,
						day: day,
						start_time: start_time,
						end_time: end_time
					},
					success: function(data) {
						console.log(data);
					}
				});
			} else {
				$("#add_time_slot").modal('hide')

				alert('somdfs')
			}
			

		});

		$("#test").html("dsfakjdksjkjklk");
		
	});
</script>

<!-- Bootstrap Core JS -->
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!-- Sticky Sidebar JS -->
<script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
<script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>

<!-- Select2 JS -->
<script src="assets/plugins/select2/js/select2.min.js"></script>

<!-- Custom JS -->
<script src="assets/js/script.js"></script>

</body>

<!-- doccure/schedule-timings.php  30 Nov 2019 04:12:09 GMT -->

</html>