<?php // register.php
include "dbconnect.php";
if (isset($_POST['submit'])) {
	if (empty($_POST['username']) || empty ($_POST['password'])
		|| empty ($_POST['password2']) ) {
	echo "All records to be filled in";
	exit;}
	}
$username = $_POST['username'];
$password = $_POST['password'];
$password2 = $_POST['password2'];

// echo ("$username" . "<br />". "$password2" . "<br />");
if ($password != $password2) {
	echo '<p style="padding: 2rem 0 0 2rem;">Sorry, passwords do not match</p>';
    echo '<p style="padding-left: 2rem;">Please <a href="registration.html">Try Again</a></p>';
	exit;
	}
$password = md5($password);
// echo $password;

$query = 'select * from user '
           ."where username='$username' ";
// echo "<br>" .$query. "<br>";
  $sql = $dbcnx->query($query);
  if ($sql->num_rows >0 )
  {
  // if they are in the database register the user id
  echo '<p style="padding: 2rem 0 0 2rem;">Username already exists</p><br/>';
  echo '<p style="padding-left: 2rem;">Please <a href="registration.html">Try Again</a></p>';
  }
  else{
  $sql = "INSERT INTO user (username, password) 
		VALUES ('$username', '$password')";
  //	echo "<br>". $sql. "<br>";
  $result = $dbcnx->query($sql);
  echo '<p style="padding: 2rem 0 0 2rem;"> Welcome<?php echo $_POST["username"]; ?>. You are now registered </p>';
  echo '<p style="padding-left: 2rem;">Go back to <a href="../index.php">Main</a></p>';
  }
?>

<html>
    <head>
    <meta charset="UTF-8">
    <title>Log In</title>    
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/authmain.css"> 
    </head>
</html>