<?php
/*
 * Created on Dec 7, 2012
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 //Validation error flag
 $uid = $_SESSION['uid']; 
 $usr = $_SESSION['usr']; 
 
 $errflag = false;
 
 //Sanitize the POST values
 $keywords = $_GET['keywords'];
 $order = $_GET['order'];
 
 //Input Validations
 if($keywords == '') {
 	$errmsg_arr[] = 'Please type the keyword(s)';
 	$errflag = true;
 }
 if($order == 'relevance') {
 	
 }
 else if($order == 'rate') {
 	
 } 
 else if($order == 'time') {
 	
 }
?>
