<?php
require "DBconnection.php";

session_start();
if (!(isset($_SESSION['loggedin'])) || $_SESSION['loggedin'] !== true) {

    header("Location: login_form.php");
    exit;
  } else {

if (isset($_GET['id'])) {
    $connection;
    $id = $_GET['id'];

    $query = "SELECT * FROM `Task_2` WHERE `id`='$id'";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_array($result);

    $id = $row['id'];
    $username = $row['username'];
    $city = $row['city'];
    $contact_no = $row['contact_no'];
    $email = $row['email'];
    $password = $row['password'];
    $image = $row['image'];

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
            .img{
                width: 200px;
                height: 200px;
            }

            .coverimg{
                text-align: center;
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
                    <h2><?php echo $username; ?>'s Details</h2>
                    <p>You can verify the details here.</p>
                </div>
                <div class="form-group">
                    <div class="coverimg">
                    <img class="img" src="../Task_2/image/<?php echo $image; ?>" alt="<?php echo $image; ?>">
                    </div>                
                </div>
                <div class="form-group">
                    <label>id</label>
                    <input type="int" class="form-control" name="id" value="<?php echo $id; ?>" required="required">
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" name="username" value="<?php echo $username; ?>" required="required">
                </div>
                <div class="form-group">
                    <label>City</label>
                    <input type="text" class="form-control" name="city" value="<?php echo $city; ?>" required="required">
                </div>
                <div class="form-group">
                    <label>Contact no.</label>
                    <input type="int" class="form-control" name="contact_no" value="<?php echo $contact_no; ?>" required="required">
                </div>
                <div class="form-group">
                    <label>Email Address</label>
                    <input type="email" class="form-control" name="email" value="<?php echo $email; ?>" required="required">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" value="<?php echo $password; ?>" required="required">
                </div>

            </form>
            <div class="text-center">
                <label class="form-check-label"> For Main Page <a href="info_form.php">Back</a>

            </div>
        </div>
    </body>

    </html>

<?php
}
}
?>