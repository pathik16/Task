<?php
require "DBconnection.php";
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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Courgette|Pacifico:400,700">
    <title>Bootstrap Start Free Trail Sign up Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <style>
        body {
            color: #999;
            background: #e2e2e2;
            font-family: 'Roboto', sans-serif;
        }

        .form-control {
            min-height: 41px;
            box-shadow: none;
            border-color: #e1e1e1;
        }

        .form-control:focus {
            border-color: #00cb82;
        }

        .form-control,
        .btn {
            border-radius: 3px;
        }

        .form-header {
            margin: -30px -30px 20px;
            padding: 30px 30px 10px;
            text-align: center;
            background: #00cb82;
            border-bottom: 1px solid #eee;
            color: #fff;
        }

        .form-header h2 {
            font-size: 34px;
            font-weight: bold;
            margin: 0 0 10px;
            font-family: 'Pacifico', sans-serif;
        }

        .form-header p {
            margin: 20px 0 15px;
            font-size: 17px;
            line-height: normal;
            font-family: 'Courgette', sans-serif;
        }

        .signup-form {
            width: 390px;
            margin: 0 auto;
            padding: 30px 0;
        }

        .signup-form form {
            color: #999;
            border-radius: 3px;
            margin-bottom: 15px;
            background: #f0f0f0;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            padding: 30px;
        }

        .signup-form .form-group {
            margin-bottom: 20px;
        }

        .signup-form label {
            font-weight: normal;
            font-size: 14px;
        }

        .signup-form input[type="checkbox"] {
            position: relative;
            top: 1px;
        }

        .signup-form .btn {
            font-size: 16px;
            font-weight: bold;
            background: #00cb82;
            border: none;
            min-width: 200px;
        }

        .signup-form .btn:hover,
        .signup-form .btn:focus {
            background: #00b073 !important;
            outline: none;
        }

        .signup-form a {
            color: #00cb82;
        }

        .signup-form a:hover {
            text-decoration: underline;
        }
    </style>

<body>
    <div class="signup-form">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-header">
                <h2>Enter Chapter Name</h2>

            </div>

            <?php
            // if ($_SESSION['u_type'] == 'Admin') {
            ?>
                <div class="form-group">

                    <div class="col-8">

                        <select class="form-select" aria-label="Default select example" name="sbj_name">
                            <option selected>select Subject From List</option>
                            <?php
                            $query1 = "SELECT * FROM `Subject`";
                            $result1 = mysqli_query($connection, $query1);
                            while ($row = mysqli_fetch_array($result1)) {
                                echo "<option value=" . $row['sbj_name'] . " name=" . $row['sbj_id'] . ">" . $row['sbj_name'] . "</option>";
                            }

                            ?>
                        </select>
                    </div>
                </div>
            <?php
            // }
            ?>
            <div class="form-group">
                <label>Chapter Name</label>
                <input type="text" class="form-control" name="chp_name" required="required">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block btn-lg" name="addchapter">Add Chapter</button>
                <?php


                addchapter();
                ?>
            </div>

            <div class="form-group">
                <label class="form-check-label"> For Main Page <a href="school.php">Back</a>
            </div>
        </form>
    </div>
</body>

</html>
<?php }?>