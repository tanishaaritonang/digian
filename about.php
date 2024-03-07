<?php
$name = $_GET['name'];

$url = "https://genshin.jmp.blue/characters/$name";

$json = file_get_contents($url);
$data = json_decode($json, true);


$json_data = file_get_contents('weapons.json');
$weapons_data = json_decode($json_data, true);

$name = isset($_GET['name']) ? $_GET['name'] : null;
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

  <title>Digian</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />

  
  <!-- Custom styles for this template -->
  <link href="table.css" rel="stylesheet" />

  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <style>

.row p{
  font-family: "Poppins", sans-serif;
      font-size : 25px;
    }
.row h2, h3{
  font-size : 40px;
  font-family: "Poppins", sans-serif;
}
.row td, tr{
  font-family: "Poppins", sans-serif;
}
.details-table {
    background-color: black;
}
@keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }

    /* Add hover effect for images */
    .detail-box img:hover {
        transform: scale(1.4); /* Scale image on hover */
    }

    /* Add animation to tables */
    .about_section table {
        animation: fadeIn 0.9s ease-in-out; /* Apply fade-in animation */
    }
        /* Add animation to tables */
        .heading_container h2 {
        animation: fadeIn 0.9s ease-in-out; /* Apply fade-in animation */
    }
    .passive h3, img{
        animation: fadeIn 0.9s ease-in-out; /* Apply fade-in animation */
    }
    .constellation h3,img {
        animation: fadeIn 0.9s ease-in-out; /* Apply fade-in animation */
    }

    /* Style for the entire section */
    .about_section {
        /* background-color: grey; Set background color */
        color: white; /* Set text color */
    }
    .video_background {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: -1;
}
.poppins-medium {
  font-family: "Poppins", sans-serif;
  font-weight: 500;
  font-style: normal;
}
tbody td p, th{
  font-family: "Poppins", sans-serif;
}
tbody th{
  font-size: 26px;
}

</style>

</head>

