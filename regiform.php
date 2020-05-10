<!--Registration Form Code-->

<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/regiform.css">
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
                    
                                <li><a href="login.php">Login</a></li>
                                <li class="active"><a href="regiform.php">Farmer Registration</a></li>
                            </ul>
                        </div>
                    </div>
                        
                </div>
            </div>
        </nav>
    </div>

    
    <div class="col-lg-6">   
        <div class="cont"><br>
            <!--Registration Form-->
            <h1 class="regiii">नोंदणी</h1>
            <hr class="hr">
            <form action="regi.php"  onsubmit="return validation()"  method="post">
                <!--Name-->
                <div class="form-group">
                    <label>नाव:<span class="required">*</span></label>
                    <input type="text" name="user" class="form-control" id="user" autocomplete="off">
                    <span id="username" class="text-danger font-weight-bold span"></span>
                </div>
                <hr class="dotted">
                <!--Pass-->    
                <div class="form-group">
                    <label>Password:<span class="required">*</span></label>
                    <input type="password" name="password" class="form-control"  id="pass" autocomplete="off">
                    <span id="passwords" class="text-danger font-weight-bold span"></span>
                </div>
                <hr class="dotted">
                <!--Confirm Pass-->
                <div class="form-group">
                    <label>Confirm Password:<span class="required">*</span></label>
                    <input type="password" name="conpass" class="form-control" id="conpass" autocomplete="off">
                    <span id="conpasswords" class="text-danger font-weight-bold span"></span>
                </div>
                <hr class="dotted">
                <!--Monile Number-->

                <div class="form-group">
                    <label>मोबाइल नंबर:<span class="required">*</span></label>
                    <input type="text" name="mobile" class="form-control" id="mobileNumber" autocomplete="off">
                    <span id="mobileno" class="text-danger font-weight-bold span"></span>

                </div>
                <hr class="dotted">
                <!--Email-->

                <div class="form-group">
                    <label>ई-मेल:<span class="required">*</span></label>
                    <input type="text" name="email" class="form-control" id="emails" autocomplete="off">
                    <span id="emailids" class="text-danger font-weight-bold span"></span>
                </div>
                <hr class="dotted">
                <!--Address-->
                <div class="form-group">
                    <label>पत्ता:<span class="required">*</span></label>
                    <input type="text" name="addr" class="form-control" id="addr" autocomplete="off">
                    <span id="addrs" class="text-danger font-weight-bold span"></span>
                </div>
                <hr class="dotted">
                <!--State-->
                <div class="form-group">
                    <label>राज्य:<span class="required">*</span></label>
                    <input type="text" name="state" class="form-control"  id="state" autocomplete="off">
                    <span id="states" class="text-danger font-weight-bold span"></span>
                </div>
                <hr class="dotted">
                <!--District-->
                <div class="form-group">
                    <label>जिल्हा:<span class="required">*</span></label>
                    <select name="district" class="form-control"  id="dist">
                        <option value="">निवडा</option>
                        <option value="dist1" >अहमदनगर</option>
                        <option value="dist2" >अकोला</option>
                        <option value="dist3">अमरावती</option>
                        <option value="dist4">औरंगाबाद</option>
                        <option value="dist5">बीड</option>
                        <option value="dist6">भंडारा</option>
                        <option value="dist7">बुलढाणा</option>
                        <option value="dist8">चंद्रपूर</option>
                        <option value="dist9">धुळे</option>
                        <option value="dist10">गडचिरोली</option>
                        <option value="dist11">गोंदिया</option>
                        <option value="dist12">हिंगोली  </option>
                        <option value="dist13">जलगाव</option>
                        <option value="dist14">जालना</option>
                        <option value="dist15">कोल्हापूर</option>
                        <option value="dist16">लातूर </option>
                        <option value="dist17">मुंबई शहर</option>
                        <option value="dist18"> मुंबई उपनगरी</option>
                        <option value="dist19">नागपूर </option>
                        <option value="dist20">नांदेड</option>
                        <option value="dist21">नंदुरबार</option>
                        <option value="dist22">नासिक</option>
                        <option value="dist23">उस्मानाबाद </option>
                        <option value="dist24">पालघर</option>
                        <option value="dist25">परभणी</option>
                        <option value="dist26">पुणे</option>
                        <option value="dist27">रायगड</option>
                        <option value="dist28">रत्नागिरी</option>
                        <option value="dist29">सांगली</option>
                        <option value="dist30">सातारा</option>
                        <option value="dist33">सिंधुदुर्ग</option>
                        <option value="dist32">सोलापुर</option>
                        <option value="dist33">ठाणे</option>
                        <option value="dist34">वर्धा</option>
                        <option value="dist35">वाशिम</option>
                        <option value="dist36">यवतमाळ</option>
                    </select>
                    <span id="district" class="text-danger font-weight-bold"></span>
                </div>
                <hr class="dotted">
                <!--PinCode-->
                <div class="form-group">
                    <label>पिन कोड:</label>
                    <input type="text" name="pin" class="form-control"  id="pin" autocomplete="off">
                    <span id="zipcode"  class="text-danger font-weight-bold"></span>
                </div>
                <hr class="dotted">
                <!--Submit-->
                <div>
                    <span class="">
                        <input type="submit" name="submit" value="submit" class="button">
                        <input type="reset" name="reset" value="reset" class="button">
                    </span>
                </div>
                <br>
            </form>
            
        </div>
        <!--Registration form complete-->
    </div>
    <!--Javascript Validation-->

    <script type="text/javascript">
        
        function validation() {
            var user = document.getElementById('user').value;
            var pass = document.getElementById('pass').value;
            var con = document.getElementById('conpass').value;
            var mobile = document.getElementById('mobileNumber').value; 
            var email = document.getElementById('emails').value;
            var addr = document.getElementById('addr').value;
            var state = document.getElementById('state').value;
            var dist = document.getElementById('dist').value;
            var pin = document.getElementById('pin').value;

            if (user=="") {
                document.getElementById('username').innerHTML = "** कृपया नाव फील्ड भरा";
                return false;
            }
            
            

            if ((user.length<=3)  || (user.length>20)) {
                document.getElementById('username').innerHTML = " **वापरकर्ता लांबी वैध नाही";
                return false;
            }
            if (!isNaN(user)){
                document.getElementById('username').innerHTML = " **नावात केवळ वर्ण आहेत.";
                return false; 
            }




            if (pass=="") {
                document.getElementById('passwords').innerHTML = " **कृपया Password फील्ड भरा";
                return false;
            }
            if ((pass.length<6)){
                document.getElementById('passwords').innerHTML = " **Password लांबी वैध नाही";
                return false;
            }
            if (isNaN(pass)){
                document.getElementById('passwords').innerHTML = " **Password फक्त क्रमांक आहेत";
                return false; 
            }

            if (con=="") {
                document.getElementById('conpasswords').innerHTML = " **कृपया Comfirm Password फील्ड पुन्हा भरा";
                return false;
            }
            if (pass!=con) {
                document.getElementById('conpasswords').innerHTML ="**Password जुळत नाही"
                return false;
            }


            if (mobile=="") {
                document.getElementById('mobileno').innerHTML = " **कृपया मोबाइल नंबर फील्ड भरा";
                return false;
            }
            if (mobile.length!=10) {
                document.getElementById('mobileno').innerHTML = " **मोबाइल नंबर लांबी वैध नाही";
                return false;
            }
            if (isNaN(mobile)){
                document.getElementById('mobileno').innerHTML = " **मोबाईल नंबरमध्ये फक्त क्रमांक आहेत";
                return false; 
            }

            if (email=="") {
                document.getElementById('emailids').innerHTML = " **कृपया ई-मेल आयडी फील्ड भरा";
                return false;
            }
            if (email.length<10) {
                document.getElementById('emailids').innerHTML = " **अवैध ईमेल आयडी";
                return false;
            }
            if (email.indexOf('@')<=0) {
                document.getElementById('emailids').innerHTML = " **अवैध ईमेल आयडी";
                return false;
            }




            if (addr=="") {
                document.getElementById('addrs').innerHTML = " **कृपया पत्ता फील्ड भरा";
                return false;
            }
            if (!isNaN(addr)) {
                document.getElementById('addrs').innerHTML = " **अवैध पत्ता";
                return false;
            }

            if (state=="") {
                document.getElementById('states').innerHTML = " **कृपया राज्य फील्ड भरा";
                return false;
            }
            if (state!="Maharashtra") {
                document.getElementById('states').innerHTML = " **तुमचे राज्य फक्त महाराष्ट्र असावे";
                return false;
            }

            if (dist=="") {
                document.getElementById('district').innerHTML = " **कृपया अचूक जिल्हा निवडा";
                return false;
            }


            if (isNaN(pin)){
                document.getElementById('zipcode').innerHTML ="**केवळ क्रमांक आहेत!";
                return false;
            }
            if ((pin.length!=6)){
                document.getElementById('zipcode').innerHTML ="**अवैध पिनकोड!";
                return false;
            }
            



        }

    </script>
    <!--Validation Complete-->
    <!--Video-->

   
    
    <!-- Footer -->
    <footer class="page-footer font-small blue pt-4">

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