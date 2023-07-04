<?php
$connection = mysqli_connect('localhost', 'root', 'root', 'practice');
if (!$connection) {
  die('oops!!! database not connected');
}