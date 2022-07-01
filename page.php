<?php 
 if (!empty($_POST)) {
  // set the cookie with the submitted user data
  setcookie('color',$_POST['color'].date('r'),time()+2592000);
  setcookie('name', $_POST['name'].date('r'),time()+2592000);
  // redirect the user to final landing page so cookie info is available
  header("Location:page.php");
 } else {
  echo "<b>fav color:</b>".$_COOKIE['color'];
  echo "<b>name:</b>".$_COOKIE['name'];
  
 }
?>