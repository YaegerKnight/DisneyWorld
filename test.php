<?php
                 
                 $dbhost = "localhost";
                 $dbuser = "root";
                 $dbpass = "root";
                 $dbname = "disneyworld";
                 $conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
             
                 if(mysqli_connect_errno()){
                     die("Database connection failed ".mysqli_connect_error()."(".mysqli_connect_errno().")");
                 }
                 
                  $rname = "RollerCoaster";
                  $name = "Mi";
		            $email = "k@g.com";
		        //$ride = $_POST["ride"];
		        $phone = 1234567890;
		        $num_t = 4;
                  $query = "SELECT * FROM transactions";
			$result = mysqli_query($conn,$query);
			if(!$result){
				die("database query failed");
			}
			$count = 0;
			while($row= mysqli_fetch_assoc($result)){
			   $count = $count+1;
			  
            }
            $ride_id = 0;
			$ride_query = "SELECT ride_id FROM rides where ride_name = '{$rname}'";
			$ride_query_result = mysqli_query($conn,$ride_query);
			if(!$ride_query_result){
				die("Database query merch_result failed");
			}
			while($row= mysqli_fetch_assoc($ride_query_result)){
			   $ride_id = $row["ride_id"];
			   
			}
			
			if($count == 0){
			   
			   $query1 = "INSERT INTO transactions values(1,'{$email}','{$rname}',{$ride_id},{$num_t})";
			   $result1 = mysqli_query($conn,$query1);
			   if(!$result1){
				   die("database query1 failed");
               }
               else{
                   echo "query1 succesful";
               }
			}
			else{	
			   $query2 = "INSERT INTO transactions values($count+1,'{$email}','{$rname}',{$ride_id},{$num_t})";	
			   $result2 = mysqli_query($conn,$query2);
			   if(!$result2){
				   die("Database query2 failed");
               }
               else{
                echo "query2 succesful";
            }
			}
			
                
                  mysqli_close($conn);
?>