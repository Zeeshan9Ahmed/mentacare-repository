<?php include_once('header.php');
$user_id = '';
if(isset($_GET['id'])){
   $user_id = $_GET['id'];
}
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
                        <h3>
                           Almost Done
                        </h3>
                        <p>Please fill the Below details<p>
                     </div>
                     <!-- Register Form -->
                     <form action="config/further-register.php" method="post">
                        <input type="hidden" name='user_id' value=<?php echo $user_id;?>>
                        <div class="form-group form-focus">
                           <input type="text"  name="national_id" class="form-control floating" >
                           <label class="focus-label" >National Id</label>
                           <span class="text text-danger"><?php if(isset($_SESSION['national_id'])){echo $_SESSION['national_id']; $_SESSION['national_id']='';}else{echo '';}?></span>
                        </div>
                        <div class="form-group form-focus">
                           <input type="number" name="number" class="form-control floating" >
                           <label class="focus-label" >Phone number</label>
                           <span class="text text-danger"><?php if(isset($_SESSION['phone_number'])){echo $_SESSION['phone_number']; $_SESSION['phone_number']='';}else{echo '';}?></span>
                        </div>
                        <div class="form-group form-focus">
                           <input type="number" name="emergency_number" class="form-control floating" >
                           <label class="focus-label" >Emergency Contact</label>
                           <span class="text text-danger"><?php if(isset($_SESSION['emergency_number'])){echo $_SESSION['emergency_number']; $_SESSION['emergency_number']='';}else{echo '';}?></span>
                        </div>
                        <div class="form-group form-focus">
                           <input type="number" name="verification_code" class="form-control floating" >
                           <label class="focus-label" >Verification Code</label>
                           <span class="text text-danger"><?php if(isset($_SESSION['verification_code'])){echo $_SESSION['verification_code']; $_SESSION['verification_code']='';}else{echo '';}?></span>
                        </div>
                        <button class="btn btn-primary btn-block btn-lg login-btn" type="submit" name="doctor">Signup</button>
                        
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
<?php include_once('footer.php')  

?>