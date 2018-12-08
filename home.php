<?php

	include_once 'connDB.php';
	if (!$_SESSION['logged']) {
		header("Location: index.php?log_in_error=login");
		exit();
	}
	$accountN = $_SESSION['accountN'];
	$customerID = $_SESSION['customerID'];
	$accountID = $_SESSION['accountID'];

	$newAccout = "";
	function createAN(){
		$numbers = '123456789';
		for ($i = 0; $i < 8; $i++) {
				$tempCode .= $numbers[rand(0, 8)]; //length - 1
		}
		return $tempCode;
	}
	$newAccout = createAN();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Bankin Project</title>
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
				<div class="login100-form-title p-b-26">
					<?php if ($_SESSION['logged']){echo '<a href="logout.php">Sign Out</a>';}?>
				</div>
					<span class="login100-form-title p-b-26">
						My Account
					</span>

					<div class="row">

						<div class="col-md-6">
							<div class="container-login100-form-btn">
								<div class="wrap-login100-form-btn">
									<div class="login100-form-bgbtn"></div>
									<a class="login100-form-btn" href="http://localhost:8080/api/customers">
										Get All Customers
									</a>
								</div>
							</div>

							<div class="container-login100-form-btn">
								<div class="wrap-login100-form-btn">
									<div class="login100-form-bgbtn"></div>
									<a class="login100-form-btn"href="http://localhost:8080/api/customers/account/accountBalance/<?php echo $accountID ?>">
										Check Balance
									</a>
								</div>
							</div>

							<div class="container-login100-form-btn">
								<div class="wrap-login100-form-btn">
									<div class="login100-form-bgbtn"></div>
									<button class="login100-form-btn">
										Make Transfer
									</button>
								</div>
							</div>

							<div class="container-login100-form-btn">
								<div class="wrap-login100-form-btn">
									<div class="login100-form-bgbtn"></div>
									<button class="login100-form-btn">
										Make Transfer
									</button>
								</div>
							</div>

							<div class="container-login100-form-btn">
								<div class="wrap-login100-form-btn">
									<div class="login100-form-bgbtn"></div>
									<button class="login100-form-btn">
										Make Transfer
									</button>
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<div class="container-login100-form-btn ">
								<div class="wrap-login100-form-btn">
									<div class="login100-form-bgbtn"></div>
									<button class="login100-form-btn" data-toggle="modal" data-target="#createAccount">
										Create Account
									</button>
								</div>
							</div>

							<div class="container-login100-form-btn">
								<div class="wrap-login100-form-btn">
									<div class="login100-form-bgbtn"></div>
									<button class="login100-form-btn">
										Check Balance
									</button>
								</div>
							</div>

							<div class="container-login100-form-btn">
								<div class="wrap-login100-form-btn">
									<div class="login100-form-bgbtn"></div>
									<button class="login100-form-btn">
										Make Transfer
									</button>
								</div>
							</div>
						</div>

					</div>
			</div>
		</div>
	</div>

	<!-- Modal here the link:  data-toggle="modal" data-target="#exampleModal" -->
	<div class="modal fade" id="createAccount" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title">Create Account</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
				<form action="http://localhost:8080/api/customers/createAccount" method="post" enctype="application/x-www-form-urlencoded">
	      <div class="modal-body">
					<div class="wrap-input100 validate-input" data-validate="Full Name">
						<div class="wrap-input100 validate-input">
							<label for="custom-select">Account Type</label>
						</div>
						<div class="input-group mb-3">
						  <select class="custom-select" name="accountType" Type="text">
						    <option selected>Select</option>
						    <option>Curent Account</option>
						    <option>Saving Account</option>
						  </select>
						</div>
					</div>
					<input type="text" name="accountN" value="<?php echo $newAccout ?>" hidden>
					<input type="text" name="sortCode" value="901378" hidden>
					<input type="text" name="customerID" value="<?php echo $customerID ?>" hidden>
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
			</form>
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
