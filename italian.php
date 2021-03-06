<!doctype html>
<html lang="en">
<?php
   $dbhost = "localhost";
   $dbuser = "root";
   $dbpass = "root";
   $dbname = "disneyworld";
   $conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

   if(mysqli_connect_errno()){
       die("Database connection failed ".mysqli_connect_error()."(".mysqli_connect_errno().")");
   }
   $query = "SELECT * FROM restaurants";
   $result = mysqli_query($conn,$query);

?>
<head>
  <meta charset="utf-8">
  <title>Disney Land</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/nivo-slider/css/nivo-slider.css" rel="stylesheet">
  <link href="lib/owlcarousel/owl.carousel.css" rel="stylesheet">
  <link href="lib/owlcarousel/owl.transitions.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/venobox/venobox.css" rel="stylesheet">

  <!-- Nivo Slider Theme -->
  <link href="css/nivo-slider-theme.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- Responsive Stylesheet File -->
  <link href="css/responsive.css" rel="stylesheet">
</head>

<body data-spy="scroll" data-target="#navbar-example">


  <!-- Start portfolio Area -->
  <div id="portfolio" class="portfolio-area area-padding fix">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>ITALIAN CUISINES</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- Start Portfolio -page -->
        <div class="awesome-project-1 fix">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            
          </div>
        </div>
        <div class="awesome-project-content">
          <!-- single-awesome-project start -->
          <div class="col-md-4 col-sm-4 col-xs-12 design development">
            <div class="single-awesome-project">
              <div class="awesome-img">
               <img src="img/portfolio/15.jpg" alt="" />
                <div class="add-actions text-center">
                  <div class="project-dec">
                   
                  <h4><a href="booking_restaurants.php?name=<?php
                  $rname=""; 
                  while($row=mysqli_fetch_assoc($result)){
                    if($row["rest_id"]==19){
                        $rname=$row["rest_name"];
                        echo $row["rest_name"];
                    }
                  }
                ?>">
                
                <?php
                  echo $rname;
                
                ?></a>     </h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- single-awesome-project end -->
          <!-- single-awesome-project start -->
          <div class="col-md-4 col-sm-4 col-xs-12 photo">
            <div class="single-awesome-project">
              <div class="awesome-img">
               <img src="img/portfolio/16.jpg" alt="" />
                <div class="add-actions text-center">
                  <div class="project-dec">
                    
                        
                  <h4><a href="booking_restaurants.php?name=<?php
                  mysqli_data_seek($result,0);
                  $rname=""; 
                  while($row=mysqli_fetch_assoc($result)){
                    if($row["rest_id"]==20){
                        $rname=$row["rest_name"];
                        echo $row["rest_name"];
                    }
                  }
                ?>">
                
                <?php
                  echo $rname;
                
                ?></a>     </h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- single-awesome-project end -->
          <!-- single-awesome-project start -->
          <div class="col-md-4 col-sm-4 col-xs-12 design">
            <div class="single-awesome-project">
              <div class="awesome-img">
             <img src="img/portfolio/17.jpg" alt="" />
                <div class="add-actions text-center">
                  <div class="project-dec">
                    
                         
                  <h4><a href="booking_restaurants.php?name=<?php
                  mysqli_data_seek($result,0);
                  $rname=""; 
                  while($row=mysqli_fetch_assoc($result)){
                    if($row["rest_id"]==21){
                        $rname=$row["rest_name"];
                        echo $row["rest_name"];
                    }
                  }
                ?>">
                
                <?php
                  echo $rname;
                
                ?></a>     </h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- single-awesome-project end -->
          <!-- single-awesome-project start -->
          <div class="col-md-4 col-sm-4 col-xs-12 photo development">
            <div class="single-awesome-project">
              <div class="awesome-img">
                
                <div class="add-actions text-center">
                  <div class="project-dec">
                   
                      
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- single-awesome-project end -->
          <!-- single-awesome-project start -->
          <div class="col-md-4 col-sm-4 col-xs-12 development">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <img src="img/portfolio/19.jpg" alt="" />
                <div class="add-actions text-center text-center">
                  <div class="project-dec">
                      
                  <h4><a href="booking_restaurants.php?name=<?php
                  mysqli_data_seek($result,0);
                  $rname=""; 
                  while($row=mysqli_fetch_assoc($result)){
                    if($row["rest_id"]==22){
                        $rname=$row["rest_name"];
                        echo $row["rest_name"];
                    }
                  }
                ?>">
                
                <?php
                  echo $rname;
                
                ?></a>     </h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- single-awesome-project end -->
          <!-- single-awesome-project start -->
          <div class="col-md-4 col-sm-4 col-xs-12 design photo">
            <div class="single-awesome-project">
              <div class="awesome-img">
                
                <div class="add-actions text-center">
                  <div class="project-dec">
                  
                     
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- single-awesome-project end -->
        </div>
      </div>
    </div>
  </div>
  <!-- awesome-portfolio end -->
  
  
 
  <!-- Start contact Area -->
  
 
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/venobox/venobox.min.js"></script>
  <script src="lib/knob/jquery.knob.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/parallax/parallax.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
  <script src="lib/appear/jquery.appear.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <!-- Uncomment below if you want to use dynamic Google Maps -->
  <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script> -->

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <script src="js/main.js"></script>
</body>

</html>
