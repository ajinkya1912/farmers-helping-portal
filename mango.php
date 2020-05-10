<?php
session_start();
if(!isset($_SESSION['username']))
header('location:login.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>आंबा</title>
    <meta charset="utf-8" content="width=device-width, initial-scale=1" name="viewport">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/mango.css">
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
                                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"><b><?php  echo $_SESSION['username'];?></b> </span><span class="caret"></span></a>
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
                    <h2 class="text-center" >मुख्यपृष्ठावर आपले स्वागत आहे<br><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"><b style="color: green;"><?php  echo $_SESSION['username'];?></b> </span></a></h2>
                    <h2>
                        आंबा
                    </h2>
                    <h3>आंबा:  Mangifera indica L.; Anacardiaceae</h3>
                    <p class="para">
 
भाग 1 फळे<br>
 

<b>वाण:</b> नीलम, बंगलोरा, अल्फोन्सो, रुमानी, बंगनापल्ली, कालेपड, पीटर, पीकेएम १, पीकेएम २, सेंदुरा, जहांगीर, मुलगॉआ, हिमाउद्दीन, पैयूर १, मल्लिका, आम्रपाली आणि सालेम बंगलोरा, अर्का अनमोल, अर्का अरुणा, अर्का नीलकिरण पुणे.<br>

<b>प्रक्रियेचे प्रकारः</b> अल्फोन्सो, बंगनापल्ली, तोतापुरी निर्यात वाण: अल्फोन्सो, बंगनापल्ली, सेंदुरा
<br>
<b>माती आणि हवामान:</b> चांगली निचरा असलेली लाल चिकणमाती माती श्रेयस्कर आहे. पीएच श्रेणी 6.5 ते 8.
<br>
<b>लागवड हंगाम:</b> जुलै ते डिसेंबर
<br>
<b>लागवड करणारी सामग्री:</b> दृष्टिकोन, मऊ लाकूड किंवा icपिकॉटिल कलम याद्वारे प्रचारित रोपे आकाराचे कलम वापरा.
<br>
<b>फील्ड तयार करणे:</b> 1 मीटर x 1 मीटर x 1 मीटर आकाराचे खड्डे खणणे. 10 किलो एफवायएम आणि 100 ग्रॅम लिंडेन 1.3% धूळ प्रति खड्डा मिसळून टॉपसॉइलसह भरा.
<br>
<b>लागवड:</b> खड्ड्यांच्या मध्यभागी ग्राफ्ट्स लावा जेणेकरून पृथ्वीचा चेंडू अखंड राहील आणि ग्राफ्ट युनियन तळमजलापासून 15 सेमी वर ठेवावे. लागवड झाल्यानंतर ताबडतोब झाडे लावा आणि पाणी द्या.
<br>
<b>अंतरः</b> आवश्यकतेनुसार खालीलपैकी कोणतेही अंतर स्वीकारा.</br>
१. पारंपारिक लागवडीच्या पध्दतीनुसार: एकतर 7-10 मीटर<br>
२. उच्च घनतेची लागवड: m मीटर x m मीटर (plants०० झाडे / हेक्टर)
Double. दुहेरी हेज पंक्ती प्रणाली: दुहेरी ओळीत अंतर m मीटर x m मीटर आणि सक्सेस डबल पंक्तींमध्ये (२66 झाडे / हेक्टर) दरम्यान 10 मीटर अंतर ठेवा.<br>

<b>सिंचन: </b>स्थापनेपर्यंत नियमित पाणी देणे. बागायती परिस्थितीत लागवडीसाठी सिंचनाची ठिबक पध्दतीचा अवलंब करा.
<br>
<b>आंतरपीक:</b> शेंगदाणे, भाज्या, शेंगदाणे इत्यादी अल्प कालावधीची पिके पूर्व-वयाच्या काळात वाढवता येतात.<br>
<b>खते आणि खते (प्रति झाड कि.ग्रा.)</b><br>
<img src="mango1.png"><br>
सप्टेंबर - ऑक्टोबरमध्ये, परिघाच्या पानांच्या टोकापर्यंत आणि खोड्यापासून 45 ते 90 सेमी अंतरावर खते आणि खते वापरली जाऊ शकतात.

<b>एचडीपी अंतर्गत फर्गिटेशन तंत्रज्ञान</b><br>
एचडीपी अंतर्गत 1.0: 0.5: 1.0 किलो एनपीके / बीयरिंग ट्री / वर्षाचे वेळापत्रक लागू करा, ठिबक फ्रिटीगेशनद्वारे खालील वेळापत्रक अवलंबुन<br>
<img src="mango2.jpg"><br></p>
<p class="para">
<ul class="para">
    <li>प्रत्येक टप्प्यावर, वरील वेळापत्रक सहा किंवा अधिक डोसमध्ये विभागले जावे आणि आठवड्याच्या अंतराने ते लागू केले जावे.</li><br>
    <li>फुलांच्या हंगामापूर्वी तणाव निर्माण करण्यासाठी 30 दिवस सिंचन आणि किण्वन टाळा; फुलांच्या सुरू होताच पुन्हा सुरु करा.</li>
</ul>
</p>
                </div>
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