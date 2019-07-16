<?php
$fullname = filter_input(INPUT_POST, 'name');
$mobile = filter_input(INPUT_POST, 'mob');
$email = filter_input(INPUT_POST, 'email');
$message = filter_input(INPUT_POST, 'message');

$servername = "localhost";
$username = "root";
$password = "";
$dbname="cicr";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else {
$sql= "INSERT INTO messages (Name, Mobile, Email, Message) values ('$fullname','$mobile','$email','$message')";
$conn->query($sql);
}


$conn->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> CICR-The Robotics Society of JIIT-128 </title>
    <link rel="shortcut icon" href="IMG/fav5.ico">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="CSS/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="CSS/bootstrap/bootstrap.css">

    <link rel="stylesheet" href="CSS/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="CSS/owl-carousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="CSS/main.css">
    <link rel="stylesheet" href="CSS/responsive.css">
    <style>
table {
  font-family: "Raleway", sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #f0c420;
}

</style>  

</head>

<body data-spy="scroll" data-target=".navbar" data-offset="65">


    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>

    <header>
        <nav class="navbar navbar-fixed-top">
            <div class="container-fluid">
                <div class="site-nav-wrapper">
                    <div class="navbar-header"><a class="navbar-brand smooth-scroll" href="#home"><img src="IMG/logo1.png" alt="logo"></a></div>

                    <div class="container">
                        <div class="collapse navbar-collapse">
                            <ul class="nav navbar-nav pull-right">
                                <li><a class="smooth-scroll" href="#home">Home</a></li>
                                <li><a class="smooth-scroll" href="#about">About Us</a></li>
                                <li><a class="smooth-scroll" href="#team">Team</a></li>
                                <li><a class="smooth-scroll" href="#gallery">Gallery</a></li>
                                <li><a class="smooth-scroll" href="#achiev">Achievements</a></li>
                                <li><a class="smooth-scroll" href="#connect">Connect</a></li>
                                <li><a class="smooth-scroll" href="#contact">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <section id="home">
        <video id="home-bg-vedio" poster="vedio/vedio.png" autoplay loop muted>
            <source src="vedio/vedio.mp4" type="video/mp4">
            <source src="vedio/vedio.ogv" type="video/ogg">
            <source src="vedio/vedio.webm" type="video/webm">
        </video>

        <div id="home-overlay"></div>

        <div id="home-content">
            <div id="home-content-inner" class="text-center">

                <div id="home-heading">
                    <h1 id="home-heading-1">CREATIVITY AND </h1><br>
                    <h1 id="home-heading-2"><span>INNOVATIVE </span></h1>
                    <h1 id="home-heading-1">CELL </h1><br>
                    <h1 id="home-heading-1">IN </h1>
                    <h1 id="home-heading-2"><span style="color:#0892d0">ROBOTICS </span></h1>
                </div>
                <div id="home-text">
                    <p>Because Robots are the future! </p>
                </div>
                <div id="home-btn">
                    <a class="btn btn-general btn-home smooth-scroll" href="#about" title="Start Now" role="button">GET SET GO</a>
                </div>
            </div>
        </div>

        <a href="#about" id="arrow-down" class="smooth-scroll">
            <i class="fa fa-angle-down"></i>
        </a>
    </section>

    <section id="about">

        <div id="about-01">
            <div class="content-box-lg">
                <div class="container">
                    <div class="row>">

                        <div class="col-md-6 col-sm-6">
                            <div id="about-left">
                                <div class="vertical-heading">

                                    <h5>About Us</h5>
                                    <h2><strong>Who</strong><br>We Are</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">

                            <div id="about-right"><br>

                                <p>Creativity and Innovative Cell in Robotics, popularly known as CICR, is the Robotics Society of Jaypee Institute of Information Technology, Sec-128, Noida. </p>

                                <p> We work to build robots from scratch. We have participated in many competitions and have won at different colleges including IITs and NITs.</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                       <div class="col-md-4 col-sm-4">

                            <div id="about-bottom">

                                <img src="IMG/logo3.jpg" alt="img" class="img-responsive">
                            </div>
                        </div>

                        <div class="col-md-8 col-sm-8">

                            <div id="about-bottom">

                                <img src="IMG/logo2.jpg" alt="img" class="img-responsive">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div id="about-02">

            <div class="container">

                <div class="row">

                    <div class="col-md-4 col-sm-4">

                        <div class="about-item text-center">

                            <i class="fa fa-rocket"></i>
                            <h3>Mission</h3>
                            <hr>
                            <p>Increase enthusiasm and knowledge towards robotics.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="about-item text-center">

                            <i class="fa fa-eye"></i>
                            <h3>Vission</h3>
                            <hr>
                            <p>To understand basic principles of Robotics and its control.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="about-item text-center">

                            <i class="fa fa-pencil"></i>
                            <h3>Passion</h3>
                            <hr>
                            <p>Winning hearts and Competitions everywhere we perform!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="team">

        <div class="content-box-md">

            <div class="container">

                <div class="row">
                    <div class="col-md-6 col-sm-6">

                        <div id="team-left">
                            <div class="vertical-heading">

                                <h5>Our Team</h5>
                                <h2>Our <strong>Talented</strong><br> Team</h2>
                            </div>
                            <p>We have a very capable team who work hard and are always there for the students.</p>
                            <p>We organise different competitions inside the campuss to help our students getting ready for the big stages! </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">

                        <div id="team-members" class="owl-carousel">
                            <div class="team-member">

                                <img src="IMG/shubham.jpg" alt="Shubham Shahi" class="img-responsive">
                                <div class="team-member-overlay">
                                    <div class="team-member-info text-center">
                                        <h6>Shubham Shahi</h6>
                                        <p>Head</p>
                                        <ul class="social-list">
                                            <li><a href="https://www.facebook.com/shubham.shahi.102"><i class="fa fa-facebook"></i></a></li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                            <div class="team-member">

                                <img src="IMG/hritik1.jpg" alt="Hritik Suman" class="img-responsive">
                                <div class="team-member-overlay">
                                    <div class="team-member-info text-center">
                                        <h6>Hritik Suman</h6>
                                        <p>Head</p>
                                        <ul class="social-list">
                                            <li><a href="https://www.facebook.com/Hritik.HX.ea.U.MAK.Me.Cmplt"><i class="fa fa-facebook"></i></a></li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                            <div class="team-member">

                                <img src="IMG/kuldeep.jpg" alt="Kuldeep Soni" class="img-responsive">
                                <div class="team-member-overlay">
                                    <div class="team-member-info text-center">
                                        <h6>Kuldeep Soni</h6>
                                        <p>Head</p>
                                        <ul class="social-list">
                                            <li><a href="https://www.facebook.com/KuldeepsoniSwapnil"><i class="fa fa-facebook"></i></a></li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                            <div class="team-member">

                                <img src="IMG/abhinav.jpg" alt="Abhinav Singhal" class="img-responsive">
                                <div class="team-member-overlay">
                                    <div class="team-member-info text-center">
                                        <h6>Abhinav Singhal</h6>
                                        <p>Coordinator</p>
                                        <ul class="social-list">
                                            <li><a href="https://www.facebook.com/profile.php?id=100006290715407"><i class="fa fa-facebook"></i></a></li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                            
                            <div class="team-member">

                                <img src="IMG/prateek1.jpg" alt="Prateek Singh" class="img-responsive">
                                <div class="team-member-overlay">
                                    <div class="team-member-info text-center">
                                        <h6>Prateek Singh</h6>
                                        <p>Coordinator</p>
                                        <ul class="social-list">
                                            <li><a href="https://www.facebook.com/profile.php?id=100002587235495"><i class="fa fa-facebook"></i></a></li>
                                        </ul>

                                    </div>
                                </div>
                            </div>

                            <div class="team-member">

                                <img src="IMG/rajesh1.jpg" alt="Rajesh Kumar" class="img-responsive">
                                <div class="team-member-overlay">
                                    <div class="team-member-info text-center">
                                        <h6>Rajesh Kumar</h6>
                                        <p>Coordinator</p>
                                        <ul class="social-list">
                                            <li><a href="https://www.facebook.com/profile.php?id=100034159121632"><i class="fa fa-facebook"></i></a></li>
                                        </ul>

                                    </div>
                                </div>
                            </div>

                            <div class="team-member">

                                <img src="IMG/yogesh.jpg" alt="Yogesh Tanwar" class="img-responsive">
                                <div class="team-member-overlay">
                                    <div class="team-member-info text-center">
                                        <h6>Yogesh Tanwar</h6>
                                        <p>Coordinator</p>
                                        <ul class="social-list">
                                            <li><a href="https://www.facebook.com/yogesh.tanwar.73345"><i class="fa fa-facebook"></i></a></li>
                                        </ul>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section id="gallery">

        <div id="about-01">
            <div class="content-box-lg">
                <div class="container">
                    <div class="row>">

                        <div class="col-md-6 col-sm-6">
                            <div id="about-left">
                                <div class="vertical-heading">

                                    <h1>Gallery</h1>
                                <h2> <strong>Memory</strong><br>Lane</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">

                            <div id="about-right">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="other">

                                            <img src="IMG/pic.jpeg" alt="pic1" class="img-responsive">
                                            <div class="other-overlay">
                                                <div class="other-info text-center">
                                                    <h6>Padma Shri Dr. Ajoy Kumar Ray</h6>
                                                    <p>Sundar Pichai's Teacher at our lab</p>
                                                    

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="other">

                                            <img src="IMG/pic2.jpg" alt="pic2" class="img-responsive">
                                            <div class="other-overlay">
                                                <div class="other-info text-center">
                                                    <h6>Our Team at IIT Delhi</h6>
                                                    <p>Won 3rd Prize</p>
                                                    

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-3 col-sm-3">

                            <div class="other">

                                <img src="IMG/pic3.jpg" alt="pic3" class="img-responsive">
                                <div class="other-overlay">
                                    <div class="other-info text-center">
                                        <h6>Event at our College</h6>
                                        <p>Winning at home is always Great!</p>
                                        

                                    </div>
                                </div>



                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3">

                            <div class="other">

                                <img src="IMG/pic41.jpeg" alt="pic4" class="img-responsive">
                                <div class="other-overlay">
                                    <div class="other-info text-center">
                                        <h6>Our Team at IIT Bombay</h6>
                                        <p>Having some good time!</p>
                                        

                                    </div>
                                </div>



                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3">

                            <div class="other">

                                <img src="IMG/pic51.jpeg" alt="pic5" class="img-responsive">
                                <div class="other-overlay">
                                    <div class="other-info text-center">
                                        <h6>One of our Project!</h6>
                                        <p>Remote Control plane</p>
                                        

                                    </div>
                                </div>



                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3">

                            <div class="other">
                                <img src="IMG/pic61.jpeg" alt="pic6" class="img-responsive">
                                <div class="other-overlay">
                                    <div class="other-info text-center">
                                        <h6>Lightening IIT Kanpur</h6>
                                        <p>1st year guys lit up the track!</p>
                                       

                                    </div>
                                </div>





                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
   <section id="achiev">
       <CENTER>
           <h1><span style="color: #f0c420">ACHIEVEMENTS</span></h1><br><br>
