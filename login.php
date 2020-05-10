<!DOCTYPE html>
<html>
<head>
    <title>Log In</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/log1.css">
    <script src="js/jquery.js"></script>
</head>
<body class="body">
    <div id="home" class="wrapper">
        <header>
            <div class="container">
                <div class="row">
                    <div class="header-top">
                        <div class="col-md-6" id="logo">
                            <a class="logo-img" href="index.php"><img class="img-logo" src="log.png" alt="logo"></a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <nav class="navbar navbar-inverse Navbar">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="service.html">Services</a></li>
                                
                                <li class="active"><a href="login.php">Login</a></li>
                                <li><a href="regiform.php">Farmer Registration</a></li>
                            </ul>
                        </div>
                    </div>   
                </div>
            </div>
        </nav>
    </div>
    <div class="cont">
    	<div class="row">
            <div class="col-lg-8">
                <div class="">
                    <h2 class="h2">LogIn Form</h2>
                    <hr class="dotted">
                    <form action="validation.php" method="post" class="form">
                        <div class="form-group">
                            <label>नाव:</label>
                            <input type="text" name="user" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Password:</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <button type="submit" class="btn-success" id="btn1" style="color: black;">Login</a></button>
                        <button  class="btn-success" id="btn1"><a href="forgot.html" style="color: black;">Forgot Password?</a></button>
                    </form>
                </div>
                <br>
                
            </div>
            
        </div>
    </div>
    <!-- Footer -->
    <footer class="page-footer font-small blue pt-4" id="footer">

      <!-- Footer Links -->
      <div class="container-fluid text-center text-md-left">

      </div>
      <!-- Footer Links -->

      <!-- Copyright -->
      <hr>
      <div class="footer-copyright text-center py-3" style="background-color: black; padding-top: 10px;"><p style="color: white;">© 2019 Copyright:
        <a href="https://mdbootstrap.com/education/bootstrap/"> index.html</a></p>
      </div>
      <!-- Copyright -->

    </footer>
    <!-- Footer -->

    
</body>
</html>