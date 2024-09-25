<?php
session_start();
include_once('control/register_control.php');
if (isset($_GET["submited"]) && $_GET["submited"] == "data_successful") {
    $message = "Congratulations! You have successfully registered. Please login to access your account.";
    $subject = "Registration Successful";
    $Email = $Email;
    $Email = $_SESSION['email'];
    $headers = "From: $Email\r\n";
    mail($Email, $subject, $message, $headers);

    echo "<p style='color: green;'>$message</p>";
    echo "<p>A confirmation email has been sent to your email address.</p>";
} else {

    echo "<p style='color: red;'>Registration failed. Please try again.></p>";
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOANSKYE</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <form action="control/login_control.php" method="post">
        <fieldset class="login">
            <h1>LOGIN IN LOANSKYE</h1>
            <label for="email">Email:</label>
            <input type="email" name="Email" id="Email" placeholder="example@gmail.com"><br>
            <label for="Phone_number">Phone Number:</label>
            <input type="number" name="Phone_number" id="Phone_number"><br>
            <label for="password">Password:</label>
            <input type="password" name="password" id="passwordl"><br>
            <input type="submit" value="SUBMIT">
        </fieldset>
    </form>
</body>

</html>