<table>
  <tr>
    <th>YEAR</th>
    <th>COLLEGE</th>
    <th>POSITION</th>
  </tr>
  <tr>
    <td>2017</td>
    <td>IIT BOMBAY</td>
    <td>FINALIST</td>
  </tr>
  <tr>
    <td>2018</td>
    <td>IIT DELHI</td>
    <td>5th</td>
  </tr>
  <tr>
    <td>2018</td>
    <td>IIIT DELHI</td>
    <td>FINALIST</td>
  </tr>
  <tr>
    <td>2018</td>
    <td>SHIV NADAR UNIVERSITY</td>
    <td>3rd</td>
  </tr>
  <tr>
    <td>2018</td>
    <td>JIIT 62</td>
    <td>4th</td>
  </tr>
  <tr>
    <td>2019</td>
    <td>IIT DELHI</td>
    <td>3rd</td>
  </tr>
  </table>
    <h4> *In 2018-19 we also worked on RC PLANE and were qualified to take part in BOEING NATIONAL AEROMODELING COMPETION, held at IIT Bombay and IIT Kanpur.</h4>
  

</CENTER>  
<br><br><br>
   </section>
    
    <section id="connect">
        <div class="content-box-md">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div id="contact-left">
                            <div class="vertical-heading">
                                <h1>CONNECT</h1>
                                <h2>Get In<br><strong>Touch</strong></h2><br><br><br><br><br><br>
                                <h4>We are open to everyone! If you want to join our Society or want to volunteer for our society, do write to us!  </h4>
                                <h4>Build your CV strong with us!</h4>
                                
                               
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div id="contact-right">
                          
                           <center><h1><strong>Send Message</strong></h1></center>
                            
                            <div class="container1">
                                <form method="post" action="index.php">
                                    <label for="name">Name: </label>
                                    <input type="text" id="name" name="name" placeholder="Your Name.." required>
                                    <div class="col-md-6 col-sm-6">
                                    <label for="mobile">Mobile no.: </label>
                                    <input type="text" id="mob" name="mob" placeholder="9876543210" required>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                    <label for="email">Email ID: </label>
                                    <input type="text" id="email" name="email" placeholder="sam@email.com" required>
                                    </div>
                                    <label for="subject">Message:</label>
                                    <textarea id="message" name="message" placeholder="Write something.." style="height:150px" required></textarea>
                                    <center>
                                    <input type="submit" value="Submit">
                                    </center>
                                </form>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact">

        <div id="about-02">
            <div class="content-box-md">
                <div class="container">
                    <div class="row>">

                        <div class="col-md-6 col-sm-6">
                            <div id="about-left">

                                <div class="vertical-heading">

                                    <h1>Contact Us</h1>
                                    <h4> <strong>Club: </strong>CICR [ROBOTICS] <br></h4>

                                    <h4> <strong>Mb. </strong>+91 8299393376<br></h4>

                                    <h4> <strong>Email ID. </strong>roboticsatjiit@gmail.com </h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div id="about-right1">
                                <h3>Address<br></h3>
                                <p>Jaypee Institute of Information Technology,<br>Sector- 128, Noida, U.P.<br>Pin: 201301</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    
    <!-- gmap-->
    <section id="google-map">
        <div class="container-fluid">
            <div class="row">
                <div id="map"></div>
            </div>
        </div>
    </section>

    <footer class="text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <p>
                        Copyright &copy; 2019 All Right Resered By <span> CICR</span>
                    </p>
                </div>
                <div class="col-md-6 col-sm-6">
                    <p>
                        Follow us at  <a href="https://www.facebook.com/RobotixJ128/"><i class="fa fa-facebook"></i></a>
                    </p>
                </div>
            </div>
        </div>
        <a href="#home" id="back-to-top" class="btn btn-sm btn-red btn-back-to-top smooth-scroll" title="home" role="button">
            <i class="fa fa-angle-up"></i>
        </a>
    </footer>

    <script src="JS/jquery.js"></script>
    <sript src="JS/bootstrap/bootstrap.js"></sript>
    <script src="JS/owl-carousel/owl.carousel.min.js"></script>
    <script src="JS/easing/jquery.easing.1.3.js"></script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAlXNZD2SQB4V9nepgsP_AzieLe1IweQN0"></script>
    <script src="JS/main.js"></script>
</body>

</html>