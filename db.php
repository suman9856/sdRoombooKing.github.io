
<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}
?>
<!DOCTYPE html>
<head>
    <title>Room booking</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Dashboard</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
               <h2 class="text-center text-success">Welcome <?php echo $_SESSION['username'];?></h2>
              </li>
            <li class="nav-item active">
                <a class="nav-link" href="about1.php">About <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item active">
                 <a class="nav-link" href="logout.php">Logout <span class="sr-only">(current)</span></a>
              </li>
            </ul>
          <form action="https://www.google.com/search" method="GET" class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" name="q" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
      <div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="index5.jpg" alt="Los Angeles" width="1100" height="500">
            <div class="carousel-caption">
              <h3>Los Angeles</h3>
              <p>We had such a great time in LA!</p>
            </div>   
          </div>
          <div class="carousel-item">
            <img src="index7.jpg" alt="Chicago" width="1100" height="500">
            <div class="carousel-caption">
              <h3>Chicago</h3>
              <p>Thank you, Chicago!</p>
            </div>   
          </div>
          <div class="carousel-item">
            <img src="index8.jpg" alt="New York" width="1100" height="500">
            <div class="carousel-caption">
              <h3>New York</h3>
              <p>We love the Big Apple!</p>
            </div>   
          </div>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>
       <section class="my-5">
        <div class="py-5">
          <h2 class="text-center">Our Services</h2>
        </div>
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
              <div class="card">
                <img class="card-img-top" src="os1.jpg" alt="Card image">
                <div class="card-body">
                  <h4 class="card-title">Rimi International Hotel</h4>
                  <p class="card-text">650m from Ujjayanta Palace</p>
                  <h3>₹ 4,750/night</h3>
                  <a href="booking.php" class="btn btn-primary">Booking Now</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
              <div class="card">
                <img class="card-img-top" src="os6.jpg" alt="Card image">
                <div class="card-body">
                  <h4 class="card-title">The Parkline</h4>
                  <p class="card-text">9.8km from maharaja Bir Bikram Airport</p>
                  <h3>₹ 2,871/night</h3>
                  <a href="booking.php" class="btn btn-primary">Booking Now</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
              <div class="card">
                <img class="card-img-top" src="os3.jpg" alt="Card image">
                <div class="card-body">
                  <h4 class="card-title">Hotel Polo Towers</h4>
                  <p class="card-text">Krishna Nagar,Agartala</p>
                  <h3>₹ 4,255/night</h3>
                  <a href="booking.php" class="btn btn-primary">Booking Now</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
              <div class="card">
                <img class="card-img-top" src="os4.jpg" alt="Card image">
                <div class="card-body">
                  <h4 class="card-title">Hotel Sonar Tori</h4>
                  <p class="card-text">9.9km from maharaja Bir Bikram Airport,Agartala</p>
                  <h3>₹ 2,758/night</h3>
                  <a href="booking.php" class="btn btn-primary">Booking Now</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
              <div class="card">
                <img class="card-img-top" src="os5.jpg" alt="Card image">
                <div class="card-body">
                  <h4 class="card-title">Sarkar Vila</h4>
                  <p class="card-text">R.k road.Mumbai</p>
                  <h3>₹ 1,259/night</h3>
                  <a href="booking.php" class="btn btn-primary">Booking Now</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
              <div class="card">
                <img class="card-img-top" src="os1.jpg" alt="Card image">
                <div class="card-body">
                  <h4 class="card-title">Woodland Park</h4>
                  <p class="card-text">480m from Ujjayanta Palace,Agartala</p>
                  <h3>₹ 2,249/night</h3>
                  <a href="booking.php" class="btn btn-primary">Booking Now</a>
                </div>
              </div>
            </div>
          </div>

        </div>

       </section>
      



     <footer>
      <p class="p-3 bg-dark text-white text-center">Copyright ©1996-2022 Roombooking.com.All rights reserved.</p>
     </footer>

    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>