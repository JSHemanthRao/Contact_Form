<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
include "db_connect.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name    = $_POST['name'] ?? '';
    $email   = $_POST['email'] ?? '';
    $phone   = $_POST['phone'] ?? '';
    $message = $_POST['message'] ?? '';

    $error = false;
    function showPopup($message, $type = 'danger') {
    echo "
    <div class='alert alert-$type alert-dismissible fade show' role='alert'>
        $message
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
        </button>
    </div>";
}


    // VALIDATION
    if (empty($name) || empty($email) || empty($phone) || empty($message)) {
    
    showPopup('All fields are required', 'warning');
    $error = true;

} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    
    showPopup('Please enter a valid email address', 'warning');
    $error = true;

} elseif (!preg_match('/^[0-9]{10}$/', $phone)) {
    
    showPopup('Phone number must be 10 digits', 'warning');
    $error = true;

}


    if (!$error) {

        $sql = "INSERT INTO contact_form (name, email, phone, message)
                VALUES ('$name', '$email', '$phone', '$message')";

        $result = mysqli_query($conn, $sql);

        if ($result) {

            // SEND EMAIL TO THE USER
            $mail = new PHPMailer(true);

            try {
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;

                $mail->Username = 'hemanthraojamena@gmail.com';
                $mail->Password = 'kqagnagpahrdjgxv'; 

                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $mail->Port = 587;

                $mail->setFrom('hemanthraojamena@gmail.com', 'Contact Form');
                $mail->addAddress($email);

                $mail->isHTML(true);
                $mail->Subject = "Contact Form Submitted";
                $mail->Body = "
                    <h3>Thank you for contacting us</h3>
                    <p>Your form was submitted successfully.</p>
                ";

                $mail->send();
                $email_msg = "Email sent!";
            } catch (Exception $e) {
                $email_msg = "Email failed: {$mail->ErrorInfo}";
            }

            echo "
            <div class='alert alert-success alert-dismissible fade show' role='alert'>
              Form submitted successfully! $email_msg
              <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
              </button>
            </div>";


            $name = $email = $phone = $message = "";

        } else {
            echo "<script>alert('Database Error: " . mysqli_error($conn) . "');</script>";
        }
    }
}

?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <title>Form</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#"><img style="height:40px; width:auto;" src="https://res.cloudinary.com/dxr1e1b9j/image/upload/v1764944689/PHP-logo.svg_ni4r5w.png" /></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/contact_form/view.php">View Records</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container mt-5" style="max-width: 600px;">

    <h3 class="mb-4">Contact Form</h3>

    <form action="index.php" method="POST">

      <div class="form-group mb-3">
        <label>Name</label>
        <input placeholder="Enter Name" type="text" class="form-control" name="name" required>
      </div>

      <div class="form-group mb-3">
        <label>Email</label>
        <input placeholder="Enter Email" type="email" class="form-control" name="email" required>
      </div>

      <div class="form-group mb-3">
        <label>Phone</label>
        <input placeholder="Enter Phone Number" type="text" class="form-control" name="phone" required>
      </div>

      <div class="form-group mb-3">
        <label>Message</label>
        <textarea class="form-control" name="message" rows="5" required></textarea>
      </div>

      <button type="submit" class="btn btn-primary px-4">Submit</button>

    </form>

  </div>



  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>
