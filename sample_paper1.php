<?php 
session_start();
    if(isset($_SESSION["log"]))
    {
    	header('location:sample_paper.html');
    }

    else
    {
    	echo "<script>alert('Login Frist');window.location.href='login_signup/login.php';
						</script>";
    } 
?>