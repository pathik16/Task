<?php
session_start();
if (!(isset($_SESSION['loggedin'])) || $_SESSION['loggedin'] !== true) {

    header("Location: login_form.php");
    exit;
  } else {

include "DBconnection.php";

echo "<table border='1' align='center'>

<tr>
<th>ID</th>
<th>Username</th>
<th>City</th>
<th>Contact No.</th>
<th>Email</th>
<th>Password</th>
<th colspan='5' >Buttons</th>
</tr>";

while ($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['username'] . "</td>";
  echo "<td>" . $row['city'] . "</td>";
  echo "<td>" . $row['contact_no'] . "</td>";
  echo "<td>" . $row['email'] . "</td>";
  echo "<td>" . $row['password'] . "</td>";

  echo "<td>" . "<a class='btn' href='view_column.php?id=" . $row['id'] . "'>View</a>" . "</td>" . "  ";
  echo "<td>" . "<a class='btn' href='edit_column.php?id=" . $row['id'] . "'>Edit</a>" . "</td>" . "  ";
  echo "<td>" . "<a class='btn' href='delete_column.php?id=" . $row['id'] . "'>Delete</a>" . "</td>" . "  ";
  echo "</tr>";
}
echo "</table>";

include "Logout.php";

}
