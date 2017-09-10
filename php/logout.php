<?php
  session_start();
  
  // store to test if they *were* logged in
  $old_user = $_SESSION['valid_user'];  
  unset($_SESSION['valid_user']);
  unset($_SESSION['type']);
  session_destroy();
?>
<html>
    <head>
    <meta charset="UTF-8">
    <title>Log In</title>    
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/authmain.css"> 
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
<h1 class="authmainTitle" style="text-align: center; padding: 2rem 0;">Log out</h1>
<?php 
  if (!empty($old_user))
  {
    echo '<p class="text--center" style="padding: 2rem 0;">Logged out.</p><br />';
  }
  else
  {
    // if they weren't logged in but came to this page somehow
    echo '<p class="text--center" style="padding: 2rem 0;">You were not logged in, and so have not been logged out.</p><br />'; 
  }
?> 
<p class="text--center">Go back to <a href="../index.php">Main</a></p>
</body>
     <footer class="footer" style="position: absolute; bottom: 0; width: 100%;">
          <p>Nanyang Technological University -- School of IEM Copy Right 2016</p>
          <p>Zhao Juncheng &amp; Zhang Hanyue</p>
          <img src = "../image/logo2.png" class="footerlogo">
      </footer>
</html>
