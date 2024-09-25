<?php
session_start();
include('./include/connection.php');
error_reporting(1);
if (isset($_POST['login'])) {
    $Email = $_POST['Email'];
    $password = $_POST['password'];

    $sql = "SELECT Email FROM loan_applicant WHERE Email = '$Email' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $borrower_email = $row['Email'];

        $_SESSION['borrower_email'] = $borrower_email;
        header('Location:../index.php');
        exit;
    } else {
        echo "Invalid username or password.";
    }
}
