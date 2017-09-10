<html>
<head>
  <title>Admin Update</title>
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
  <h1 class="authmainTitle" style="text-align: center; padding: 2rem 0;">Admin Update</h1>
    
<?php
  // create short variable names
  $moiveUpdate=$_POST['moiveUpdate'];
  $itemUpdate=$_POST['itemUpdate'];
  $price=$_POST['price'];
     
  @ $db = new mysqli('localhost', 'f33im', 'f33im', 'f33im');
 
  if (mysqli_connect_errno()) {
     echo 'Error: Could not connect to database.  Please try again later.';
     exit;
  }
    
  ?> 
    
  <div class="site__container">
  <div class="grid__container">            

<?php

  @ $db = new mysqli('localhost', 'f33im', 'f33im', 'f33im');
   
  $query = "UPDATE movie SET price = ".$price." where movie_name = '". $moiveUpdate. "'";
  echo '<p style="font-family: Lobster; font-size:120%;">Update the movie '.$moiveUpdate. ' price =$' .$price."</p>";
  echo '<br>';      
  echo '<p style="font-family: Lobster; font-size:120%;">You have updated the price.</p>';
  
  $result = $db->query($query);
  $result->free();
  $db->close();
?>
      
  </div></div>        
</body>
</html>