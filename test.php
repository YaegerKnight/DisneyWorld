<?php
                 
                 $dbhost = "localhost";
                 $dbuser = "root";
                 $dbpass = "root";
                 $dbname = "disneyworld";
                 $conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
             
                 if(mysqli_connect_errno()){
                     die("Database connection failed ".mysqli_connect_error()."(".mysqli_connect_errno().")");
                 }
                 $query = "SELECT * FROM rides";
                 $result = mysqli_query($conn,$query);
                 $rname=""; 
                  while($row=mysqli_fetch_assoc($result)){
                    if($row["ride_id"]==111){
                        $rname=$row["ride_name"];
                        echo $row["ride_name"];
                    }
                  }
                mysqli_data_seek($result,0);
                 while($row1=mysqli_fetch_assoc($result)){
                    if($row1["ride_id"]==112){
                        $rname=$row1["ride_name"];
                        echo $row1  ["ride_name"];
                    }
                  }
                
                  mysqli_close($conn);
?>