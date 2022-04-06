<?php


session_start();
//Destroy session 
if (session_destroy()) {


	//redirecting to home Page 
	header("location:login.php")
}


?>