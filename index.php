<?php
  session_start();
?>

<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>TakeIt Movie Booking</title>
    
        <link rel="stylesheet" href="css/viewMore.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/index.css">
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
    <li class="navItem"><a href="upcoming.php">Upcoming</a></li>
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

 <div id="slider">
   <figure>
      <img src="image/angrybird.jpg" alt>
      <img src="image/burlesque.png" alt>
      <img src="image/elysium.png" alt>
      <img src="image/stevejobs.png" alt>
      <img src="image/ted.png" alt>
   </figure>
     
     <div id="child">
         
  <select id="dropdown">
    <option value="brother" selected="selected">Brothers</option>
    <option value="iron_lady">Iron Lady</option>
    <option value="kumiko">Kumiko</option>
    <option value="assassin">Assassin</option>
  </select>
<script type="text/javascript">
function toMovie()
{
var e = document.getElementById("dropdown");
var movie = e.options[e.selectedIndex].value;
var url = "moviePage.php?movieName="+movie;
window.location.href = url;
}
</script>
<input id="search" type="image" name ="submit" src="image/search.png" href="moviePage.php" onclick="toMovie()">
     </div>
 </div>
    
      
 <div id="poster">
  <?php 
     $items = array('brothers','assassin','iron_lady','kumiko');
  ?>
  <h1 class="inCinema">In Cinema</h1>
     <input type="checkbox" class="read-more-state" id="post-1" />
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
     <label for="post-1" class="read-more-trigger"></label>
     <div>
     <br><br><br>
     <h1 class="inCinema">Upcoming</h1>
     <input type="checkbox" class="read-more-state" id="post-2" />
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
     <label for="post-2" class="read-more-trigger"></label>
     </div>
 <br><br><br>   
 <h1 class="inCinema">News</h1> 
     
 <ul id="news">
  <li><a href="news.php">
    <img src="image/News/kubo.jpg" />
    <h2>Kubo And The Two Strings</h2>
    <br><p>Have you seen Kubo and the Two Strings yet? It's got anall star cast, great soundtrack. But forget all that, check out the crazy amazing visuals, and all the love and care and technology that went into making it all happen!</p>
      </a></li>
  <li><a href="news.php">
    <img src="image/News/festival.jpg" />
    <h2>Twenty-fourth Israeli Film Festival Opens Today</h2>
    <br><p>Much like the previous iterations, the festival celebrates Israeli culture and society with films that tell compelling stories centred around issues crucial to the Israeli community that resonate universally.</p>
      </a></li>
  <li><a href="news.php">
    <img src="image/News/creed.jpg" />
      <h2>New Assassin's Creed movie Images Released!</h2>
      <br><p>One of the biggest video games in recent history is getting a very high profile movie adaptation. Apocalypse's Magneto Michael Fassbender and Inception's Marion Cotillard, Asassin's Creed will hit the cinemas in a few short months, and we're all getting really excited about it. </p>
      </a></li>
  <li><a href="news.php">
    <img src="image/News/pets.jpg".png/>
    <h2>The Secret Life Of Pets - Top Dog In this year's Kids Movies</h2>
    <br><p>The guys behind Despicable Me (and the sequel and spin-off that we've almost forgotten) have levelled up - The Secret Life of Pets is in the same league as the low-to-average Disney/Pixar films. Seriously, that's a huge compliment, because nobody does animated storytelling better!</p>
      
      </a></li>
</ul>
     
     
 </div>   
 
      <footer class="footer">
          <p>Nanyang Technological University -- School of IEM Copy Right 2016</p>
          <p>Zhao Juncheng &amp; Zhang Hanyue</p>
          <img src = "image/logo2.png" class="footerlogo">
      </footer>
  </body>
</html>