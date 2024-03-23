<?php
require 'php_mailer/mail.php';
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tara Anand Tutorials</title>
  <meta name="description" content="">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
 <meta name="viewport" content="initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/imagehover.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">



  <style>
      .blink {
      animation: blinker 0.94s linear infinite;
      color: red;
      font-size: 30px;
      font-weight: bold;
      font-family: sans-serif;
      }
      @keyframes blinker {  
      50% { opacity: 0; }
      }
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    #youtube{
            border: 3px solid black;
            padding: 10px;
            border-radius: 25px;
    }

div.fixed {
  position: fixed;
  width: 15%;
  bottom: 350px;
  float: right;
} 
.banner .btn {
  position: ;
  top: 100%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: red;
  color: white;
  font-size: 16px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
  text-shadow: 0px 1px 0px #810e05;
  border-radius: 25px;
}
.banner .btn:hover {
  background-color: #ff6666;
}
    </style>
    
  <!-- =======================================================
    Theme Name: Mentor
    Theme URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>

  <!--Navigation bar-->
  <nav class="navbar navbar-default">
    <div class="container-fluid" style="background-color: black; color: white;">
        <h2 style="color:white; text-align:center;">We're doing as much as possible to continue the studies of student <br>support US!!!<p class="blink" style="text-align:center;">Learn more about our response to COVID-19</p></h2>
          <div style="float:left;">
         <?php if(isset($_SESSION["log"])){
          if($_SESSION['name'] == "Tara Anand Tutorials"){
          ?> <p style="font-size: 20px;"><a><span>User : <?php echo $_SESSION['name']; ?></span></a> || <a href="Dashboard/admin/dashboard.php"><span>Dashboard</span></a></p><?php
         }
         else{
            ?> <p style="font-size: 20px;"><a><span>User : <?php echo $_SESSION['name']; ?></span></a> || <a href="Dashboard/user/dashboard.php"><span>Dashboard</span></a></p><?php  
         }
         ?>
          </div>
          <div style="float: right;">
            <a href="login_signup/login.php" style="font-size: 20px;">Admin Login</a>
          </div>
        <?php } ?>
    </div>
      </div>
    <div class="container-fluid">

      <div class="col-sm-3" style="background-color: ;">
        <a href="index.php"><img src="img/onlinelogomaker-051521-1625-0802.png" ></a>
      </div>
      
      <div class="col-sm-9">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <?php if (empty($_SESSION["log"])): ?>
          <li><a href="reg/reg_check.php">Join As Student</a></li>
          <li><a href="Syllabus.html">Syllabus</a></li>
           <li><a href="notes1.php">Notes/Download</a></li>
          <li><a href="#courses">Courses</a></li>
          <li><a href="sample_paper1.php">Sample paper/solution</a></li>
          <li><a href="login_signup/login.php">Login</a></li>
          <li><a href="login_signup/register.php">Signup</a></li>
          <li class="btn-trial"><a href="#footer">Free Trail</a></li>
           <?php endif; ?>

           <?php if (isset($_SESSION["log"])):?>
          <li><a href="reg/reg_check.php">Join As Student</a></li>
          <li><a href="Syllabus.html">Syllabus</a></li>
           <li><a href="" onclick = window.open("notes1.php","_blank");>Notes/Download</a></li>
          <li><a href="#courses">Courses</a></li>
          <li><a href="" onclick = window.open("sample_paper.html","_blank");>Sample paper/solution</a></li>
          <li><a href="login_signup/view.php?vid"><span></span> Logout</a></li>
          <li><a href="tel:9835840722">Call us at: 9835840722</a></li>
          <li class="btn-trial"><a href="#footer">Free Trail</a></li>
           <?php endif; ?>
        </ul>
      </div>
      </div>
    </div>
  </nav>
  <!--/ Navigation bar-->


  <!--Banner-->
  <div class="banner" style="background: url(img/bg-banner.jpg)">
    <div class="bg-color">
      <div class="container">
        <div class="row">
          <div class="banner-text text-center">
            <div class="text-border">
              <h2 class="text-dec"  style="color: white;">Trust & Quality</h2>
            </div>
            <div class="intro-para text-center quote"  style="color: white;">
              <p class="big-text">Learning Today . . . Leading Tomorrow.</p>
              <p class="small-text" style="font-size: 45px;">Talent and luck might happen to you by chance but learning is a skill and practice that anyone can<br>accomplish with diligence.
                <br><p style="text-align: right;;">~Kiran Kumari Sinha</p></p>
                <p>Subscribe our Youtube Channel...</p>
              <a href=""><button class="btn">Subscibe</button></a>
            </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Banner-->

  
  <!--Feature-->
  <section id="feature" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>Features</h2>
          <p>About the class</p>
          <hr class="bottom-line">
        </div>
        <div class="feature-info">
          <div class="fea">
            <div class="col-md-4">
              <div class="heading pull-right">
                <h4>Latest Technologies</h4>
                <p>What is best part that anyone can watch the video of the class number of times 
                because all the classes are under recording mode so that anyone can watch the recording of
              missed classes </p>
              </div>
              <div class="fea-img pull-left">
                <i class="fa fa-css3"></i>
              </div>
            </div>
          </div>
          <div class="fea">
            <div class="col-md-4">
              <div class="heading pull-right">
                <h4>Toons Background</h4>
                <p>In one Batch there are maximum 12-13 students so there is no feeling of uncomfortability</p>
              </div>
              <div class="fea-img pull-left">
                <i class="fa fa-drupal"></i>
              </div>
            </div>
          </div>
          <div class="fea">
            <div class="col-md-4">
              <div class="heading pull-right">
                <h4>Test Series </h4>
                <p>Test series will be conducted on a regular basis after completing each module</p>
              </div>
              <div class="fea-img pull-left">
                <i class="fa fa-trophy"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ feature-->




  <!--Organisations-->
  <section id="organisations" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            <div class="orga-stru">
              <h3>65%</h3>
              <p>Say NO!!</p>
              <i class="fa fa-male"></i>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            <div class="orga-stru">
              <h3>20%</h3>
              <p>Says Yes!!</p>
              <i class="fa fa-male"></i>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            <div class="orga-stru">
              <h3>15%</h3>
              <p>Can't Say!!</p>
              <i class="fa fa-male"></i>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-info">
            <hgroup>
              <h3 class="det-txt"> Is inclusive quality education affordable?</h3><br>
              <h4 class="sm-txt">(Revised and Updated for 2021)</h4>
            </hgroup>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Organisations-->


    <!--more content-->


      <div class="container">
        <h2 class="section-header aos-init aos-animate" data-aos="fade-up" style="text-align: center;">Get the Tara Anand Tutorial's advantage
        </h2><hr class="bottom-line">
