<?php
  include "php/dbconnect.php";
  session_start();
  if(isset($_SESSION['valid_user'])){
      echo 'You are logged in as: '.$_SESSION['valid_user'].'</br>';
  }
  $movieName = $_GET['movieName'];
  
?>

<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Movie Page</title>
    
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/index.css"> 
        <link rel="stylesheet" href="css/moviePage.css"> 
    
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
    <li class="navItem"><a href="career.php">News</a></li>
    <li class="navItem"><a href="career.php">Career</a></li>
    <li class="navItem"><a href="about.php">About</a></li>
    <li class="navItem"><a href="php/authmain.php"><Strong><font style="color: red;">
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



    <section id="banner" class="clearfix" style="
        <?php 
        echo "background-image: url(image/InCinema/";
        echo $movieName; 
        echo "Banner.jpg);";
        ?>">
		<div id="banner_content_wrapper">
			<div id="poster">
				<img src="<?php echo "image/InCinema/".$movieName.".jpg"; ?>" alt="Deadpool Movie Poster" class="featured_image">
				
			</div>
			<div id="content">
				<h2 class="title"><?php echo $movieName; ?></h2>

				<p class="description">A former Special Forces operative turned mercenary is subjected to a rogue experiment that leaves him with accelerated healing powers, adopting the alter ego Deadpool.</p>

				<p class="info">R <span>|</span> 108 min <span>|</span> Action, Adventure, Comedy <span>|</span> 12 February 2016</p>
			</div>
		</div>
	</section>

        <h2 style="color: red; font-family: Lobster; font-size: 400%; margin-top: 5%; margin-bottom:5%;">Movie Trailer</h2>
            <div class="video-container" style="margin-bottom: 8%;">
              <iframe width="680" height="370" src="//www.youtube.com/embed/HSzx-zryEgM" frameborder="0" allowfullscreen></iframe>
            </div>      
      <h2 style="color: red; font-family: Lobster; font-size: 400%; margin-top: 5%; margin-bottom:5%;">Showtimes</h2>
      <section id="date-time" style="margin-bottom: 8%;">
          <?php 
          $date = 'SELECT date, showtiming FROM movie '
           ."WHERE movie_name='$movieName' ";
          $result = $dbcnx->query($date);
          $num_results = $result->num_rows;
          for ($i=0; $i <$num_results; $i++) {
             $row = $result->fetch_assoc();
             echo "<a href=seat.php?date=".htmlspecialchars(stripslashes($row['date']))."&time=".htmlspecialchars(stripslashes($row['showtiming'])).">";
             echo "<p><strong>"."Date: ";
             echo htmlspecialchars(stripslashes($row['date']));
             echo "<p><strong>"."Time: ";
             echo htmlspecialchars(stripslashes($row['showtiming']));
             echo "</a>";
          }
          ?>
      </section>

      <footer class="footer">
          <p>Nanyang Technological University -- School of IEM Copy Right 2016</p>
          <p>Zhao Juncheng &amp; Zhang Hanyue</p>
          <img src = "image/logo2.png" class="footerlogo">
      </footer>
  </body>
</html>
