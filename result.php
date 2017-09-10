<?php
  include "php/dbconnect.php";
  session_start();
  if(isset($_SESSION['valid_user'])){
      echo 'You are logged in as: '.$_SESSION['valid_user'].'</br>';
  }
  $cookie_name="seats";
  $movieName=$_SESSION['movieName'];
  $date=$_SESSION['date'];
  $time=$_SESSION['time'];
  session_destroy();
?>


<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Receipt with result</title>
  
      <link rel="stylesheet" href="css/result.css">
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
  <div class="container">
  <div class="tab"></div>
  <div class="receipt">
  <div class="paper">
    <div class="title">Receipt</div>
    <div class="date">Date:<?php echo $today = date("Y/m/d");  ?></div>    
    <table>
      <tbody>
<?php 
   $price="SELECT * FROM movie where movie_name='$movieName'";
   $result1 = $dbcnx->query($price);
   $movie = $result1->fetch_assoc();
   
   if(!isset($_COOKIE[$cookie_name])) {
   echo "<tr>";
   echo "<td style='text-align: center; color: red; font-size: 120%;'>NO SEAT SELECTED</td>";
   echo "</tr>";
  } else {
   
   $iparr = split (",", $_COOKIE[$cookie_name]); 
   $seatNum = count($iparr);
   for($i=0;$i<$seatNum;$i++){
   $seats="UPDATE seats,movie_slot,movie SET seats.status='booked' "
           ."WHERE seats.slotID=movie_slot.slotID "
           ."AND movie.movie_id=movie_slot.movie_id "
           ."AND movie.movie_name='$movieName' "
           ."AND movie_slot.date='$date' "
           ."AND movie_slot.time='$time' "
           ."AND seats.seatID='$iparr[$i]'";
   $result = $dbcnx->query($seats);
   echo "<tr>";
   echo "<td>1 x ".$iparr[$i]."</td>";
   echo "<td class'right'>$".htmlspecialchars(stripslashes($movie['price']))."</td>";
   echo "</tr>";
   }
   unset($_COOKIE[$cookie_name]);
   $res = setcookie($cookie_name, '', time() - 3600);
   
   }
?>

        <tr>
        <td colspan="2" class="center">
        <input class="button" type="button" value="Pay Now" onclick="pay()"/>
        <br>
        <a href="index.php"><input class="main" type="button" value ="Main"><a>
        </td>
        </tr>
        
    </tbody>
    </table>
    <div class="sign center">
      <div class="barcode"></div>
      <br/>
      0123456789
      <br/>
      <div class="thankyou">
      Thank you for your business
      </div>
    </div>
  </div>
  
  <div>
</div>

</body>
</html>
<script>
function pay()
{
alert("Payment Successful");
window.location.href = "index.php";
}
</script>