<img src="img/Conceptual clarity through visualisation.png" alt="" class="img-responsive"><br>
    </div>
<!--   <div class="container">
        <h2 class="section-header aos-init aos-animate" data-aos="fade-up" style="text-align: center;">Get the Tara Anand Tutorial's advantage</h2>
        <div class="row justify-content-between section-content bj-adv-list">
            <div class="col-sm-12 col-md-4 bj-adv-item aos-init aos-animate" data-aos="fade-up">
                <img src="https://cdn1.byjus.com/byjusweb/img/home/image/concept-clarity.png">
                <p style="text-align: center; color: black;">Conceptual clarity <br>through visualisation</p>
            </div>
            <div class="col-sm-12 col-md-4 bj-adv-item aos-init" data-aos="fade-up">
                <img src="https://cdn1.byjus.com/byjusweb/img/home/image/personalised-learning.png">
                <p style="text-align: center;  color: black;">Personalised learning <br>programs</p>
            </div>
            <div class="col-sm-12 col-md-4 bj-adv-item aos-init" data-aos="fade-up">
                <img src="https://cdn1.byjus.com/byjusweb/img/home/image/unmatched-attention.png">
                <p style="text-align: center;  color: black;">Unmatched individual <br>attention</p>
            </div>
        </div>
    </div> -->
  <!--/ more content-->
  
  <!--upcomming cousre-->
  <section id="work-shop" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center" >
          <h1>Upcoming Courses</h1>
          <hr class="bottom-line">
        </div>
        <div class="col-md-4 col-sm-4" style="background-color: black;">
          <div class="service-box text-center">
            <figure class="imghvr-fold-up">
            <img src="img/course_img/course07.jpg" class="img-responsive">
            <figcaption>
          </div>
        </div>
        <div class="col-md-4 col-sm-4" style="background-color: black;">
          <div class="service-box text-center">
            <figure class="imghvr-fold-up">
            <img src="img/course_img/course08.jpg" class="img-responsive">
            <figcaption>
          </div>
        </div>
        <div class="col-md-4 col-sm-4" style="background-color: black;">
          <div class="service-box text-center">
            <figure class="imghvr-fold-up">
            <img src="img/course_img/course09.jpg" class="img-responsive">
            <figcaption>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--upcomming course-->


  <!--Faculity member-->
  <section id="faculity-member" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>Meet Our Faculty</h2>
          <hr class="bottom-line">
        </div>
        <div class="col-lg-3 col-md-0 col-sm-0">
          <div class="pm-staff-profile-container">
            <div class="image-responsive">
            <img src="img/shashi.jpeg" alt="" class="img-thumbnail img-circle"/ style="border: 1px solid black;">
          </div>
            <div class="pm-staff-profile-details text-center">
              <dl>
                <dt>Faculty Name </dt>
                <dd>Mr. Sashi Bhushan</dd>
                <dd>10+ Year of experience</dd><br>
                <dt>Subject: Chemistry</dt><br>
                <dt>Qualification:</dt>
                <dd>I.Sc. (Physics,chemistry,Maths) from Ranchi College</dd>
                <dd>B.Sc.-(Phy,chemistry,Maths(chem Hons.)) from Ranchi University</dd>
                <dd>M.Sc. (Department of chemistry) from Ranchi University</dd>
                <dd><b>CUCET </b>Entrance Exam Qualified</dd>
                <dd><b>IIT-JAM </b>Entrance Exam Qualified</dd>
              </dl>
              <dl>
                <dt>Teaching experience:</dt>
                <dd>Teaching at Tara Anand Tutorials since 2019</dd>
                <dd>10+ Years of Teaching Experience</dd>
                <dd>Giving Lecture to <b>Class-11th+12th</b> , <b> IIT-JEE(Mains & Advance)</b> , <b>B.SC Chemistry(Hons. & Subs)</b> and <b>IIT-JAM</b> </dd>
              </dl>
          </div>
        </div>
      </div>

        <div class="col-lg-6 col-md-0 col-sm-0">
          <div class="pm-staff-profile-container">
            <div class="image-responsive">
            <img src="img/mentor.jpeg" alt="" class="img-thumbnail img-circle"/ style="border: 1px solid black;">
          </div>
            <div class="pm-staff-profile-details text-center">
              <dl>
                <dt>Faculty Name </dt>
                <dd>Mrs. Kiran Kumari Sinha</dd>
                <dd>25+ Year of experience</dd><br>
                <dt>Subject: Physics</dt><br>
                <dt>Qualification:</dt>
                <dd>I.Sc.-(Physics,chemistry,Maths,Biology) from Patna University</dd>
                <dd>B.Sc.-(Physics,chemistry,Maths(Physics Hons.)) from Patna University</dd>
                <dd>M.Sc. (Physics) from Patna Science College (Patna University)</dd>
              </dl>
              <dl>
                <dt>Teaching experience:</dt>
                <dd>As a Science teacher in "DAV Public School Hehal",Ranchi(1994)</dd>
                <dd>As a Physics Lecturer in "Mahendra prasad Mahila College",Ranchi(1997)</dd>
                <DD>As a Science teacher in "City Study Coaching Centre"(Private Institution)(2000-2005)</DD>
                <dd>Teaching as a Tutor since 2005  </dd>
              </dl>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-0 col-sm-0">
          <div class="pm-staff-profile-container">
            <div class="image-responsive">
            <img src="img/mentor.jpeg" alt="" class="img-thumbnail img-circle"/ style="border: 1px solid black;">
          </div>
            <div class="pm-staff-profile-details text-center">
              <dl>
                <dt>Qualification:</dt>
                <dd>I.Sc.-(Physics,chemistry,Maths,Biology) from Patna University</dd>
                <dd>B.Sc.-(Physics,chemistry,Maths(Physics Hons.)) from Patna University</dd>
                <dd>M.Sc. (Physics) from Patna Science College (Patna University)</dd>
              </dl>
              <dl>
                <dt>Teaching experience:</dt>
                <dd>As a Science teacher in "DAV Public School Hehal",Ranchi(1994)</dd>
                <dd>As a Physics Lecturer in "Mahendra prasad Mahila College",Ranchi(1997)</dd>
                <DD>As a Science teacher in "City Study Coaching Centre"(Private Institution)(2000-2005)</DD>
                <dd>Teaching as a Tutor since 2005  </dd>
              </dl>
          </div>
        </div>
      </div>


    </div>
  </section>
  <!--/ Faculity member-->

  <!--online course-->
  <section id="testimonial" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h1 class="white" style="text 100px;">ONLINE COURSES GOING ON..</h1>
          <p class="white">Anyone Can join it.. Grab the opportunity !!!!</p>
          <p class="blink"> FREE FREE FREE !!!</p>
          <hr class="bottom-line bg-white">
        </div>
        <div class="col-md-12 col-sm-2">
          <div class="text-comment">
            <h1 style="text-align: center;">CLASS 10th..</h1><br>
            <div align="center">
             <img src="img/04.jpg" class="img-responsive">
           </div>
           <hr style="display: block;margin-top: 0.5em;margin-bottom: 0.5em;margin-left: auto;margin-right: auto;border-style: inset;border-width: 1px;">
          <p align="center"> To join email us:<a href="#contact" class="btn get-quote">Click Here</a> </p>
           <hr style="display: block;margin-top: 0.5em;margin-bottom: 0.5em;margin-left: auto;margin-right: auto;border-style: inset;border-width: 1px;">
          </div>
        </div>
        <div class="col-md-12 col-sm-2">
          <div class="text-comment">
            <h1 style="text-align: center;">English</h1><br>
            <div align="center">
             <img src="img/01.jpg" class="img-responsive">
           </div>
           <hr style="display: block;margin-top: 0.5em;margin-bottom: 0.5em;margin-left: auto;margin-right: auto;border-style: inset;border-width: 1px;">
          <p align="center"> To join email us:<a href="#contact" class="btn get-quote">Click Here</a> </p>
           <hr style="display: block;margin-top: 0.5em;margin-bottom: 0.5em;margin-left: auto;margin-right: auto;border-style: inset;border-width: 1px;">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ online course-->



  <!--Courses-->
  <section id="courses" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>Courses Available !!! </h2>
          <p>These are the available courses..</p>
          <hr class="bottom-line">
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up">
            <img src="img/course_img/course01.jpg">
            <figcaption>
              <h3>Course Name : ENGLISH</h3>
              <p>1.No. of Batches:2</p>
              <p>2.No. of Days:3days(weekly)</p>
              <p>3. Notes:(PPT+Notes)</p>
            </figcaption>
          </figure>
        </div>
        <div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up">
            <img src="img/course_img/course02.jpg" class="img-responsive">
            <figcaption>
              <h3>Course Name : PHYSICS</h3>
              <p><p>1.No. of Batches:3</p>
              <p>2.No. of Days:3days(weekly)</p>
              <p>3. Notes:(PPT+Notes)</p></p>
            </figcaption>
          </figure>
        </div>
        <div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up">
            <img src="img/course_img/course03.jpg" class="img-responsive">
            <figcaption>
              <h3>Course Name : PHYSICS</h3>
              <p><p>1.No. of Batches:2</p>
              <p>2.No. of Days:3days(weekly)</p>
              <p>3. Notes:(PPT+Notes)</p></p>
            </figcaption>
          </figure>
        </div>
        <div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up">
            <img src="img/course_img/course04.jpg" class="img-responsive">
            <figcaption>
              <h3>Course Name : MATHS</h3>
              <p><p>1.No. of Batches:1</p>
              <p>2.No. of Days:3days(weekly)</p>
              <p>3. Notes:Practice on daily basis</p>
            </figcaption>
          </figure>
        </div>
        <div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up">
            <img src="img/course_img/course05.jpg" class="img-responsive">
            <figcaption>
              <h3>Course Name : MATHS</h3>
              <p><p>1.No. of Batches:1</p>
              <p>2.No. of Days:3days(weekly)</p>
              <p>3. Notes:Practice on daily basis</p>
            </figcaption>
          </figure>
        </div>
        <div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up">
            <img src="img/course_img/course06.jpg" class="img-responsive">
            <figcaption>
              <h3>Course Name : MATHS</h3>
              <p><p>1.No. of Batches:1</p>
              <p>2.No. of Days:3days(weekly)</p>
              <p>3. Notes:Practice on daily basis</p></p>
            </figcaption>
          </figure>
        </div>
      </div>
    </div><br>
    <p style="text-align:center; ">To register <a href="reg/reg_check.php">click here</a></p>
  </section>
  <!--/ Courses-->


  <!--Pricing-->
  <section id="pricing" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>Our Pricing</h2>
          
          <hr class="bottom-line">
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="price-table">
            <!-- Plan  -->
            <div class="pricing-head">
              <h4>Monthly Plan</h4>
              <span class=""></span> <span class="amount">Rs. 500</span>
               <p>(Vary accordingly with the course)</p>
            </div>
            <!-- Plan Detail -->
            <div class="price-in mart-15">
              <a  class="btn btn-bg green btn-block" href="reg/reg_check.php">
              PURCHACE</a>

            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="price-table">
            <!-- Plan  -->
            <div class="pricing-head">
              <h4>Quarterly Plan</h4>
              <span class=""></span> <span class="amount">Rs. 800</span>
               <p>(Vary accordingly with the course</p>
            </div>

            <!-- Plean Detail -->
            <div class="price-in mart-15">
              <a class="btn btn-bg yellow btn-block" href="reg/reg_check.php">PURCHACE</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="price-table">
            <!-- Plan  -->
            <div class="pricing-head">
              <h4>Year Plan</h4>
              <span class=""></span> <span class="amount">Rs. 1200</span>
              <p>(Vary accordingly with the course)</p>
            </div>
            <!-- Plean Detail -->
            <div class="price-in mart-15">
              <a class="btn btn-bg red btn-block" href="reg/reg_check.php">PURCHACE</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Pricing-->
  
  
  
  
  <!--Youtube-->
  <section id="courses" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>Check Our Most Popular</h2>
          <hr class="bottom-line">
        </div>
      </div>
    </div>
      <div class="container">
  <div class="row">
    <div class="col-md-12">
        <div class="col-md-5" style="border-radius: 25px; border:2px solid black;">
    <h1 align="center">Most Popular <span style="color: #5FCF80;">Playlist</span></h1><hr color="black">
      <div>
          <ul class="list-group">
            <li class="list-group-item"><img src="img/Untitled4.png" alt=""style="height: 50px,width: 50px;margin-right: 30px;">
              <a href="">To check Out Full Playlist Click Here</a></li>
            <li class="list-group-item"><img src="img/Untitled5.png" alt=""style="height: 50px,width: 50px;margin-right: 30px;">
              <a href="">To check Out Full Playlist Click Here</a></li>
          </ul>
      </div><br>
      <p style="text-align:center; ">To See our Full Playlist : <a href="https://www.youtube.com/channel/UCU_CSQbv68MTiE2lCsZmPpA/playlists">click here</a></p><br>
  </div>
  <div class="col-md-2"></div>
  <div class="col-md-5" style="border-radius: 25px; border:2px solid black;">
    <h1 align="center">Most Popular <span style="color: #5FCF80;">Notes</span></h1><hr color="black">
      <div>
          <ul class="list-group">
            <li class="list-group-item"><img src="img/Untitled2.png" style="height: 50px,width: 50px;margin-right: 30px;" alt="">
              <a href="">class 11th Physics Notes</a></li>
            <li class="list-group-item"><img src="img/Untitled3.png" style="height: 50px,width: 50px;margin-right: 30px;" alt="">
              <a href="">class 12th Physics Notes</a></li>
          </ul>
      </div><br>
      <p style="text-align:center; ">To See our Notes Section : <a href="notes1.php">click here</a></p><br>
  </div>
 <!--      <div class="col-md-6" style="margin-top: 250px;">      
        <img src="img/Tara Anand Tutorial3.png" class="img-responsive" style="margin: auto;border-radius: 25px;">
      <button style="position:relative;border-radius: 25px;
  left: 45%;
  background-color: red;
    transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  color: white;
  font-size: 25px; ">subscribe</button>
</div> -->
    </div>
  </div>
</div><br>
  </section>
  
  <!--/ youtube-->
  
  

  <!--Cta-->
<div class="jumbotron">
    <section id="cta-2">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="text-center" style="color: black;">Feedback</h1><br>
          <p class="blink" style="text-align:center; ">Please do comment for any enquiry!!<br>Support Us!!</p><br>
          <div class="cta-2-form text-center">
            <form action="comment/comment1.php" method="post" id="workshop-newsletter-form">
              <input class="cta-2-form-submit-btn" value="Click here" type="submit">
            </form>
          </div>
        </div>
      </div>
    </div><hr>
  </section>
</div>
  <!--/ Cta-->

  <!--Contact-->
  <section id="contact" class="section-padding">
    <div class="container" style="border:2px solid black;border-radius: 25px;">
      <div class="row">
        <div class="header-section text-center">
          <h2>Contact Us</h2>
          <hr class="bottom-line">
        </div>
        <form action="#" method="POST">
              <div class="form-group">
                <?= $output; ?>
              </div>
          <div class="col-md-6 col-sm-6 col-xs-12 left">
            <div class="form-group">
              <input type="text" name="name" class="form-control form" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required/>
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" required/>
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="phone" id="phone" placeholder="phone no." data-rule="minlen:4" data-msg="Please enter valid phone no" required/>
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" required />
              <div class="validation"></div>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12 right">
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="write About Courses You Want !!" required></textarea>
              <div class="validation"></div>
            </div>
          </div>
          <div class="col-xs-12" style="margin-bottom: 10px;">
            <!-- Button -->
            <button type="submit" id="submit" name="submit" class="btn btn-success">SEND EMAIL</button>
          </div>
        </form>
      </div>
    </div>
  </section>
  <!--/ Contact-->


  <!-- Teaching Location -->
  <h2 class="text-center">Teaching Location:</h2>
  <hr class="bottom-line">
      <div class="container">
        <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6">
               <h3>Teaching Address:</h3><br>
               <i class="material-icons" style="font-size:30px;">home</i>
               <p style="color: black;padding-right:130px;">C/O- Ashok Kumar, Sheela Niwas, Indrapuri, Nawab Rai Lane near 
                Hanuman Mandir opposite Reliance Fresh,Ratu Road Ranchi, Jharkhand<br></p>
                <a href="https://goo.gl/maps/APmD4FY3JquihUvCA" style="color: red;padding-right:;">(MAP)</a><br><br>
                <i class="material-icons" style="font-size:30px;">email</i>
               <p style="color: black;padding-right:330px;">ttutorials186@gmail.com</p>
        </div>

    <div class="col-lg-6 col-md-6 col-sm-6">
            <h2>MAP</h2>
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d58593.27234764915!2d85.26925793345323!3d23.38534030112781!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e0!4m0!4m3!3m2!1d23.3853442!2d85.3042775!5e0!3m2!1sen!2sin!4v1628667214913!5m2!1sen!2sin" class="embed-responsive-item" allowfullscreen></iframe>
            </div>
        </div>
      </div>
      </div>

  <!-- Teaching Location -->

<!-- About Me -->
  <hr color="black">
  <section class="section-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-4">
          <div class="widget-a">
            <div class="w-body-a">
            <div class="w-footer-a">
              <ul class="list-unstyled">
               <h1>  <span class="color-text-a">About Me:</span></h1><br>
                <li class="color-a">
                  <span class="color-text-a">Phone .</span>7991073221</li>
                <li class="color-a">
                  <span class="color-text-a">Email .</span> anandrishav186@gmail.com</li>
                  <img src="img/my pic.JPG" width="85" height="85" class="img-circle"><br>Rishav Anand is the founder and editor of www.ttorials.club.He is now pursuing web developer.(link given)
                  <a href="http://rishavanand.info/">click here</a>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <hr color="black">
<!-- About Me -->

  <!--Footer-->
  <footer id="footer" class="footer">
    <div class="container text-center">

      <h3>Start Your Free Trial Now!</h3>

      <form class="mc-trial row" action="" method="POST">
        <div class="form-group">
               <?= $output2; ?>
              </div>
        <div class="form-group col-md-3 col-md-offset-2 col-sm-4">

          <div class=" controls">
            <input name="name" placeholder="Enter Your Name" class="form-control" type="text" required>
          </div>
        </div>
        <!-- End email input -->
        <div class="form-group col-md-3 col-sm-4">
          <div class=" controls">
            <input name="email" placeholder="Enter Your email" class="form-control" type="email" required>
          </div>
        </div>
        <!-- End email input -->
        <div class="col-md-2 col-sm-4">
          <p>
            <button name="submit2" type="submit" class="btn btn-block btn-submit">
            Submit <i class="fa fa-arrow-right"></i></button>
          </p>
        </div>
      </form>
      <!-- End newsletter-form --><br>
      <ul class="social-links">
        <li><a href="#link"><i class="fa fa-twitter fa-fw"></i></a></li>
        <li><a href="#link"><i class="fa fa-facebook fa-fw"></i></a></li>
        <li><a href="#link"><i class="fa fa-google-plus fa-fw"></i></a></li>
        <li><a href="#link"><i class="fa fa-dribbble fa-fw"></i></a></li>
        <li><a href="#link"><i class="fa fa-linkedin fa-fw"></i></a></li>
      </ul>
      2021  All rights reserved
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Mentor
        -->
         <a href="">Tara Anand Tutorials</a>
      </div>
    </div>
  </footer>
  <!--/ Footer-->
  <!-- call fixed button -->
  <div>
    <a  href="tel:9835840722"  style="position: fixed;bottom: 140px;right: 20px;"><img src="img/1608790_phone_icon.png" width="53px;" class="img-circle" style="background-color: #8A2BE2;" alt=""></a>
  </div>
    <!-- call fixed button -->
  <!-- watsapp fixed button -->
  <div>
    <a href="https://wa.me/919835840722" target="_blank"  style="position: fixed;bottom: 80px;right: 20px;"><img src="img/whatsapp.png" width="53px;" class="img-circle" alt=""></a>
  </div>
  <!-- watsapp fixed button -->


<!-- for reference only -->
 <!--   <form action="price/price1.php" method="post" id="myForm" name="myForm">
        <input type="hidden" name="t1" id="t1">
    </form>
      <script type="text/javascript">
    function setid(n)
    {
      myForm.t1.value=n;
      document.getElementById("myForm").submit();
    }
  </script> -->
 <!-- for reference only --> 
<!-- GetButton.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            instagram: "Sinha.kirankumari", // Instagram username
            instagram_color: "#E74339", // Instagram button color
            call_to_action: "", // Call to action
            position: "right", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /GetButton.io widget -->
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>

</body>



              <!-- when we mail this will redirect to  that perticulr division-->
              <input type="hidden" name="t1" id="t1" value="0">
              <input type="hidden" name="t2" id="t2" value="0">
              <script>
              if( document.getElementById("t1").value == "1"){
                  $(document).ready(function () {$('html, body').animate({scrollTop: $('#contact').offset().top}, 'slow');});
                }
                if( document.getElementById("t2").value == "2"){
                  $(document).ready(function () {$('html, body').animate({scrollTop: $('#footer').offset().top}, 'slow');});
                }
                function unloadMessage() {
                    return "Are you sure you want to leave this page";
                }

              </script>
              <!-- when we mail this will redirect to  that perticulr division-->

</html>