<body class="sub_page">

  <div class="hero_area">
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
          <div class="collapse navbar-collapse" id="navbarSupportedContent" >
            <ul class="navbar-nav  ">
              <li class="nav-item ">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="service.html">About</a>
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
  </div>

  <!-- about section -->

  <section class="about_section layout_padding layout_margin">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="detail-box">
                    <div class="heading_container">
                        <h2>
                            <?= $data['name']; ?>
                        </h2>
                    </div>
                    <table>
                        <tbody>
                            <tr>
                                <td>Title:</td>
                                <td><?= $data['title']; ?></td>
                            </tr>
                            <tr>
                                <td>Vision:</td>
                                <td><?= $data['vision']; ?></td>
                            </tr>
                            <tr>
                                <td>Weapon:</td>
                                <td><?= $data['weapon']; 
                                if ($name) {
                                  // Decode JSON data
                                  $weapons_data = json_decode($json_data, true);
                              
                                  // Filter data for the provided name
                                  $filtered_data = array_filter($weapons_data, function($character) use ($name) {
                                      return $character['name'] === $name;
                                  });
                              
                                  // Check if there is data for the provided name
                                  if (!empty($filtered_data)) {
                                      // Display weapons data for the provided name
                                      foreach ($filtered_data as $character) {
                                          foreach ($character['weapons'] as $index => $weapon) {
                                            echo "<img src='" . $weapon['image'] . "' width='100' height='100'>";

                                          }
                                      }
                                  } else {
                                      echo "No data found for $name.";
                                  }
                              } else {
                                  echo "No name provided in the URL parameter.";
                              }
                              
                                ?></td>
                            </tr>
                            <tr>
                                <td>Gender:</td>
                                <td><?= $data['gender']; ?></td>
                            </tr>
                            <tr>
                                <td>Nation:</td>
                                <td><?= $data['nation']; ?></td>
                            </tr>
                            <tr>
                                <td>Affiliation:</td>
                                <td><?= $data['affiliation']; ?></td>
                            </tr>
                            <tr>
                                <td>Description:</td>
                                <td><?= $data['description']; ?></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="passive">
                        
                        <div style='display: flex;'>
                            <?php
                            // Loop to display passive skill images
                            for ($i = 1; $i <= 5; $i++) {
                                echo "<img src='https://paimon.moe/images/skills/$name/talent_$i.png' style='margin-right: 10px;'>";
                            }
                            ?>
                        </div>
                    </div>
                    <div class="constellation">
                        
                        <div style='display: flex;'>
                            <?php
                            // Loop to display constellation images
                            for ($i = 1; $i <= 5; $i++) {
                                echo "<img src='https://paimon.moe/images/skills/$name/constellation_$i.png' style='margin-right: 10px;'>";
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="img-box">
                    <?= "<img src='https://paimon.moe/images/characters/full/$name.png' alt=''>" ?>
                </div>
            </div>
        </div>
    </div>
</section>

  <!-- Table Section -->
  <h2>SKILLTALENTS</h2>
    <div class="table-wrapper">
        <table class="fl-table">
            <thead>
            <tr>
                <th>SkillTalents</th>
                <th>Upgrades</th>
            </tr>
            </thead>
            <tbody>
              <?php
              foreach($data['skillTalents'] as $skillTalents){
                echo "<tr>";
                echo '<td width="100px" style="width:100px">';
                echo "<img src='https://paimon.moe/images/skills/$name/talent_1.png'>";
                echo "<img src='https://paimon.moe/images/skills/$name/talent_2.png'>";
                echo "<img src='https://paimon.moe/images/skills/$name/talent_3.png'>";

                echo "<p>Name:  {$skillTalents['name']}</p>";
                echo "<p>Unlock: {$skillTalents['unlock']}</p>";
                echo "</td>";
                echo "<td>";
              foreach($skillTalents['upgrades'] as $upgrades){
                echo "<p> {$upgrades['name'] }: {$upgrades['value']}</p>";
              }
                echo "</td>";
                echo "</tr>";
              }
              ?>
            <tbody>

            <thead>
            <tr>
                <th>PassiveTalents</th>
            </tr>
            </thead>
            <tbody>
              <?php
              foreach($data['passiveTalents'] as $passiveTalents){
              echo "<tr>";
              echo '<td width="100px" style="width:100px">';
              echo "<img src='https://paimon.moe/images/skills/$name/talent_4.png'>";
              echo "<img src='https://paimon.moe/images/skills/$name/talent_5.png'>";
              echo "<img src='https://paimon.moe/images/skills/$name/talent_6.png'>";
              
              echo "<p>Name:  {$passiveTalents['name']}</p>";
              echo "<p>Unlock: {$passiveTalents['unlock']}</p>";
              echo "<p>Description: {$passiveTalents['description']}</p>";
              echo "</td>";
              }
              ?>
              
            <tbody>

            <tbody>
            <thead>
            <tr>
                <th>constellations</th>
            </tr>
            </thead>
            <tbody>
              <?php
              foreach($data['constellations'] as $constellations){
              echo "<tr>";
              echo '<td width="100px" style="width:100px">';
              echo "<img src='https://paimon.moe/images/skills/$name/constellation_1.png'>";
              echo "<img src='https://paimon.moe/images/skills/$name/constellation_2.png'>";
              echo "<img src='https://paimon.moe/images/skills/$name/constellation_3.png'>";
              
              echo "<p>Name:  {$constellations['name']}</p>";
              echo "<p>Unlock: {$constellations['unlock']}</p>";
              echo "<p>Description: {$constellations['description']}</p>";
              echo "</td>";
              }
              ?>
        </table>
      
    </div>
  <!-- end table section -->

  <!-- end about section -->

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
                <a class="" href="index.html">
                  Home
                </a>
                <a class="" href="about.html">
                  About
                </a>
                <a class="" href="service.html">
                  Services
                </a>
                <a class="" href="contact.html">
                  Contact Us
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
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
  <!-- End Google Map -->

</body>

</html>