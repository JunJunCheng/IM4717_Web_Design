<?php //authmain.php
include "dbconnect.php";
session_start();

if (isset($_POST['userid']) && isset($_POST['password']))
{
  // if the user has just tried to log in
  $userid = $_POST['userid'];
  $password = $_POST['password'];
/*
  $db_conn = new mysqli('localhost', 'webauth', 'webauth', 'auth');

  if (mysqli_connect_errno()) {
   echo 'Connection to database failed:'.mysqli_connect_error();
   exit();
  }
*/
$password = md5($password);
$query = 'select * from user '
           ."where username='$userid' "
           ." and password='$password'";
// echo "<br>" .$query. "<br>";
$result = $dbcnx->query($query);
  if ($result->num_rows >0 )
  {
    // if they are in the database register the user id
    $_SESSION['valid_user'] = $userid;    
  }
  $query1 = 'select * from user '
           ."where username='$userid' ";
$result1 = $dbcnx->query($query1);
$type = $result1->fetch_assoc(); 
  if ($result1->num_rows >0 )
  {
    // if they are in the database register the user id
    $_SESSION['type'] = $type['type'];    
  }
  $dbcnx->close();
}
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
<div>    
<h1 class="authmainTitle" style="text-align: center; padding: 2rem 0;">Sign In</h1>
</div>
       
<?php
  if (isset($_SESSION['valid_user']))
  {
      if ($_SESSION['type']=='admin')
      {
          header( "Location: admin.php" ); 
          exit;
      }
      else{
          echo '<p class="text--center" style="padding: 2rem 0;">You are logged in as: '.$_SESSION['valid_user'].' <br />';
          echo '<a href="logout.php">Log out</a></p><br />';
          echo '<p class="text--center">Go back to <a href="../index.php">Main</a></p>';

      }
  }
  else
  {
    if (isset($userid))
    {
      // if they've tried and failed to log in
      echo '<p class="text--center" style="padding: 2rem 0;">Could not log you in.</p><br />';
    }
    else 
    {
      // they have not tried to log in yet or have logged out
      echo '<p class="text--center" style="padding: 2rem 0;">You are not logged in.</p><br />';
    }
      
    //prive log in form    
     echo '<div class="site__container">';
     echo '<div class="grid__container">';
     echo '<form action="authmain.php" method="post" class="form form--login">';
     echo '<div class="form__field">';
     echo '<label class="fontawesome-user"><span class="hidden">Username</span></label>';
     echo '<input id="login__username" type="text" name="userid" class="form__input" placeholder="Username" required>';
     echo '</div>';
     echo '<div class="form__field">';
     echo '<label class="fontawesome-lock"><span class="hidden">Password</span></label>';
     echo '<input id="login__password" type="password" name="password" class="form__input" placeholder="Password" required>';
     echo '</div>';
     echo '<div class="form__field">';
     echo '<input type="submit" value="Log in">';
     echo '</div>';
     echo '</form>';
     echo '<p class="text--center">Not a member? <a href="registration.html">Sign up now</a> <span class="fontawesome-arrow-right"></span></p>';
     echo '<p class="text--center">Go back to <a href="../index.php">Main</a></p>';
     echo '</div></div>';
  }
?>
<br />
</body>
    <footer class="footer" style="position: absolute; bottom: 0; width: 100%;">
          <p>Nanyang Technological University -- School of IEM Copy Right 2016</p>
          <p>Zhao Juncheng &amp; Zhang Hanyue</p>
          <img src = "../image/logo2.png" class="footerlogo">
      </footer>
</html>
