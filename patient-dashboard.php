<?php include_once('header.php') ;
	include_once('config/config.php');
	if(!isset($_SESSION['login_data'])){
		header("Location: login.php");
	}else{
		if(($_SESSION['login_data']['role'] !== 'patient')){
			header("Location: login.php");
			
		}
	}
	$appointments = "select appointments.booking_date , appointments.booking_time,appointments.amount,appointments.status, users.avatar ,users.id , users.name  from appointments INNER JOIN users on appointments.doctor_id = users.id where patient_id =
	'".$_SESSION['login_data']['id']."'";
	$result = $con->query($appointments);
	
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
						
						<?php 
							include_once('patient-profile-side-bar.php');
						?>
						<div class="col-md-7 col-lg-8 col-xl-9">
							<div class="card">
								<div class="card-body pt-0">
								
									<!-- Tab Menu -->
									<nav class="user-tabs mb-4">
										<ul class="nav nav-tabs nav-tabs-bottom nav-justified">
											<li class="nav-item">
												<a class="nav-link active" href="#pat_appointments" data-toggle="tab">Appointments</a>
											</li>
											
											
										</ul>
									</nav>
									<!-- /Tab Menu -->
									
									<!-- Tab Content -->
									<div class="tab-content pt-0">
										
										<!-- Appointment Tab -->
										<div id="pat_appointments" class="tab-pane fade show active">
											<div class="card card-table mb-0">
												<div class="card-body">
													<div class="table-responsive">
														<table class="table table-hover table-center mb-0">
															<thead>
																<tr>
																	<th>Doctor</th>
																	<th>Appt Date</th>
																	<th>Booking Date</th>
																	<th>Amount</th>
																	<th>Status</th>
																	<th></th>
																</tr>
															</thead>
															<tbody>
																<?php if($result->num_rows > 0){

																	while($row = $result->fetch_assoc()){
																		
																?>
																<tr>
																	<td>
																		<h2 class="table-avatar">
																			<a href="doctor-profile.php" class="avatar avatar-sm mr-2">
																				<img class="avatar-img rounded-circle" src="config/uploads/<?php echo $row['avatar'];?>" alt="User Image">
																			</a>
																			<a href="doctor-profile.php"><?php echo $row['name'];?> <span>Dental</span></a>
																		</h2>
																	</td>
																	<td><?php echo $row['booking_date'];?> </td>
																	<td><?php echo $row['booking_time'];?> </td>
																	<td>$<?php echo $row['amount'];?> </td>
																	<td><span class="badge badge-pill bg-success-light"><?php echo $row['status'];?></span></td>
																	
																</tr>
																<?php 
																}
															}else{?>
															<th class="text-align-center">No Appointment</th>
															<?php 
															}
															?>
																
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
										<!-- /Appointment Tab -->
										
										
											
										
										
									</div>
									<!-- Tab Content -->
									
								</div>
							</div>
						</div>
					</div>

				</div>

			</div>		
			<!-- /Page Content -->
   
			<!-- Footer -->
	
			<?php include_once('footer.php') ?>