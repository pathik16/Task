<?php
include "DBconnection.php";

session_start();
if (!(isset($_SESSION['loggedin'])) || $_SESSION['loggedin'] !== true) {

  header("Location: login_form.php");
  exit;
} else {

  if (isset($_GET['id'])) {
    global $connection;
    $id = $_GET['id'];

    $query = "DELETE FROM `Task_2` WHERE `id`='$id'";
    $result = mysqli_query($connection, $query);
    $_POST["view"] = true;

    header("Location: info_form.php");
  }
}
