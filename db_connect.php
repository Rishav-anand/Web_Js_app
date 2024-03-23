<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_db8";
$conn=mysqli_connect($servername,$username,$password);
                  if(!$conn)
                 {
                    die('could not connect'.mysqli_error());
                 }
                 mysqli_select_db($conn,$dbname);
?>