<?php
require_once "../include/connection.php";
if (isset($_POST['login-submit'])) {
    $Email = $_POST['Email'];
    $Phone_number = $_POST['Phone_number'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM loan_applicant WHERE Email = '$Email'";
    $query = mysqli_query($conn, $sql);


    if ($query) {
        header('Location:../index.php?login-success=login_successful');
    }
}
/*
    if (isset($_GET["login-success"]) && $_GET["login-success"] == "login_successful") {
        $message = "Congratulations! You have successfully login. Welcome into LOANSKYE.";
        echo "<p style='color: green;'>$message</p>";
    } else {

        echo "<p style='color: red;' hidden='off';>Login failed. Please try again.</p>";
    }
}
*/