<?php
/*
 * Created on Dec 7, 2012
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 session_start();
 
 $uid = $_SESSION['uid']; 
 $usr = $_SESSION['usr'];

 $title = $_POST['title']; 
 $url = $_POST['url']; 
 
 // youtube video id regex 
 preg_match("#(?<=v=)[a-zA-Z0-9-]+(?=&)|(?<=v\/)[^&\n]+(?=\?)|(?<=v=)[^&\n]+|(?<=youtu.be/)[^&\n]+#", $url, $vid);
 
 
 
 
 $sql = "insert into trailer(title, url, uid, postTime) 
             values('" . $title . "','" . $vid . "','" . $uid . "', now())";
 
?>
