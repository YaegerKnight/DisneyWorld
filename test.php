<?php
                 
                 $dbhost = "localhost";
                 $dbuser = "root";
                 $dbpass = "root";
                 $dbname = "disneyworld";
                 $conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
             
                 if(mysqli_connect_errno()){
                     die("Database connection failed ".mysqli_connect_error()."(".mysqli_connect_errno().")");
                 }
                 $query = "SELECT * FROM transactions WHERE trans_user_email = 'nandan@gmail.com'";
                 $result = mysqli_query($conn,$query);
                 $num_rows = mysqli_num_rows($result);                 
                 echo($num_rows);
                  mysqli_close($conn);
?>
