<?php
 include_once("header.php"); 
 include_once("config/config.php"); 

	$id = $_SESSION["login_data"]['id'];

	
$query="select * from users where `id`= $id "; // Fetch all the data from the table customers
$result=mysqli_query($con,$query);
$singleRow = mysqli_fetch_row($result);

$query1="select * from clinics where `user_id`= $id "; // Fetch all the data from the table customers
$result1=mysqli_query($con,$query1);
$singleRow1 = mysqli_fetch_row($result1);
print_r($singleRow1);

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
						
							<?php include_once('doctor-profile-side-bar.php'); ?>
							
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
						
							<!-- <div class="submit-section submit-btn-bottom">
								<button type="submit" name="update-doctor" class="btn btn-primary submit-btn">Save Changes</button>
							</div> -->
							</form>
						</div>
					</div>

				</div>

			</div>		
			<!-- /Page Content -->
   
			<?php include_once("footer.php"); ?>