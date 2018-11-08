<?php
                 
                 $dbhost = "localhost";
                 $dbuser = "root";
                 $dbpass = "root";
                 $dbname = "disneyworld";
                 $conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
             
                 if(mysqli_connect_errno()){
                     die("Database connection failed ".mysqli_connect_error()."(".mysqli_connect_errno().")");
                 }
                 
                 
                  mysqli_close($conn);
?>
<html>
<body>
<form action="booking_rides.php" method="POST">