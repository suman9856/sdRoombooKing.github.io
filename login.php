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
              <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
            </li>
        </div>
</nav>
    <div class="container">
        <div class="login-box">
         <div class="row">
            <div class="col-md-6 login-left">
                <h2>Login Form</h2>
                <form action="validation.php" method="post">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="user" class="form-control" require>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" require>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
            <div class="col-md-6 login-right">
                <h2>signin Form</h2>
                <form action="signin.php" method="post">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="user" class="form-control" require>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" require>
                    </div>
                    <button type="submit" class="btn btn-primary">signin</button>
                </form>

            </div>

         </div>
        </div>

    </div>
    <footer class="fox">
        <p class="p-3 bg-dark text-white text-center">Copyright ©1996-2022 Roombooking.com.All rights reserved.</p>
       </footer>

</body>
</html>