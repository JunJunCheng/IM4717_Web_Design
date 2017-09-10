<?php
  session_start();
?>

<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>About Us</title>
    
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/index.css"> 
        <link rel="stylesheet" href="css/about.css"> 
    
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
    <li class="navItem"><a href="nowShowing.php">NowShowing</a></li>
    <li class="navItem"><a href="upcoming.php">Upcoming</a></li>
    <li class="navItem"><a href="news.php">News</a></li>
    <li class="navItem"><a href="career.php">Career</a></li>
    <li class="navItem"><Strong><a href="about.php"><font style="color: red;"><u>About</u></font></a></Strong></li>
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
 <h1 class="title">About Us</h1>
      
 <p class = "about"> "If you watch movies regularly, forget the other websites. TakeIt is the only website you'll need."
 <br><br>
 TakeIt is an online movie ticket booking system in Singapore. This website serves as an online platform for customers to explore the movies both in cinemas and upcoming in all the Singapore cinemas, and book/preorder movie tickets online. To ensure customers find the movies they want in short time, the movies can be sorted by the release date, type and rating. Instead of going to movie theater, customers can directly select seats and make payment on this website with simple steps. Moreover, detailed information including trailers, director name, short description and ratings from IMBd and Rotten Tomatoes will be included in the website. At the same time, this website has career application web page for those people who are willing to join the company. </p>
      
      <h2 class="title">Contact Us</h2>  
      
      <form>      
        <input name="name" type="text" class="feedback-input" placeholder="Name" id="Name"/>   
        <input name="email" type="text" class="feedback-input" placeholder="Email" id="Email"/>
        <input name="contactNumber" type="text" class="feedback-input" placeholder="Contact Number" id="Contact" />
        <textarea name="text" class="feedback-input" placeholder="Comment"></textarea>
        <input type="submit" value="SUBMIT"/>
      </form>
      
      <script type="text/javascript" src="js/validator.js"></script>
      
      
      <footer class="footer">
          <p>Nanyang Technological University -- School of IEM Copy Right 2016</p>
          <p>Zhao Juncheng &amp; Zhang Hanyue</p>
          <img src = "image/logo2.png" class="footerlogo">
      </footer>
  </body>
</html>
