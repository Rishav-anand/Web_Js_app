<?php 
session_start();
    if(isset($_SESSION["log"]))
    {
    	header('location:reg/reg.html');
    }

    else
    {
    	echo "<script>window.location.href='login.php';
		alert('Please Log in first ');</script>";
    } 
?>