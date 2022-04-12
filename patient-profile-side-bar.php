<!-- Profile Sidebar -->
						<div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">
							<div class="profile-sidebar">
								<div class="widget-profile pro-widget-content">
									<div class="profile-info-widget">
										<a href="#" class="booking-doc-img">
											<img src="config/uploads/<?php echo $_SESSION['login_data']['data']['avatar'];?>" alt="User Image">
										</a>
										<div class="profile-det-info">
											<h3><?php echo $_SESSION['login_data']['data']['name'];?></h3>
											<div class="patient-details">
												<h5><i class="fas fa-birthday-cake"></i> <?php echo $_SESSION['login_data']['data']['date_of_birth'];?></h5>
												<h5 class="mb-0"><i class="fas fa-map-marker-alt"></i> <?php echo $_SESSION['login_data']['data']['address'];?></h5>
											</div>
										</div>
									</div>
								</div>
								<div class="dashboard-widget">
									<nav class="dashboard-menu">
										<ul>
											<li class="active">
												<a href="patient-dashboard.php">
													<i class="fas fa-columns"></i>
													<span>Dashboard</span>
												</a>
											</li>
											<li>
												<a href="pateint-appoinments.php">
													<i class="fas fa-bookmark"></i>
													<span>Appointments</span>
												</a>
											</li>
											<li>
												<a href="patient-perceptions.php">
													<i class="fas fa-bookmark"></i>
													<span>Perceptions</span>
													
												</a>
											</li>
											<li>
												<a href="search.php">
													<i class="fas fa-bookmark"></i>
													<span>Doctors</span>
													
												</a>
											</li>
											<li>
												<a href="profile-settings.php">
													<i class="fas fa-user-cog"></i>
													<span>Profile Settings</span>
												</a>
											</li>
											<li>
												<a href="patient-change-password.php">
													<i class="fas fa-lock"></i>
													<span>Change Password</span>
												</a>
											</li>
											<li>
												<a href="logout.php">
													<i class="fas fa-sign-out-alt"></i>
													<span>Logout</span>
												</a>
											</li>
										</ul>
									</nav>
								</div>

							</div>
						</div>
						<!-- / Profile Sidebar -->
						