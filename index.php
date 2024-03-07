<?php

$xiao = "https://genshin.jmp.blue/characters/xiao";
$nahida = "https://genshin.jmp.blue/characters/nahida";
$fischl = "https://genshin.jmp.blue/characters/fischl";


$xiao_json = file_get_contents($xiao);
$xiao_data = json_decode($xiao_json, true);
$nahida_json = file_get_contents($nahida);
$nahida_data = json_decode($nahida_json, true);
$fischl_json = file_get_contents($fischl);
$fischl_data = json_decode($fischl_json, true);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
    
<style>
 .video_background {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: -1;
}
  </style>
  <title>Genshin Impact</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>

<body>
  <!-- <div class="whole_body"> -->
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.php">
            <span>
              Genshin Impact
            </span> 
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ">
              <li class="nav-item active">
                <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="service.php"> About</a>
            </ul>
            <div class="quote_btn-container">
              <a href="" class="quote_btn">
                Get A Quote
              </a>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <video autoplay muted loop id="video_background">
    <source src="./images/video.mp4" type="video/mp4">
    Your browser does not support HTML5 video.
  </video>
  <!-- service section -->
  <section class="service_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>  
          Genshin Impact ShowCase
        </h2>
        <p>
        Genshin Impact is a fantasy adventure game where you can explore seven nations, meet diverse characters, and fight powerful enemies.
        </p>
      </div>
      <div class="row justify-content-center">
        <?php
          echo "<div class='col-md-6 col-lg-3'>
          <div class='box'>
            <div class='img-box'>
              <img src='https://genshin.jmp.blue/characters/xiao/icon' alt=''>
            </div>
            <div class='detail-box'>
              <h5>
                {$xiao_data['name']}
              </h5>
              <p>
              {$xiao_data['weapon']}
              </p>
              <p><i>
              {$xiao_data['vision']}
              </i></p>
              <a href='about.php?name=xiao'>
                <span>
                  Read More
                </span>
                <i class='fa fa-long-arrow-right' aria-hidden='true'></i>
              </a>
            </div>
          </div>
        </div>";
        echo "<div class='col-md-6 col-lg-3'>
          <div class='box'>
            <div class='img-box'>
              <img src='https://genshin.jmp.blue/characters/nahida/icon-big' alt=''>
            </div>
            <div class='detail-box'>
              <h5>
                {$nahida_data['name']}
              </h5>
              <p>
              {$nahida_data['weapon']}
              </p>
              <p><i>
              {$nahida_data['vision']}
              </i></p>
              <a href='about.php?name=nahida'>
                <span>
                  Read More
                </span>
                <i class='fa fa-long-arrow-right' aria-hidden='true'></i>
              </a>
            </div>
          </div>
        </div>";
        echo "<div class='col-md-6 col-lg-3'>
          <div class='box'>
            <div class='img-box'>
              <img src='https://genshin.jmp.blue/characters/fischl/icon' alt=''>
            </div>
            <div class='detail-box'>
              <h5>
              {$fischl_data['name']}
              </h5>
              <p>
              {$fischl_data['weapon']}
              </p>
              <p><i>
              {$fischl_data['vision']}
              </i></p>
              <a href='about.php?name=fischl'>
                <span>
                  Read More
                </span>
                <i class='fa fa-long-arrow-right' aria-hidden='true'></i>
              </a>
            </div>
          </div>
        </div>";
      
      

        ?>

        </div>
  </section>
  <!-- end service section -->

  <!-- about section -->

  
  <!-- end about section -->

  <!-- case section -->

  <!-- end case section -->

  <!-- client section -->
  <?php
  echo "<section class='client_section '>
    <div class='container'>
      <div class='heading_container heading_center'>
        <h2>
         The Title ...
        </h2>
      </div>
    </div>
    <div id='customCarousel2' class='carousel slide' data-ride='carousel'>
      <div class='carousel-inner'>
        <div class='carousel-item active'>
          <div class='container'>
            <div class='row'>
              <div class='col-md-10 mx-auto'>
                <div class='box'>
                  <div class='img-box'>
                    <img src='https://genshin.jmp.blue/characters/xiao/icon-big' alt=''>
                  </div>
                  <div class='detail-box'>
                    <div class='client_info'>
                      <div class='client_name'>
                        <h5>
                          Xiao
                        </h5>
                        <h6>
                          Customer
                        </h6>
                      </div>
                      <i class='fa fa-quote-left' aria-hidden='true'></i>
                    </div>
                    <p>
                    {$xiao_data['description']}
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class='carousel-item'>
          <div class='container'>
            <div class='row'>
              <div class='col-md-10 mx-auto'>
                <div class='box'>
                  <div class='img-box'>
                    <img src='https://genshin.jmp.blue/characters/nahida/icon-big' alt=''>
                  </div>
                  <div class='detail-box'>
                    <div class='client_info'>
                      <div class='client_name'>
                        <h5>
                          Nahida
                        </h5>
                        <h6>
                          Customer
                        </h6>
                      </div>
                      <i class='fa fa-quote-left' aria-hidden='true'></i>
                    </div>
                    <p>
                    {$nahida_data['description']}
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class='carousel-item'>
          <div class='container'>
            <div class='row'>
              <div class='col-md-10 mx-auto'>
                <div class='box'>
                  <div class='img-box'>
                    <img src='https://genshin.jmp.blue/characters/fischl/icon-big' alt=''>
                  </div>
                  <div class='detail-box'>
                    <div class='client_info'>
                      <div class='client_name'>
                        <h5>
                          Fischl
                        </h5>
                        <h6>
                          Customer
                        </h6>
                      </div>
                      <i class='fa fa-quote-left' aria-hidden='true'></i>
                    </div>
                    <p>
                    {$fischl_data['description']}
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <ol class='carousel-indicators'>
        <li data-target='#customCarousel2' data-slide-to='0' class='active'></li>
        <li data-target='#customCarousel2' data-slide-to='1'></li>
        <li data-target='#customCarousel2' data-slide-to='2'></li>
      </ol>
    </div>
  </section>"
