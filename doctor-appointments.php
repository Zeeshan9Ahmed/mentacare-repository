<?php include_once('header.php'); 
	include_once('config/config.php');
	if(!isset($_SESSION['login_data'])){
		header("Location: login.php");
	}else{
		if(($_SESSION['login_data']['role'] !== 'doctor')){
			print_r('daf');
			header("Location: login.php");
			
		}
	}
	// print_r($_SESSION);
// echo date("Y-m-d");
$appointments = "select appointments.booking_date , appointments.booking_time,appointments.amount,appointments.status, users.avatar ,users.id , users.name  from appointments INNER JOIN users on appointments.patient_id = users.id where doctor_id =
'".$_SESSION['login_data']['id']."'";

?>
			<!-- Breadcrumb -->
			<div class="breadcrumb-bar">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-md-12 col-12">
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Dashboard</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Dashboard</h2>
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
							
							<?php include_once('doctor-profile-side-bar.php');?>	
						</div>
						
						<div class="col-md-7 col-lg-8 col-xl-9">

							<!-- <div class="row">
								<div class="col-md-12">
									<div class="card dash-card">
										<div class="card-body">
											<div class="row">
												<div class="col-md-12 col-lg-4">
													<div class="dash-widget dct-border-rht">
														<div class="circle-bar circle-bar1">
															<div class="circle-graph1" data-percent="75">
																<img src="assets/img/icon-01.png" class="img-fluid" alt="patient">
															</div>
														</div>
														<div class="dash-widget-info">
															<h6>Total Patient</h6>
															<h3>1500</h3>
															<p class="text-muted">Till Today</p>
														</div>
													</div>
												</div>
												
												<div class="col-md-12 col-lg-4">
													<div class="dash-widget dct-border-rht">
														<div class="circle-bar circle-bar2">
															<div class="circle-graph2" data-percent="65">
																<img src="assets/img/icon-02.png" class="img-fluid" alt="Patient">
															</div>
														</div>
														<div class="dash-widget-info">
															<h6>Today Patient</h6>
															<h3>160</h3>
															<p class="text-muted">06, Nov 2019</p>
														</div>
													</div>
												</div>
												
												<div class="col-md-12 col-lg-4">
													<div class="dash-widget">
														<div class="circle-bar circle-bar3">
															<div class="circle-graph3" data-percent="50">
																<img src="assets/img/icon-03.png" class="img-fluid" alt="Patient">
															</div>
														</div>
														<div class="dash-widget-info">
															<h6>Appoinments</h6>
															<h3>85</h3>
															<p class="text-muted">06, Apr 2019</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div> -->
							
							<div class="row">
								<div class="col-md-12">
									<h4 class="mb-4">Patient Appoinment</h4>
									<div class="appointment-tab">
									
										
										<div class="tab-content">
										<?php 
											
										?>
											<!-- Upcoming Appointment Tab -->
											<div class="tab-pane show active" id="upcoming-appointments">
												<div class="card card-table mb-0">
													<div class="card-body">
														<div class="table-responsive">
															<table class="table table-hover table-center mb-0">
																<thead>
																	<tr>
																		<th>Patient Name</th>
																		<th>Appt Date</th>
																		<th>Time</th>
																		
																		<th class="text-center">Paid Amount</th>
																		<th>Status</th>
                                                                        <th></th>
																	</tr>
																</thead>
																<tbody>
																<?php 
																	$result = $con->query($appointments);
																	// print_r($result);
																	if($result->num_rows > 0){
																	while($row = $result->fetch_assoc()){
																		
																		
																?>							
																	<tr>
																		<td>
																			<h2 class="table-avatar">
																				<a href="single-patient.php?id=<?php echo $row['id'];?>" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="config/uploads/<?php echo $row['avatar'];?>" alt="User Image"></a>
																				<a href="single-patient.php?id=<?php echo $row['id'];?>"><?php echo $row['name']; ?> </a>
																			</h2>
																		</td>
																		<td><?php echo $row['booking_date'];?> </td>
																		<td><span class="d-block text-info"><?php echo $row['booking_time'];?></span></td>
																		
																		<td class="text-center"><?php echo $row['amount'];?></td>
																		<td>Completed</td>
																	</tr>
																	<?php 
																	}
																}else{

																	?>
																	<th>No Appointments</th>
																	<?php
																}
																	?>
																</tbody>
															</table>		
														</div>
													</div>
												</div>
											</div>
											<!-- /Upcoming Appointment Tab -->
									   
											
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>

				</div>

			</div>		
			<!-- /Page Content -->
			<script src="assets/js/jquery.min.js"></script>
			<script>
				$(document).ready(function(){
					$('#accept').on('click' ,function(){
						let id = $(this).attr('data-id');

						$.ajax({
						type: 'POST',
						url: 'config/change-status.php',
						data: { id: id },
						success: function(data)
						{
							console.log(data);
						}
					});
						console.log($(this).attr("data-id"));
					});
				});
			</script>
   
	<?php include_once('footer.php') ?>