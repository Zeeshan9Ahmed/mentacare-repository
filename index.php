<?php 
include_once("header.php");
include_once("config/config.php");
	$qeury = 'select * from users where role = "doctor"';
	$result = $con->query($qeury);
	
?>
			
			<!-- Home Banner -->
			<section class="section section-search">
				<div class="container-fluid">
					<div class="banner-wrapper">
						<div class="banner-header text-center">
							<h1>Search Doctor, Make an Appointment</h1>
							<p>Discover the best doctors, clinic & hospital the city nearest to you.</p>
						</div>
                         
					
						
					</div>
				</div>
			</section>
			<br>
			<div class="container-fluid">
			<div class="row">
			
			<?php 
				if($result->num_rows > 0){
				while($row = $result->fetch_assoc()){
				
			?>
			<div class="col-sm-3">
				<div class="card">
				<img src="https://www.logogrand.com/sample_logo/images/3d/11.jpg" class="card-img-top" alt="...">

				<div class="card-body">
					<h5 class="card-title"><?php echo $row['name']?></h5>
					<p class="card-text"><?php echo $row['speciality']?></p>
					<p class="card-text"><?php echo $row['fees']?></p>
					<a href="booking.php?id=<?php echo $row['id'];?>" class="btn btn-primary">Book an Appointment</a>
				</div>
				</div>
			</div>
			<?php
				}
				}
				?>
		</div>
				
			</div>
			
		<?php include_once("footer.php") ?>