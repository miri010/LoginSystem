<?php
session_start();
if (!isset($_SESSION['username'])) //si le username est declare


{
	header("Location:login.php") // lenvoie de HTTP brut a un client sous forme brute
}

?>