<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}
?>
<!DOCTYPE html>
<head>
    <title>user login and signup</title>
    <link rel="stylesheet" type="text/css" href="lgstyle.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Room booking</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="db.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Logout <span class="sr-only">(current)</span></a>
            </li>
        </div>
</nav>
   <div class="tom">
        
        <h2>Congratulations <?php echo $_SESSION['username'];?> Your Room Is Successfully Booked.</h2>
        
   </div>


    
    <footer class="fox">
        <p class="p-3 bg-dark text-white text-center">Copyright ©1996-2022 Roombooking.com.All rights reserved.</p>
    </footer>

</body>
</html>