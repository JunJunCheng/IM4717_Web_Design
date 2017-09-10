<?php
  session_start();
  include "dbconnect.php";
?>

<html>
<head>
  <title>Admin</title>
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/authmain.css">
  <link rel="stylesheet" href="../css/admin.css">    
</head>

<body>
 <style>      
      @font-face {
          font-family: Brasileirinha;
          src: url(font/Brasileirinha.ttf);
      }
      @font-face {
          font-family: Lobster;
          src: url(../font/Lobster.ttf);      
      }      
      @font-face {
          font-family: Qoh;
          src: url(font/qoh.ttf);
      }
    </style>
  <h1 class="authmainTitle" style="text-align: center; padding: 2rem 0;">Admin</h1>
  <div class="site__container">
  <div class="grid__container">
  <form action="update.php" method="post" class="form form--login">
      <p class="dropdown" style="color: black; padding-left: 4% ;">Choose Movie to Update:</p>     
    <span class="custom-dropdown">  
    <select name="moiveUpdate">
      <option value="brothers">Brothers</option>
      <option value="assassin">Assassin</option>
      <option value="iron_lady">Iron Lady</option>
      <option value="kumiko">Kumiko</option>
    </select>
      <p class="dropdown" style="color: black; padding: 3em 0 0.5em 0.2em;">Choose Item to Update:</p>
    <select name="itemUpdate">
      <option value="price">Ticket Price</option>
      <option value="dateUp">Showing Date</option>
      <option value="timeUp">Showing Time</option>
      <option value="addSlot">Add Slot</option>
    </select>
    </span>
    <p class="dropdown" style="color: black; padding: 3em 0 0.5em 0.2em;">Enter New Price:</p>  
    <input type="text" name="price" id="price" placeholder="New Price">  
    <br />
    <br />
    <input type=submit name=submit value=Submit>
  </form>
  </div>
  </div>
  <?php
  //query
  $booked="SELECT * FROM seats WHERE slotID=1 AND status='booked'";
  $result = $dbcnx->query($booked);
  $numbooked = $result->num_rows;

  echo '<p class="text--center" style="padding: 2rem 0;">You are logged in as: '.$_SESSION['valid_user'].' <br />';
  echo '<a href="logout.php">Log out</a></p><br />';
  echo '<p class="text--center">Go back to <a href="../index.php">Main</a></p>';
  
  ?>
</body>
    <footer class="footer" style="position: absolute; bottom: 0; width: 100%;">
          <p>Nanyang Technological University -- School of IEM Copy Right 2016</p>
          <p>Zhao Juncheng &amp; Zhang Hanyue</p>
          <img src = "../image/logo2.png" class="footerlogo">
      </footer>
</html>