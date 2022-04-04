<?php include_once('header.php');
   print_r($_SESSION);
?>
<!-- Page Content -->
<div class="content">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-8 offset-md-2">
            <!-- Account Content -->
            <div class="account-content">
               <div class="row align-items-center justify-content-center">
                  <div class="col-md-7 col-lg-6 login-left">
                     <img src="assets/img/login-banner.png" class="img-fluid" alt="Login Banner">	
                  </div>
                  <div class="col-md-12 col-lg-6 login-right">
                     <div class="login-header">
                        <h3>Doctor Register <a href="register.php">Not a Doctor?</a></h3>
                     </div>
                     <!-- Register Form -->
                     <form action="config/register.php" method="post">
                        <input type="hidden" name="doctor" />
                        <div class="form-group form-focus">
                           <input type="text"  name="name" class="form-control floating" required>
                           <label class="focus-label" >Name</label>
                        </div>
                       
                        <div class="form-group form-focus">
                           <input type="email" name="email" class="form-control floating"required >
                           <label class="focus-label" >Email</label>
								   <span class="text text-danger"><?php if(isset($_SESSION['emailErr'])){echo $_SESSION['emailErr']; $_SESSION['emailErr']='';}else{echo '';}?></span>

                        </div>
						<div class="form-group form-focus">
                           <input type="date" name ="date_of_birth" class="form-control floating"required >
                           <label class="focus-label" >D.O.B</label>
                        </div>
                        <div class="form-group form-focus">
											<input type="radio" name="gender" value="male" />
											<label class="focus-label">male</label>
											</div>
											<div class="form-group form-focus">
											<input type="radio" name="gender" value="male" />
											<label class="focus-label">male</label>
											</div>
                        <div class="form-group form-focus">
                           <input type="password" name="password" class="form-control floating" required>
                           <label class="focus-label">Create Password</label>
									<span class="text text-danger"><?php if(isset($_SESSION['passwordErr'])){echo $_SESSION['passwordErr']; $_SESSION['passwordErr']='';}else{echo '';}?></span>

                        </div>
						<div class="form-group form-focus">
                           <input type="text" name="speciality" class="form-control floating" required>
                           <label class="focus-label">Speciality</label>
                        </div>
						<div class="form-group form-focus">
                           <input type="text" name="doctor_id" class="form-control floating" required>
                           <label class="focus-label">Doctor Id</label>
                        </div>
                        <div class="text-right">
                           <a class="forgot-link" href="login.php">Already have an account?</a>
                        </div>
                        <button class="btn btn-primary btn-block btn-lg login-btn" type="submit" name="doctor">Signup</button>
                        <div class="login-or">
                           <span class="or-line"></span>
                           <span class="span-or">or</span>
                        </div>
                        <div class="row form-row social-login">
                           <div class="col-6">
                              <a href="#" class="btn btn-facebook btn-block"><i class="fab fa-facebook-f mr-1"></i> Login</a>
                           </div>
                           <div class="col-6">
                              <a href="#" class="btn btn-google btn-block"><i class="fab fa-google mr-1"></i> Login</a>
                           </div>
                        </div>
                     </form>
                     <!-- /Register Form -->
                  </div>
               </div>
            </div>
            <!-- /Account Content -->
         </div>
      </div>
   </div>
</div>
<!-- /Page Content -->
<?php include_once('footer.php')  ?>