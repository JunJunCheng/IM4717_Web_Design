<?php
  include "php/dbconnect.php";
  session_start();
  $movieName = $_GET['movieName'];
  $_SESSION['movieName']=$movieName;
  $date = $_GET['date'];
  $_SESSION['date']=$date;
  $time = $_GET['time'];
  $_SESSION['time']=$time;
?>

<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Movie Page</title>
    
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/index.css"> 
        <link rel="stylesheet" href="css/seatBooking.css"> 

    
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
      
<div class="cinema">
    <div class="screen">
        <h1>SCREEN</h1>
    </div>
    
    <?php 
    echo "<ol class='cabin fuselage'>";
    for ($row='A'; $row<'J';$row++){
      echo "<li class='row row--".$row."'>";
      echo "<ol class='seats' type='".$row."'>";
      for ($colum=1; $colum<15; $colum++ ){
          //query each seat to check status
          
          //query seat booking result from sql
          //SELECT `seats`.`status` 
          //FROM  `seats`,`movie`
          //WHERE  `seats`.`movie_id` = `movie`.`movie_id`
          //AND `seats`.`seat_row` = 'A'
          //AND `seats`.`seat_colum`='1'
          //AND `movie`.`movie_name` = 'her'
          //AND  `seats`.`date` =  '2016-10-27'
          //AND  `seats`.`time` =  '18:00:00'
          $book = 'SELECT seats.status FROM seats,movie,movie_slot '
          ."WHERE seats.slotID=movie_slot.slotID "
          ."AND movie.movie_id=movie_slot.movie_id "
          ."AND seats.seat_row='$row' "
          ."AND seats.seat_colum='$colum' "
          ."AND movie.movie_name='$movieName' "
          ."AND movie_slot.date='$date' "
          ."AND movie_slot.time='$time'";
          $result = $dbcnx->query($book);
          $status = $result->fetch_assoc(); 
          echo "<li class='seat'>";
          if ($status["status"] == 'not booked'){
          echo "<input onclick='seats()' type='checkbox' name='seat[]' id='".$row.$colum."'/>";
          echo "<label for='".$row.$colum."'>".$row.$colum."</label>";
          }else{
          echo "<input type='checkbox' disabled id='".$row.$colum."'/>";
          echo "<label for='".$row.$colum."'>Occupied</label>";
          }
          echo "</li>";
      }
    echo "</ol>";
    echo "</li>";
    }
    echo "</ol>";
    if (isset($_POST['seat[]']))
    {
    $seats="<script type=text/javascript>document.write(vals)</script>"; 
    echo $seats;
    }
    ?>
    <div>
    <script type="text/javascript">
    function seats(){
    var checkboxes = document.getElementsByName('seat[]');
    var vals = [];
    for (var i=0, n=checkboxes.length;i<n;i++) 
    {
    if (checkboxes[i].checked) 
    {
        vals.push(checkboxes[i].id);
    }
    }
    document.cookie="seats="+vals; 
    var strCookie=document.cookie; 
    };
    </script>
    <button style="margin-left: 41%; margin-top: 5%; margin-right: 5%; margin-bottom: 3%; font-family:Lobster; font-size: 120%; text-decoration:none;"><a href='result.php'>SUBMIT</a></button>
    <button style="margin-right: 5%; margin-top: 5%; margin-bottom: 3%; font-family:Lobster; font-size: 120%; text-decoration:none;"><a href='index.php'>CANCLE</a></button>
    </div>
</div>

      <footer class="footer">
          <p>Nanyang Technological University -- School of IEM Copy Right 2016</p>
          <p>Zhao Juncheng &amp; Zhang Hanyue</p>
          <img src = "image/logo2.png" class="footerlogo">
      </footer>
  </body>
</html>