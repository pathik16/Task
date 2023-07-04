<?php
include "DBconnection.php";

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
    <form method="post" action="info_form.php" enctype="multipart/form-data">

      <?php
      if ($_SESSION['u_type'] == 'Admin' or $_SESSION['u_type'] == 'Teacher') { ?>

        <input class="btn" type="submit" name="view" value="View">
      <?php
      }
      ?>

      <?php
      if ($_SESSION['u_type'] == 'Admin' or $_SESSION['u_type'] == 'Teacher') { ?>

        <a class="btn" href="adduser.php">Add User</a>
      <?php
      }
      ?>

      <a class="btn" href="logout_form.php">Logout</a>
      <?php
      if ($_SESSION['u_type'] == 'Admin' or $_SESSION['u_type'] == 'Teacher') {
        echo "<a class='btn'href='school.php'>School</a>";
      }
      ?>

      <br><br>
    </form>
  </div>
</body>

</html>
<?php
if (!(isset($_SESSION['loggedin'])) || $_SESSION['loggedin'] !== true) {

  header("Location: login_form.php");
  exit;
} else {
  include "function_login.php";
  viewData();
}
?>