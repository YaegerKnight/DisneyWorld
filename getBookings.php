<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

<style>
    table
    {
        margin-bottom: 100px;
        border-width:0px;
        border-color:black;
        margin-left: 35%;
        background: rgba(255,255,255,0.5);
    }
    body{
        margin-top: 20%;
        font-weight: bolder;   
	    font-family: 'Montserrat', sans-serif;
	    background-image: url('../img/team/book.jpg');
	    background-size: 100%;
	    background-position: center;
        background-repeat: no-repeat;
        color: black;
    }
</style>
</head>

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
	if(isset($_GET['email']))
	{
		$email= $_GET['email'];
	}
		   

	$query = "SELECT * FROM transactions WHERE trans_user_email = '$email'";
	$result = mysqli_query($conn,$query);
	if(!$result){
		die("database query failed");
    }
/*    echo "<body><h3>";
    echo "<table border='1'>
        <tr>

        <td>Transaction Id</td>

        <td>Transacted Item</td>

        <td>Number of items</td>

        </tr>";
    while($row = $result->fetch_array())
    {

        echo "<tr>";

        echo "<td>" . $row['trans_id'] . "</td>";

        echo "<td>" . $row['trans_user_item'] . "</td>";

        echo "<td>" . $row['trans_item_no'] . "</td>";

        echo "</tr>";
    }
    echo "</table></h3></body>";*/        
?>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>View Booking</title>

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
							<h1>Your Booking</h1>
                        </div>
                        <div class='row'>
								<div class='col-sm-4'>
									<div class='form-group'>
                                        <span class='form-label'>Transaction ID</span>
                                    </div>
                                </div>
                                <div class='col-sm-4'>
									<div class='form-group'>
                                        <span class='form-label'>Item Booked</span>
                                    </div>
                                </div>    
                                <div class='col-sm-4'>
									<div class='form-group'>
                                        <span class='form-label'>Item Quantity</span>
                                    </div>
                                </div>
                        </div>                                
                        <?php while($row = $result->fetch_array())
						echo "
							<div class='row'>
								<div class='col-sm-4'>
									<div class='form-group'>
										<input class='form-control' type='text' readonly='readonly' value=".$row['trans_id'].">
									</div>
								</div>
								<div class='col-sm-4'>
									<div class='form-group'>
										<input class='form-control' type='text' readonly='readonly' value=".$row['trans_user_item'].">
									</div>
								</div>
                                <div class='col-sm-4'>
									<div class='form-group'>
										<input class='form-control' type='text' readonly='readonly' value=".$row['trans_item_no'].">
									</div>
								</div>
                            </div>";
                            ?>
						<div class="form-btn">
							<a href = "index1.php"><button class="submit-btn">Back To Home</button></a>
						</div>   
					</div>
				</div>
			</div>
		</div>
	</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>