<?php  ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Banking Project</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="login.php" method="post">
					<span class="login100-form-title p-b-26">
						Account Login
					</span>
					<!--
					<span class="login100-form-title p-b-48" >
						<i class="zmdi zmdi-font"></i>
					</span>
					-->
					<div class="wrap-input100 validate-input" data-validate = "Valid email">
						<input class="input100" type="text" name="email">
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Account Number">
						<input class="input100" type="text" name="accountN">
						<span class="focus-input100" data-placeholder="Account Number"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter Code">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="code">
						<span class="focus-input100" data-placeholder="Security Code"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit" name="submit">
								Login
							</button>
						</div>
					</div>
				</form>

					<div class="text-center p-t-115">
						<span class="txt1">	Don’t have an account? </span>
						<a class="txt2" href="#" data-toggle="modal" data-target="#exampleModal">	Create Account </a>
					</div>

			</div>
		</div>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title">Create Account</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
					<div class="wrap-input100 validate-input" data-validate="Full Name">
						<input class="input100" type="text" name="name">
						<span class="focus-input100" data-placeholder="Full Name"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="email">
						<input class="input100" type="email" name="email">
						<span class="focus-input100" data-placeholder="email"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Address">
						<input class="input100" type="text" name="address">
						<span class="focus-input100" data-placeholder="Address"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Contact">
						<input class="input100" type="phone" name="contact">
						<span class="focus-input100" data-placeholder="Contact"></span>
					</div>
	      </div>
	      <div class="modal-footer">
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit" name="submit">
								Submit
							</button>
						</div>
					</div>
	      </div>
	    </div>
	  </div>
	</div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
