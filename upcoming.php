<?php
  session_start();
  if (!isset($_SESSION['cart'])){
    $_SESSION['cart']=array();
  }
?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Upcoming</title>
    
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/index.css"> 
        <link rel="stylesheet" href="css/viewMore.css">
        <link rel="stylesheet" href="css/nowShowing.css">
    
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
    <li class="navItem"><Strong><a href="upcoming.php"><font style="color: red;"><u>Upcoming</u></font></a></Strong></li>
    <li class="navItem"><a href="news.php">News</a></li>
    <li class="navItem"><a href="career.php">Career</a></li>
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
     <div id="poster">
  <?php 
     $items = array('brothers','assassin','iron_lady','kumiko');
  ?>
  <h1 class="inCinema">Upcoming</h1>
     <input type="checkbox" class="read-more-state" id="post-3" />
     <div id="container" class="read-more-wrap">
         <ul class="img-list">
             <?php
             for($i=0; $i < count($items);$i++){
                 echo "<li>";
                 echo "<a href= moviePage.php?movieName=".$items[$i].">";
                 echo "<img src=image/InCinema/".$items[$i].".jpg>";
                 echo "<span>".$items[$i]."</span>";
                 echo "</a>";
                 echo "</li>";
                 $_SESSION['movieName'] = $items[$i];
             }
             ?>
         </ul>
         
         <ul class="img-list">
             <?php
             for($i=0; $i < count($items);$i++){
                 echo "<li>";
                 echo "<a href= moviePage.php?movieName=".$items[$i].">";
                 echo "<img src=image/InCinema/".$items[$i].".jpg>";
                 echo "<span>".$items[$i]."</span>";
                 echo "</a>";
                 echo "</li>";
                 $_SESSION['movieName'] = $items[$i];
             }
             ?>
        </ul>
         
         <ul class="img-list">
             <?php
             for($i=0; $i < count($items);$i++){
                 echo "<li class='read-more-target'>";
                 echo "<a href= moviePage.php?movieName=".$items[$i].">";
                 echo "<img src=image/InCinema/".$items[$i].".jpg>";
                 echo "<span>".$items[$i]."</span>";
                 echo "</a>";
                 echo "</li>";
                 $_SESSION['movieName'] = $items[$i];
             }
             ?>
        </ul>
         
        <ul class="img-list">
             <?php
             for($i=0; $i < count($items);$i++){
                 echo "<li class='read-more-target'>";
                 echo "<a href= moviePage.php?movieName=".$items[$i].">";
                 echo "<img src=image/InCinema/".$items[$i].".jpg>";
                 echo "<span>".$items[$i]."</span>";
                 echo "</a>";
                 echo "</li>";
                 $_SESSION['movieName'] = $items[$i];
             }
             ?>
        </ul>
        <p style="text-align: center;">---------------------------------------------------------------------</p>
     </div>
     <label for="post-3" class="read-more-trigger"></label>
     <br><br><br>
      
      <footer class="footer">
          <p>Nanyang Technological University -- School of IEM Copy Right 2016</p>
          <p>Zhao Juncheng &amp; Zhang Hanyue</p>
          <img src = "image/logo2.png" class="footerlogo">
      </footer>
  </body>
</html>
