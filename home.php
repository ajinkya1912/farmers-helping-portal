<?php
session_start();
if(!isset($_SESSION['username']))
header('location:login.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home Page User</title>
    <meta charset="utf-8" content="width=device-width, initial-scale=1" name="viewport">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/hom.css">
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
                    <div class="col-md-9">
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
                                <li><a href="faq.html">FAQ</a></li>
                                <li><a href="login.php">Login</a></li>
                                <li><a href="regiform.php">Farmer Registration</a></li>
                                <li class="active"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"><b><?php  echo $_SESSION['username'];?></b> </span><span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="logout.php">LogOut</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>   
                </div>
            </div>
        </nav>
    </div>
    <section>
        <div class="col-md-12">
            <div class="container">
                <div class="row">
                    <h2 class="text-center" >मुख्यपृष्ठावर आपले स्वागत आहे<br><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"><b style="color: green;"><?php  echo $_SESSION['username'];?></b> </span></a></h2><br><br>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="col-md-6">
            <div class="roww">
                <a href="tomato.php"><button class="btn-success">टोमॅटो</button></a>
                <br>
                <br>
                <a href="mango.php"><button class="btn-danger" id="btn">आंबा</button></a>
                <br>
                <br>
                <a href="tomato.php"><button class="btn-success">कांदा</button></a>
                <br>
                <br>
                <a href="tomato.php"><button class="btn-danger" id="btn">गाजर</button></a>
                <br>
                <br>
                <a href="tomato.php"><button class="btn-success" id="btn">टोमॅटो</button></a>
                <br>
                <br>
            </div>
            
        </div>
        <div class="col-md-6">
            <div class="roww">
                <a href="tomato.php"><button class="btn-success">गहू</button></a>
                <br>
                <br>
                <a href="tomato.php"><button class="btn-danger" id="btn">अननस</button></a>
                <br>
                <br>
                <a href="tomato.php"><button class="btn-success">सोयाबीन</button></a>
                <br>
                <br>
                <a href="tomato.php"><button class="btn-danger" id="btn">बाजरी</button></a>
                <br>
                <br>
                <a href="tomato.php"><button class="btn-success" id="btn">गवार</button></a>
                <br>
                <br>
            </div>
            
        </div>
        

    </section>

      <!-- Footer -->
    <footer class="page-footer font-small blue pt-4" >

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