?>


  <!-- contact section -->


  <!-- end contact section -->

  <div class="footer_container">
    <!-- info section -->

    <section class="info_section ">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3 ">
            <div class="info_detail">
              <h4>
                Genshin Impact
              </h4>
              <p>
                Necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful
              </p>
            </div>
          </div>
          <div class="col-md-6 col-lg-2 mx-auto">
            <div class="info_link_box">
              <h4>
                Links
              </h4>
              <div class="info_links">
                <a class="" href="index.php">
                  Home
                </a>
                <a class="" href="sevice.php">
                  About
                </a>
                <a class="" href="service.html">
                  <!-- Services -->
                </a>
                <a class="" href="contact.html">
                  <!-- Contact Us -->
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 ">
            <h4>
              Subscribe
            </h4>
            <form action="#">
              <input type="text" placeholder="Enter email" />
              <button type="submit">
                Subscribe
              </button>
            </form>
          </div>
          <div class="col-md-6 col-lg-3 mb-0 ml-auto">
            <div class="info_contact">
              <h4>
                Address
              </h4>
              <div class="contact_link_box">
                <a href="">
                  <i class="fa fa-map-marker" aria-hidden="true"></i>
                  <span>
                    Location
                  </span>
                </a>
                <a href="">
                  <i class="fa fa-phone" aria-hidden="true"></i>
                  <span>
                    Call +01 1234567890
                  </span>
                </a>
                <a href="">
                  <i class="fa fa-envelope" aria-hidden="true"></i>
                  <span>
                    demo@gmail.com
                  </span>
                </a>
              </div>
            </div>
            <div class="info_social">
              <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- end info section -->
    <!-- </div> -->
    <!-- footer section -->
    <footer class="footer_section">
      <div class="container">
        <p>
          &copy; <span id="displayYear"></span> All Rights Reserved By
          <a href="https://html.design/">Free Html Templates</a>
        </p>
      </div>
    </footer>
    <!-- footer section -->
  </div>

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <script src="js/custom.js"></script>
  <!-- Google Map --> -->
  <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script> -->
  <!-- End Google Map

</body>

</html>