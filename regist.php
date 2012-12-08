<?php
/*
 * Created on 2012-12-4
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 
 
//Validation error flag
$errflag = false;

//Sanitize the POST values
$email = clean($_POST['email']);
$username = clean($_POST['username']);
$password = clean($_POST['password']);
$cpassword = clean($_POST['cpassword']);

//Input Validations
if($username == '') {
	$errmsg_arr[] = 'Login ID missing';
	$errflag = true;
}
if($password == '') {
	$errmsg_arr[] = 'Password missing';
	$errflag = true;
}
if($cpassword == '') {
	$errmsg_arr[] = 'Confirm password missing';
	$errflag = true;
}
if( strcmp($password, $cpassword) != 0 ) {
	$errmsg_arr[] = 'Passwords do not match';
	$errflag = true;
}

//If there are input validations, redirect back to the registration form
if($errflag) {
	$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
	session_write_close();
	header("location: register-form.php");
	exit();
}
//Create INSERT query
$sql = "INSERT INTO USER VALUES (\'\',$username,MD5($password),$email)";
$result = @mysql_query($sql);
//print $qry;
//Check whether the query was successful or not
if($result) {
	header("location: register-success.php");
	exit();
}
else {
	die("Query failed");
}
?>
