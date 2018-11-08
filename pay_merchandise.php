<!DOCTYPE html>
<html lang="en">
<?php
 require_once("included_functions.php");
				 
				 $dbhost = "localhost";
                 $dbuser = "root";
                 $dbpass = "root";
                 $dbname = "disneyworld";
				 $conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

				 $rname = $_GET['name'];
				 	
				 if (isset($_POST['submit'])) {
					 // form was submitted
					 $name = $_POST["name"];
					 $email = $_POST["email"];
					 $sel_t = $_POST["sel_t"];
					 $phone = $_POST["phone"];
					 $num_t = $_POST["num_t"];
					
					 if ($name != '' && $email != '') {
						 // successful login
						 $merch_id = 0;
					 	 $merch_query = "SELECT merch_id FROM merchandise where merch_name = '{$sel_t}'";
						 $merch_result = mysqli_query($conn,$merch_query);
						 if(!$merch_result){
							 die("Database query merch_result failed");
						 }
						 while($row= mysqli_fetch_assoc($merch_result)){
							$merch_id = $row["merch_id"];
							
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
							
							$query1 = "INSERT INTO transactions values(1,'{$email}','{$sel_t}',{$merch_id},{$num_t})";
							$result1 = mysqli_query($conn,$query1);
							if(!$result1){
								die("database query1 failed");
							}
						 }
						 else{	
							$query2 = "INSERT INTO transactions values($count+1,'{$email}','{$sel_t}',{$merch_id},{$num_t})";	
							$result2 = mysqli_query($conn,$query2);
							if(!$result2){
								die("Database query2 failed");
							}
						 }
						 
						$merch_update_query = "UPDATE merchandise SET merch_qty = merch_qty - $num_t WHERE merch_id = {$merch_id}	";
						 $merch_update_result = mysqli_query($conn, $merch_update_query);

						 if(!$merch_update_result){
							 die("Query merch_update_result failed");
						 }

						redirect_to("success.html");
					 } else {
						 $message = "There were some errors.";
					 }
				 } else {
					$name ="";
					$email = "";
					$sel_t = "";
					$phone = "";
					$num_t = "";
					 
				 }
?>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Booking Merchandise</title>

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
							<h1>Payment</h1>
						</div>
						<form action="pay_merchandise.php" method="post">
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group"  >
										<span class="form-label" >Name</span>
										<input class="form-control" type="text" placeholder="Enter your name" id="name" name="name">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group"> 
										<span class="form-label"  >Email</span>
										<input class="form-control" type="email" placeholder="Enter your email" name="email" id="email">
									</div>
								</div>
							</div>
							<div class="form-group">
								<span class="form-label">Phone</span>
								<input class="form-control" type="tel" placeholder="Enter your phone number"  id="phone" name="phone">
							</div>
							<div class="form-group" >
								<span class="form-label"  >Select a T-Shirt</span>
								
								<input type="text" class="form-control" readonly="readonly" value="<?php echo $rname;?>" id="sel_t" name="sel_t" >
													
							</div>
							
							
							
							<div class="form-group" >
								<span class="form-label">Number of T-Shirt</span>
								
							<select class="form-control"  id="num_t" name="num_t">
													<option>1</option>
													<option>2</option>
													<option>3</option>
													<option>4</option>
													<option>5</option>
													<option>6</option>
													
												
												<select>
												<span class="select-arrow"></span>
											</div>
							<div class="form-btn">
								<button class="submit-btn" name="submit" value="Submit">Buy</button>
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
</body>

</html>
<?php
   mysqli_close($conn);
?>