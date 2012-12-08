<?php
/*
 * Created on 2012-12-4
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 
 $username = $_POST['username'];
 $password = $_POST['password'];
 $_SESSION['usr'] = $username;

 $sql="select uid from username where usr='$username' and psw='MD5('$password')'";
 $result=mysql_query($sql);
if(!$result){
	echo "Username Or Password Error";
}
else {
	$_SESSION['uid'] = $result;
	echo "<tr>"."Welcome back".$username."<\tr>";
} 

?>
