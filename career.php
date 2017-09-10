<?php
  session_start();
?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Career</title>
    <script type = "text/javascript"  src = "js/career.js" ></script>
    
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/index.css">
        <link rel="stylesheet" href="css/career.css">
    
  </head>

  <body>

  <style>      
      @font-face {
          font-family: Brasileirinha;
          src: url(font/Brasileirinha.ttf);
      }
      
      @font-face {
          font-family: Lobster;
          src: url(font/Lobster.ttf);      
      }
      
      @font-face {
          font-family: Qoh;
          src: url(font/qoh.ttf);
      }
  </style>
      
<ul class="nav">
    <li class="navItem"><Strong><a href="index.php"><font style="color: red;">Take</font><font style="color: white">It</font></a></Strong></li>
    <li class="navItem"><a href="upcoming.php">NowShowing</a></li>
    <li class="navItem"><a href="upcoming.php">Upcoming</a></li>
    <li class="navItem"><a href="news.php">News</a></li>
    <li class="navItem"><Strong><a href="nowShowing.php"><font style="color: red;"><u>Career</u></font></a></Strong></li>
    <li class="navItem"><a href="about.php">About</a></li>
    <li class="navItem"><a href="php/authmain.php"><Strong><font style="color: red;font-family: Lobster; font-size: 80%;">
    <?php
    if (isset($_SESSION['valid_user']))
  {
    echo $_SESSION['valid_user'];
  }
  else
  {
    echo 'Login';
  }
   ?>
    </font></Strong></a></li>
</ul>


 <img class="logo2" src="image/logo2.png" alt="" />
      
      
<div class="career">     
<ul class="tab">
  <li><a href="javascript:void(0)" class="tablinks" onclick="openJob(event, 'Film')" id="defaultOpen">FILM PROGRAMMER</a></li>
  <li><a href="javascript:void(0)" class="tablinks" onclick="openJob(event, 'MT')">MANAGEMENT TRAINEE</a></li>
  <li><a href="javascript:void(0)" class="tablinks" onclick="openJob(event, 'SD')">SOFTWARE DEVELOPER</a></li>
  <li><a href="javascript:void(0)" class="tablinks" onclick="openJob(event, 'Admin')">ADMINISTRATOR</a></li>
</ul>

<div id="Film" class="tabcontent">
  <h3>Description</h3>
  <p>
    The Film Programmer will assist in scheduling movies in the cinemas to maximize patronage and to ensure market demand is met.</p>

    <p>This dynamic individual will liaise with the various cinema management teams within the organization and to ensure operational efficiency in relation to the scheduling. This individual will also be required to liaise with business partners, film distributors and the cinemas to to ensure timely delivery of movie content and systematically coordinate the display of various film publicity materials in the cinemas. </p>

    <p>The right candidate is a team player, one who is well organized, have a systematic attention to detail and possess discipline in meeting deadlines. The qualified individual should have a keen interest in movies in order to assist in the analysis of market demand and deliver the right mix of movie content in the cinemas. </p>

    <p>This rewarding and challenging career will be a great opportunity for individuals who wish to thrive in the dynamic, fast-paced world of the entertainment industry.</p>
   <h3>We seek individuals:</h3>
    <ul class="careerrequirement">
        <li>Who is independent, energetic and have a keen interest in movies</li>
        <li>Who is organized and capable of managing details and meeting tight deadlines</li>
        <li>Capable in database management and data analysis</li>
        <li>Strong in Microsoft Excel, presentation software and basic digital content management</li>
        <li>With good interpersonal &amp; communication skills</li>
        <li>Experience in the area of programming, scheduling and/or research within the media/entertainment industry will be an added advantage</li>
</div>

