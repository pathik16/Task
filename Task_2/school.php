<?php
include "DBconnection.php";
include "function_login.php";

session_start();
if (!(isset($_SESSION['loggedin'])) || $_SESSION['loggedin'] !== true) {

    header("Location: login_form.php");
    exit;
  } else {

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>

    body {     
      font-family: 'Roboto', sans-serif;
    }

    .container {
      text-align: center;
      margin: 20px;
    }

    .btn {
      display: inline-block;
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      text-decoration: none;
      border-radius: 5px;
      border: none;
      font-size: 20px;
    }

    .btn:hover {
      background-color: #45a049;
    }
  </style>
</head>

<body>
  <div class="container">
    <h2>Welcome <?php session_start();
                echo $_SESSION['u_type'] . " , " . $_SESSION['u_name']; ?> :</h2>
    <form method="post" action="" enctype="multipart/form-data">
      <input class="btn" type="submit" name="subject" value="Subject">
      <?php ?>
      <input class="btn" type="submit" name="chapter" value="Chapter">
      <?php ?>
      <input class="btn" type="submit" name="standard" value="Standard">
      <?php ?>
      <a class="btn" href="student.php"> Student </a>
      <?php ?>

      <br><br>

      <div class="form-group">
        <label class="form-check-label"> For Main Page <a href="info_form.php">Back</a>
      </div>
    </form>
  </div>
</body>

</html>
<?php

subjectview();
chapterview();
standardview();

  }
?>