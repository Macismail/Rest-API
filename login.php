<?php
	ob_start();
	include_once 'connDB.php';

	if(!isset($_POST['email']) || !isset($_POST['code']) || !isset($_POST['accountN'])){
		header("Location: index.php?log_in_error=enter_email_and_security_code");
		exit();
	}

	$email = strtolower($_POST['email']);
	$accountN = $_POST['accountN'];
	$code = $_POST['code'];
	$_SESSION['email'] = $email;

	$statement = $conn->prepare("SELECT * FROM Customer WHERE email=?");
	$statement->bind_param("s", $emailPrepared);
	$emailPrepared = $email;
	$statement->execute();
	$result = $statement->get_result();
	$row = $result->fetch_assoc();
	$emailCount = $result->num_rows;

	if($emailCount<1){
		unset($_SESSION['email']);
		header("Location: index.php?log_in_error=invalid_email");
		exit();
	}

	$stmt = $conn -> prepare("SELECT * FROM Account WHERE accountNumber=? AND customerID=?");
	$stmt->bind_param("ss", $accountPrepared, $idPrepared);
	$accountPrepared = $accountN; $idPrepared = $row['customerID'];
	$stmt->execute();
	$result1 = $stmt->get_result();
	$row1 = $result1->fetch_assoc();
	$accountCount = $result1->num_rows;

	if($accountCount < 1){
		unset($_SESSION['email']);
		header("Location: index.php?log_in_error=invalid_Account_Number");
		exit();
	}

	if($code != $row['securityCode']) {
		unset($_SESSION['email']);
		header("Location: index.php?log_in_error=invalid_security_code");
		exit();
	}

	$_SESSION['logged'] = true;
	$_SESSION['accountID'] = $row1['accountID'];
	$_SESSION['accountN'] = $accountN;
	$_SESSION['customerID'] = $row['customerID'];
	header("Location: home.php?log_in_successful");

?>
