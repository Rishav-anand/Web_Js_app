<?php
    session_start();
    $con=mysqli_connect("localhost","root","","ttutoria_mydatabase");
    $tem=$_SESSION['name'];
    $email = $_SESSION['email'];
    $res="SELECT * FROM `user_detail` WHERE `u_name`='$tem' AND u_email = '$email' ";
    $run=mysqli_query($con,$res);
    $row=mysqli_fetch_array($run);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tara Anand Tutorial's Notes</title>
  <meta name="description" content="">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/imagehover.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <script type="text/javascript" src="googlemap.js"></script>
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
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }

.accordion {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
}

.active, .accordion:hover {
  background-color: #ccc;
}

.accordion:after {
  content: '\002B';
  color: #777;
  font-weight: bold;
  float: right;
  margin-left: 5px;
}

.active:after {
  content: "\2212";
}

.panel {
  padding: 0 18px;
  background-color: white;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
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

<!--Taking value from row in each input so that we can use in function-->

<input type="hidden" id="check_txt1" value="<?php echo($row[4]); ?>">
<input type="hidden" id="check_txt2" value="<?php echo($row[5]); ?>">
<input type="hidden" id="check_txt3" value="<?php echo($row[6]); ?>">
<input type="hidden" id="check_txt4" value="<?php echo($row[7]); ?>">
<input type="hidden" id="check_txt5" value="<?php echo($row[8]); ?>">
<input type="hidden" id="check_txt6" value="<?php echo($row[9]); ?>">
<input type="hidden" id="check_txt7" value="<?php echo($row[10]); ?>">
<input type="hidden" id="check_txt8" value="<?php echo($row[11]); ?>">
<input type="hidden" id="check_txt9" value="<?php echo($row[12]); ?>">
<input type="hidden" id="check_txt10" value="<?php echo($row[13]); ?>">
<input type="hidden" id="check_txt11" value="<?php echo($row[14]); ?>">
<input type="hidden" id="check_txt12" value="<?php echo($row[15]); ?>">
<input type="hidden" id="check_txt13" value="<?php echo($row[16]); ?>">


<!--Taking value from row in each input so that we can use in function-->
  


  <!--header-->
  <section>
    <div class="jumbotron jumbotron-fluid" style="background-color:;border: 1px solid black;padding: 10px;border-radius: 25px;">
      <div class="container">
        <h1 style="text-align:center; color: black;">DOWNLOAD notes here!!!!</h1>
      </div>
    </div>
  </section>
  <!--header-->
  <div class="container" >
<img src="img/Prepare them well for the exam..png" class="img-responsive center-block d-block mx-auto" style="background-color:;border: 2px solid black;padding: 10px;border-radius: 25px;"><br>
  </div>


  <div class="container">
  <div class="row">
    <div class="col-sm-8" style="background-color:;border: 2px solid black;padding: 10px;border-radius: 25px;">

      <!--English[competetion]-->
    <button class="accordion" style="text-align: center;" onclick="check('English_c')" id="English_c">ENGLISH</button>
    <div class="panel">
        <table class="table table-dark table-hover">
    <tbody>
      <tr>
        <td style="text-align: center;"><a href="pdf/syllabus/class8/CBSE-Board-Class-8-Maths-syllabus.docx" download="CBSE-Board-Class-8-Maths-syllabus.docx">Download Tense Notes 2020-2021 PDF</a></td>

      </tr>
      <tr>
      <td style="text-align: center;"><a href="pdf/syllabus/class8/CBSE-Board-Class-8-Maths-syllabus.docx" download="CBSE-Board-Class-8-Maths-syllabus.docx">Download Voice Notes 2020-2021 PDF</a></td>


      </tr>
      <tr>
       <td style="text-align: center;"><a href="#">Download Narration Notes 2020-2021 PDF</a></td>


      </tr>
    </tbody>
  </table>
    </div>
<!--English[competetion]-->

<!--English[CLass11th]-->
    <button class="accordion" style="text-align: center;" onclick="check('Eng')" id="Eng">ENGLISH(11th)</button>
    <div class="panel">
     <h1 style="text-align:center;">Notes not available !! </h1>   
    </div>
<!--English[CLass 11th]-->

<!--English[CLass 12th]-->
    <button class="accordion" style="text-align: center;" onclick="check('Eng')" id="Eng">ENGLISH(12th)</button>
    <div class="panel">
     <table class="table table-dark table-hover">
    <tbody>
      <th style="text-align: center;">Flamingo</th>
      <tr>
        <td style="text-align: center;"><a href="pdf\notes\Class 12 Literature\Flamingo\chapter-1 Last lesson.pdf" download="chapter-1 Last lesson.pdf">Download chapter-1 Last lesson Notes 2020-2021 PDF</a></td>
      </tr>
      <tr>
      <td style="text-align: center;"><a href="pdf\notes\Class 12 Literature\Flamingo\chapter-2 Lost spring.pdf" download="chapter-2 Lost spring.pdf">Download chapter-2 Lost spring Notes 2020-2021 PDF</a></td>
      </tr>
      <tr>
       <td style="text-align: center;"><a href="pdf\notes\Class 12 Literature\Flamingo\chapter-3 Deep water.pdf" download="chapter-3 Deep water.pdf" >Download  chapter-3 Deep water.pdf 2020-2021 PDF</a></td>
      </tr>
      <tr>
       <td style="text-align: center;"><a href="pdf\notes\Class 12 Literature\Flamingo\chapter-4 Rattrap.pdf" download="chapter-4 Rattrap.pdf" >Download  chapter-4 Rattrap 2020-2021 PDF</a></td>
      </tr>
      <tr>
       <td style="text-align: center;"><a href="pdf\notes\Class 12 Literature\Flamingo\chapter-5 Indigo.pdf" download="chapter-5 Indigo.pdf" >Download  chapter-5 Indigo Notes 2020-2021 PDF</a></td>
      </tr>
      <tr>
       <td style="text-align: center;"><a href="pdf\notes\Class 12 Literature\Flamingo\chapter-6 Poets and pancakes.pdf" download="chapter-6 Poets and pancakes.pdf" >Download  chapter-6 Poets and pancakes Notes 2020-2021 PDF</a></td>
      </tr>
      <tr>
       <td style="text-align: center;"><a href="pdf\notes\Class 12 Literature\Flamingo\chapter-7 Interview.pdf" download="chapter-7 Interview.pdf" >Download  chapter-7 Interview Notes 2020-2021 PDF</a></td>
      </tr>
      <tr>
       <td style="text-align: center;"><a href="pdf\notes\Class 12 Literature\Flamingo\chapter-8 Going places.pdf" download="chapter-8 Going places.pdf" >Download  chapter-8 Going places Notes 2020-2021 PDF</a></td>
      </tr>

      <th style="text-align: center;">Vistas</th>
      <tr>
        <td style="text-align: center;"><a href="pdf\notes\Class 12 Literature\Vistas\Chapter-1 Third level.pdf" download="Chapter-1 Third level.pdf">Download Chapter-1 Third level Notes 2020-2021 PDF</a></td>
      </tr>
      <tr>
      <td style="text-align: center;"><a href="pdf\notes\Class 12 Literature\Vistas\Chapter-2 Tiger king.pdf" download="Chapter-2 Tiger king.pdf">Download chapter-2 Lost spring Notes 2020-2021 PDF</a></td>
      </tr>
      <tr>
       <td style="text-align: center;"><a href="pdf\notes\Class 12 Literature\Vistas\Chapter-3 Journey to the end of the earth.pdf" download="Chapter-3 Journey to the end of the earth.pdf" >Download Chapter-3 Journey to the end of the earth 2020-2021 PDF</a></td>
      </tr>
      <tr>
       <td style="text-align: center;"><a href="pdf\notes\Class 12 Literature\Vistas\Chapter-4 The enemy.pdf" download="Chapter-4 The enemy.pdf">Download  Chapter-4 The enemy 2020-2021 PDF</a></td>
      </tr>
      <tr>
       <td style="text-align: center;"><a href="pdf\notes\Class 12 Literature\Vistas\chapter-5 Should wizard hit the mommy.pdf" download="chapter-5 Should wizard hit the mommy.pdf" >Download  chapter-5 Should wizard hit the mommy Notes 2020-2021 PDF</a></td>
      </tr>
      <tr>
       <td style="text-align: center;"><a href="pdf\notes\Class 12 Literature\Vistas\chapter-6 On the face  of it.pdf" download="chapter-6 On the face  of it.pdf">Download  chapter-6 On the face  of it Notes 2020-2021 PDF</a></td>
      </tr>
      <tr>
       <td style="text-align: center;"><a href="pdf\notes\Class 12 Literature\Vistas\chapter-7 Evan tries an o-level.pdf" download="chapter-7 Evan tries an o-level.pdf" >Download  chapter-7 Evan tries an o-level Notes 2020-2021 PDF</a></td>
      </tr>
      <tr>
       <td style="text-align: center;"><a href="pdf\notes\Class 12 Literature\Vistas\chapter-8 Childhood Memories.pdf" download="chapter-8 Childhood Memories.pdf" >Download  chapter-8 Childhood Memories Notes 2020-2021 PDF</a></td>
      </tr>


      <th style="text-align: center;">Poem</th>
      <tr>
        <td style="text-align: center;"><a href="pdf\notes\Class 12 Literature\Poems\chapter - 1 my mother at age 66.pdf" download="chapter - 1 my mother at age 66.pdf">Download chapter - 1 my mother at age 66 Notes 2020-2021 PDF</a></td>
      </tr>
      <tr>
      <td style="text-align: center;"><a href="pdf\notes\Class 12 Literature\Poems\chapter-  2 elementary school.pdf" download="chapter-  2 elementary school.pdf">Download chapter-  2 elementary school Notes 2020-2021 PDF</a></td>
      </tr>
      <tr>
       <td style="text-align: center;"><a href="pdf\notes\Class 12 Literature\Poems\chapter- 3 keeping quiet.pdf" download="chapter- 3 keeping quiet.pdf" >Download  chapter- 3 keeping quiet 2020-2021 PDF</a></td>
      </tr>
      <tr>
       <td style="text-align: center;"><a href="pdf\notes\Class 12 Literature\Poems\chapter- 4 A things of beauty.pdf" download="chapter- 4 A things of beauty.pdf">Download  chapter- 4 A things of beauty 2020-2021 PDF</a></td>
      </tr>
      <tr>
       <td style="text-align: center;"><a href="pdf\notes\Class 12 Literature\Poems\chapter- 5 A road side stand.pdf" download="chapter- 5 A road side stand.pdf" >Download  chapter- 5 A road side stand Notes 2020-2021 PDF</a></td>
      </tr>
      <tr>
       <td style="text-align: center;"><a href="pdf\notes\Class 12 Literature\Poems\chapter- 6 Aunt jennifer's tiger.pdf" download="chapter- 6 Aunt jennifer's tiger.pdf">Download  chapter- 6 Aunt jennifer's tiger Notes 2020-2021 PDF</a></td>
      </tr>

    </tbody>
  </table>
    </div>
<!--English[CLass 12th]-->


<!--CLASS-9th-->
<button class="accordion" style="text-align: center;" onclick="check('9th')" id="9">Class-9th</button>
<div class="panel">
<h1 style="text-align:center;">Notes not available !! </h1>
</div>
<!--CLASS-9th-->


<!--CLASS-10th-->
<button class="accordion" style="text-align: center;"  onclick="check('10th')"id="10">Class-10th</button>
<div class="panel">
<h1 style="text-align:center;">Notes not available !! </h1>
</div>
<!--CLASS-10th-->



<!--CLASS-11th[Physics]-->
<button class="accordion" style="text-align: center;" onclick="check('11th_p')" id="11_p">Class-11th[Physics]</button>
<div class="panel">
<table class="table table-dark table-hover">
    <tbody>
      <tr>
        <td style="text-align: center;"><a href="pdf/syllabus/class8/CBSE-Board-Class-8-Maths-syllabus.docx" download="CBSE-Board-Class-8-Maths-syllabus.docx">Download Tense Notes 2020-2021 PDF</a></td>

      </tr>
      <tr>
      <td style="text-align: center;"><a href="pdf/syllabus/class8/CBSE-Board-Class-8-Maths-syllabus.docx" download="CBSE-Board-Class-8-Maths-syllabus.docx">Download Voice Notes 2020-2021 PDF</a></td>


      </tr>
      <tr>
       <td style="text-align: center;"><a href="#">Download Narration Notes 2020-2021 PDF</a></td>


      </tr>
    </tbody>
  </table>
</div>
<!--CLASS-11th[Physics]-->


<!--CLASS-12th[Physics]-->
<button class="accordion" style="text-align: center;"  onclick="check('12th_p')" id="12_p">Class-12th[Physics]</button>
<div class="panel">
  <table class="table table-dark table-hover">
    <tbody>
      <tr>
        <td style="text-align: center;"><a href="pdf\notes\12_notes\1. electrostatic.pdf" download="1. electrostatic.pdf">Download Electrostatic Notes 2020-2021 PDF</a></td>
      </tr>
      <tr>
      <td style="text-align: center;"><a href="pdf\notes\12_notes\2. current electricity.pdf" download="2. current electricity.pdf">Download Current electricity Notes 2020-2021 PDF</a></td>
      </tr>
      <tr>
       <td style="text-align: center;"><a href="pdf\notes\12_notes\3. magnetic effect of current and magnetism.pdf" download="3. magnetic effect of current and magnetism.pdf">Download Magnetic effect of current and magnetism Notes 2020-2021 PDF</a></td>
      </tr>
      <tr>
       <td style="text-align: center;"><a href="pdf\notes\12_notes\4. Electromagnetic induction.pdf" download="4. Electromagnetic induction.pdf">Download Electromagnetic induction.pdf Notes 2020-2021 PDF</a></td>
      </tr>
      <tr>
       <td style="text-align: center;"><a href="pdf\notes\12_notes\5. Ac.pdf" download="5. Ac.pdf">Download Ac Notes 2020-2021 PDF</a></td>
      </tr>
      <tr>
       <td style="text-align: center;"><a href="pdf\notes\12_notes\6. electromagnetic waves.pdf" download="6. electromagnetic waves.pdf">Download Electromagnetic waves Notes 2020-2021 PDF</a></td>
      </tr>
      <tr>
       <td style="text-align: center;"><a href="pdf\notes\12_notes\7. Ray optics.pdf" download="7. Ray optics.pdf">Download Ray optics Notes 2020-2021 PDF</a></td>
      </tr>
      <tr>
       <td style="text-align: center;"><a href="pdf\notes\12_notes\" download="">Download Narration Notes 2020-2021 PDF</a></td>
      </tr>
      <tr>
       <td style="text-align: center;"><a href="pdf\notes\12_notes\9. Dual matter and radiation of matter.pdf" download="9. Dual matter and radiation of matter.pdf">Download Dual matter and radiation of matter Notes 2020-2021 PDF</a></td>
      </tr>
      <tr>
       <td style="text-align: center;"><a href="pdf\notes\12_notes\10. atom and nuclei.pdf" download="">Download Atom and nuclei Notes 2020-2021 PDF</a></td>
      </tr>
      <tr>
       <td style="text-align: center;"><a href="pdf\notes\12_notes\11. semiconductor and device.pdf" download="11. semiconductor and device.pdf">Download Semiconductor and device Notes 2020-2021 PDF</a></td>
      </tr>
      <tr>
       <td style="text-align: center;"><a href="pdf\notes\12_notes\12. principle of communication.pdf" download="12. principle of communication.pdf">Download Principle of communication Notes 2020-2021 PDF</a></td>
      </tr>
    </tbody>
  </table>
</div>
<!--CLASS-12th[Physics]-->
</div>
<br>
    <div class="col-sm-4"> 
      <div  style="background-color:;  border: 2px solid black;padding: 10px;border-radius: 50px 20px; margin-top: 10px;">
        <a href=""><img src="img/onlinelogomaker-051521-1649-8710.png" class="img-responsive"></a>
      </div>
  </div>
  <hr>
  </div>
  </div>
  <br><br>
    <div class="container-fluid" style="color: black;">
        <p class="blink" style="text-align:center; color: black;">Notes Comming soon !!!!!</p></h2>
    </div><br>
  <section>
    <div class="container">
      <p class="text-info" style="text-align:center; ">NOTE:Practice paper are attached with pdf</p>
    </div>
  </section>



  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>
  <script>
   function check(n) {
    if (n=="English_c") {
      var temp=document.getElementById("check_txt1").value ;
    }else if (n=="Eng") {
      var temp=document.getElementById("check_txt2").value;
    }else if (n=="9th") {
      var temp=document.getElementById("check_txt12").value;
    }else if (n=="10th") {
      var temp=document.getElementById("check_txt11").value;
    }
    else if (n=="11th_p") {
      var temp=document.getElementById("check_txt3").value;
    }
    else if (n=="12th_p") {
      var temp=document.getElementById("check_txt4").value;
    }
    if (temp != '0') {
      var acc = document.getElementsByClassName("accordion");
      var i;
      for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
          this.classList.toggle("active");
          var panel = this.nextElementSibling;
          if (panel.style.maxHeight) {
            panel.style.maxHeight = null;
          } else {
            panel.style.maxHeight = panel.scrollHeight + "px";
          }
        });
      }
   }else{
      alert('Not Registered for this course !!!');
    }
   }
  </script>
  <script src="contactform/contactform.js"></script>

</body>

</html>
