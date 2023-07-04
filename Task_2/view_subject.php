<?php 
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
    <title>Document</title>
    <style>
        .btnsubmit{
            text-align: center;
            padding: 10px;
        }
    </style>
</head>
<body>
    
</body>
</html>

<?php

include "DBconnection.php";

echo "<table border='1' align='center'>

<tr>
<th>Id</th>
<th>Standard Id</th>
<th>Subjects</th>

<th colspan='5' >Buttons</th>
</tr>";

// deletecolumn();

while ($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['std_id'] . "</td>";
  echo "<td>" . $row['sbj_name'] . "</td>";

  echo "<td>" . "<a class='btn' href='update_sbj.php?id=" . $row['id'] . "'>Update</a>" . "</td>" . "  ";
  echo "<td>" . "<a class='btn' href='delete_sub.php?id=" . $row['id'] . "'>Delete</a>" . "</td>" . "  ";
  echo "</tr>";
}
echo "</table>";
echo"<div class='btnsubmit'>";
echo "<td>" . "<a class='btn'  href='addsubject.php?id=" . $row['id'] . "'>Add Subject</a>" . "</td>" . "  ";
echo"</div>";

include "Logout.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class='btnsubmit'>
<a class='btn' href="school.php">Back</a>
</div>
</body>
</html>
<?php
  }
?>