<div id="MT" class="tabcontent">
  <h3>Description</h3>
  <p>- Ensure the security of cinema and equipment at the end of the shift
  <br>- Opening / closing of cinema including cash handling and opening & closing procedures
  <br>- Ensure the readiness and proper presentation of all areas of the location or within the complex during operating hours
  <br>- Ensure that staff adopt proper procedures in projection, concession, floor or ticket sales duties
  <br>- Maintain work discipline and report any staff misconduct to superior, to report / feedback to Manager for any course of action
  <br>- Assist in handling customer complaint 
  <br>- Assist in group booking and sale of vouchers
 </p> 
    <h3>We seek individuals:</h3>
    <ul class="careerrequirement">
        <li>Who is independent, energetic and have a keen interest in movies</li>
        <li>Minimum Nitec in Service Skills</li>
        <li>Service-oriented, hardworking and willingness to learn are important attributes</li>
        <li>Ability and maturity to communicate and interact with all levels of personnel within and outside the organisation</li>
        <li>Able to perform rotating shifts on flexible working hours</li>
</div>

<div id="SD" class="tabcontent">
  <h3>Description</h3>
  <p>- Development of our in-house applications
  <br>- Quality assurance testing for in-house & third party applications
  <br>- Deployment of in-house development applications
  <br>- Troubleshoot and technical support to end users
    </p>
    <h3>We seek individuals:</h3>
    <ul class="careerrequirement">
        <li>Who is independent, energetic and have a keen interest in movies</li>
        <li>Minimum 3 years’ experience in software development with proven track records</li>
        <li>Good solid experience in Oracle Structured Query Language (SQL) Programming and Stored Procedures Programming</li>
        <li>Good knowledge in database – JDBC/ODBC & SQL Programming for Oracle, MySQL & Microsoft SQL Server</li>
        <li>Knowledge in .NET programming would be advantageous</li>
        <li>Good communication skills with positive learning attitude</li>
</div>
      
<div id="Admin" class="tabcontent">
  <h3>Description</h3>
  <p>
  - Assisting with all aspects of administrative management, hardtop updates, group bookings, events, logistics and inventory control
   <br>- Managing inventory of assets and supplies, sourcing for suppliers and vendors, preparing purchase orders and submitting invoices
   <br>- Coordinating between departments and operating units in resolving day-to-day administrative and operational problems
   <br>- Performing general office support
   <br>- Any other ad-hoc duties as and when assigned</p>
    <h3>We seek individuals:</h3>
    <ul class="careerrequirement">
        <li>Who is independent, energetic and have a keen interest in movies</li>
        <li>Minimum two years of administrative working experience</li>
        <li>Highly-organised, meticulous, hardworking and willingness to learn are important attributes</li>
        <li>Self-motivated and able to work independently</li>
        <li>Ability and maturity to communicate and interact with all levels of personnel within and outside the organisation</li>
        <li>Proficient in Microsoft office applications especially in MS Word and Excel</li>
</div>  
</div> 
    
<div class="applyNow">    
<h1 class="title">Apply Now</h1>
<form class="application-form">
          
      <form class="application-form">    
          <select name="position" class="applyInput">
            <option value="Postion">Select Postion</option>
            <option value="Film Programmer">Film Programmer</option>
            <option value="Management Trainee">Management Trainee</option>
            <option value="Software Developer">Software Developer</option>
            <option value="Administrator">Administrator</option>
          </select>
         <input name="name" type="text" class="applyInput" placeholder="Name" id="Name" required="required" />
        Birthday <input type="date" id="dateOfBirth" class="applyInput" min="1900-01-01" max="2015-09-18"  required>
        <input name="email" type="text" class="applyInput" placeholder="Email" id="Email" required="required" />
        <input name="contactNumber" type="text" class="applyInput" placeholder="Contact Number" id="Contact" />
        <textarea name="text" class="applyInput" placeholder="Your Experience" id="experience"></textarea>
        <input type="submit" value="SUBMIT"/>
      </form>
</div>   

<script type="text/javascript" src="js/validator.js"></script>   

      <footer class="footer">
          <p>Nanyang Technological University -- School of IEM Copy Right 2016</p>
          <p>Zhao Juncheng &amp; Zhang Hanyue</p>
          <img src = "image/logo2.png" class="footerlogo">
      </footer>
  </body>
</html>
