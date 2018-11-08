<!DOCTYPE html>
<html lang="en">
<?php

	require_once("included_functions.php");
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "root";
    $dbname = "disneyworld";
    $conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

    if(mysqli_connect_errno()){
        die("Database connection failed ".mysqli_connect_error()."(".mysqli_connect_errno().")");
	}
	if(isset($_GET['name']))
	{
		$rname= $_GET['name'];
	}
	
	if (isset($_POST['submit'])) {
		// form was submitted
		$name = $_POST["name"];
		$email = $_POST["email"];
		$rest = $_POST["rest"];
		$num_t = $_POST["num_t"];
	   
		if ($name != '' && $email != '') {
			// successful login
			$rest_id = 0;
			$rest_query = "SELECT rest_id FROM restaurants where rest_name ='{$rest}'";
			$rest_query_result = mysqli_query($conn,$rest_query);
			if(!$rest_query_result){
				die("Database query merch_result failed");
			}
			while($row= mysqli_fetch_assoc($rest_query_result)){
			   $rest_id = $row["rest_id"];
			   echo $rest_id;
			}
		   

			$query = "SELECT * FROM transactions";
			$result = mysqli_query($conn,$query);
			if(!$result){
				die("database query failed");
			}
			$count = 0;
			while($row= mysqli_fetch_assoc($result)){
			   $count = $count+1;
			  
			}
			
			if($count == 0){
			   
			   $query1 = "INSERT INTO transactions values(1,'{$email}','{$rest}',{$rest_id},{$num_t})";
			   $result1 = mysqli_query($conn,$query1);
			   if(!$result1){
				   die("database query1 failed");
			   }
			}
			else{	
			   $query2 = "INSERT INTO transactions values($count+1,'{$email}','{$rest}',{$rest_id},{$num_t})";	
			   $result2 = mysqli_query($conn,$query2);
			   if(!$result2){
				   die("Database query2 failed");
			   }
			}
			
		   $rest_update_query = "UPDATE restaurants SET rest_seats = rest_seats - $num_t WHERE rest_id = {$rest_id}";
		   $rest_update_result = mysqli_query($conn, $rest_update_query);

			if(!$rest_update_result){
				die("Query merch_update_result failed");
			}

		   redirect_to("success.html");
		} else {
			$message = "There were some errors.";
		}
	} else {
	   $name ="";
	   $email = "";
	   $ride = "";
	   $phone = "";
	   $num_t = "";
		
	}

?>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Booking Restaurant</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min_booking.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style_booking.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="form-header">
							<h1>Book a Ride</h1>
						</div>
						<form action="booking_restaurants.php" method="POST">
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">Name</span>
										<input class="form-control" type="text" placeholder="Enter your name" name="name" id="name">
									</div>
								</div>
							
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">Email</span>
										<input class="form-control" type="email" placeholder="Enter your email" name="email" id="email">
									</div>
								</div>
							</div>
						
							<div class="form-group">
								<span class="form-label">Restaurant</span>
								   
								<input type="text" class="form-control" readonly="readonly" value="<?php echo $rname;?>" id="rest" name="rest" >
												
							</div>
							<div class="form-group">
								<span class="form-label">Number of Seats</span>
								
								<select class="form-control" name="num_t" id="num_t">
													<option>1</option>
													<option>2</option>
													<option>3</option>
													<option>4</option>
												<select>
												<span class="select-arrow"></span>
											</div>
							<div class="form-btn">
								<button class="submit-btn" name="submit" id="submit">Book Now</button>
								<br>
								</form>
							<form action="index1.php">
								<button class="submit-btn" name="cancel">Cancel</button></a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>