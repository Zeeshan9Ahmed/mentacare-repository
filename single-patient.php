<?php include_once('header.php'); 
	include_once('config/config.php');
	if(!isset($_SESSION['login_data'])){
		header("Location: login.php");
	}else{
		if(($_SESSION['login_data']['role'] == 'doctor'  || $_SESSION['login_data']['role'] == 'patient')){
			
			
		}else
		{
			header("Location: login.php");
		}
	}
	$query = "select * from users where users.id = '".$_GET['id']."'";
	$result = $con->query($query);


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
							<?php 
							if($result->num_rows > 0){
								while($row = $result->fetch_assoc()){
							?>
							<div class="row">
						<div class="col-md-5 col-lg-12 col-xl-9 theiaStickySidebar">
						
							<!-- Profile Widget -->
							<div class="card widget-profile pat-widget-profile">
								<div class="card-body">
									<div class="pro-widget-content">
										<div class="profile-info-widget">
											<a href="#" class="booking-doc-img">
												<img src="config/uploads/<?php echo $row['avatar'];?>" alt="User Image">
											</a>
											<div class="profile-det-info">
												<h3><a href="patient-profile.php"><?php echo $row['name'];?></a></h3>
												<div class="patient-details">
													<!-- <h5><b>Patient ID :</b> PT0016</h5> -->
													<h5 class="mb-0"><i class="fas fa-map-marker-alt"></i> <?php echo $row['date_of_birth'];?></h5>
												</div>
											</div>
										</div>
									</div>
									<div class="patient-info">
										<ul>
											<li>Phone <span><?php echo $row['phone_number'];?></span></li>
											<li>Email <span><?php echo $row['email'];?></span></li>
											<li>Date Of Birth <span><?php echo $row['date_of_birth'];?></span></li>
											<li>Gender <span><?php echo $row['gender'];?></span></li>
										</ul>
									</div>
								</div>
							</div>
							<!-- /Profile Widget -->
							
						</div>

						<?php
					}
						} 
					?>
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