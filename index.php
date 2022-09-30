<?php
  // For some reason, this always needs to be before any HTML at the top of the page
  session_start();
  // if someone is logged in, display it. If not it won't display anything
  if (isset($_SESSION['username'])) {
      echo '<script>';
      echo "alert(user successfully logged in)";
      echo '</script>';
  }
?>
<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="style_global.css">

  <title>Hanami Japanese Restaurant Homepage</title>

</head>

<body>
  <?php require_once('navbar.php'); ?>

  <header>
    <h1 class= "title" align = center>Hanami Japanese Restaurant</h1>
    <p class='general'> &#127844 &#127843 &#127861 &#127836</p>
  </header>

  <div class="sideWindow">
    <h2> welcome </h2>
    <h4> Business Hours</h4>
    <h6> <br>Monday to Thursday<br> </h6>
    <h6> 11AM - 10PM</h6>
    <h6> <br>Friday<br> </h6>
    <h6> 11AM - 11PM</h6>
    <h6> <br>Saturday<br> </h6>
    <h6> 12PM - 11PM</h6>
    <h6> <br>Sunday<br> </h6>
    <h6> 12PM - 10PM</h6>
    <hr>
    <h4> Phone </h4>
    <h6> <br>(301) 982-9899<br> </h6>
  </div>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
