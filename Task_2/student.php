<?php
include "DBconnection.php";

session_start();
if (!(isset($_SESSION['loggedin'])) || $_SESSION['loggedin'] !== true) {

    header("Location: login_form.php");
    exit;
  } else {

?>

<!DOCTYPE html>
<html lang="en">

<head> 
    <style>
        body {

            font-family: 'Roboto', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            text-align: center;
            margin: 20px;
        }

        .details {
           
            text-align: center;
            font-family: 'Roboto', sans-serif;
        }

        .btn {
            display: inline-block;
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            border: none;
           
        }

        .btn:hover {
            background-color: #45a049;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
   
    <form method="post" action=""> <br><br>

        <div class="container"> <h2> Student Page </h2> 
            <?php
            $query = "SELECT t.* from `Task_2` t join `usertype` u on u.`user_id`=t.`id` where u.`access_type`='Student' order by t.`id`";
            $result = mysqli_query($connection, $query);

            echo "<table border='1' align='center'>

        <tr>
        <th>ID</th>
        <th>Username</th>
        <th>City</th>
        <th>Contact No.</th>
        <th>Email</th>
        <th>Password</th>
        <th>Standard</th>
        <th>Button</th>
        </tr>";

            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['username'] . "</td>";
                echo "<td>" . $row['city'] . "</td>";
                echo "<td>" . $row['contact_no'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['password'] . "</td>";
                echo "<td>" . $row['std_id'] . "</td>";
                echo "<td>" . "<a class='btn' href='update_student.php?id=" . $row['id'] . "'>Update</a>" . "</td>" . "  ";
  
            }
            echo "</table>"; 
            ?> <br><br>
        </div>
    </div>

        <div class="details">
            <a class="btn" href="school.php">Back</a>
        </div>

    </form>
</body>

</html>

<?php 
}?>