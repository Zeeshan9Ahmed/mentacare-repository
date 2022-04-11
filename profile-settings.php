<?php include_once("header.php");
include_once('./config/config.php');
 $user = '';
 if(!isset($_SESSION['login_data'])){
		header("Location: login.php");
	}else{
		if(($_SESSION['login_data']['role'] !== 'patient')){
			header("Location: login.php");
			
		}
	}	

	$id = $_SESSION['login_data']['id'];
	$query = 'Select * from users where id = "'.$id.'" LIMIT 1';
	$result = $con->query($query);
	if($result->num_rows > 0){
		$user = mysqli_fetch_assoc($result);
		
	}else{
		echo 'No user found';
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
						<?php 
						include_once('patient-profile-side-bar.php');
						?>
						
						
						<div class="col-md-7 col-lg-8 col-xl-9">
							<div class="card">
								<div class="card-body">
									
									<!-- Profile Settings Form -->
									<form method="POST" action="config/UserProfileUpdate.php" enctype="multipart/form-data">
										<div class="row form-row">
											<div class="col-12 col-md-12">
												<div class="form-group">
													<div class="change-avatar">
														<div class="profile-img">
														<img src="config/uploads/<?php echo $_SESSION['login_data']['data']['avatar'];?>" alt="User Image">
														</div>
														<div class="upload-img">
															<div class="change-photo-btn">
																<input type="file" class="upload" name="fileToUpload" id="fileToUpload">

																<span><i class="fa fa-upload"></i> Upload Photo</span>
																
															</div>
															<small class="form-text text-muted">Allowed JPG, GIF or PNG. Max size of 2MB</small>
														</div>
													</div>
												</div>
											</div>
											<div class="col-12 col-md-6">
												<div class="form-group">
													<label>Name</label>
													<input type="text" name="name" class="form-control" value="<?php echo $user['name'];?>">
												</div>
											</div>
											<div class="col-12 col-md-6">
												<div class="form-group">
													<label>Email ID</label>
													<input type="email" readonly class="form-control" value="<?php echo $user['email'] ?>">
												</div>
											</div>
											<div class="col-12 col-md-6">
												<div class="form-group">
													<label>Date of Birth</label>
													<div class="cal-icon">
														<input type="text" name="dob" class="form-control datetimepicker" value="<?php echo $user['date_of_birth'];?>">
													</div>
												</div>
											</div>
											
											
											<div class="col-12 col-md-6">
												<div class="form-group">
													<label>Mobile</label>
													<input type="text" name="phone_number" value="<?php echo $user['phone_number'];?>" class="form-control">
												</div>
											</div>
											
											<div class="col-md-6">
											<div class="form-group">
												<label>your gender is :<?php echo $user['gender']; ?></label>
												<select name="gender" class="form-control select">
													<option value="Male" <?php if($user['gender'] =="Male"){echo 'selected';}?>>Male</option>
													<option value="Female" <?php if($user['gender'] =="Female"){echo 'selected';}?>>Female</option>
												</select>
											</div>
										</div>
											
										</div>
										<div class="submit-section">
											<button type="submit" class="btn btn-primary submit-btn">Save Changes</button>
										</div>
									</form>
									<!-- /Profile Settings Form -->
									
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>		
			<!-- /Page Content -->
   
			<?php include_once("footer.php") ?>