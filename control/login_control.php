<?php
session_start();
include('../include/connection.php');
error_reporting(1);
if (isset($_POST['login'])) {
    $Email = $_POST['Email'];
    $password = $_POST['password'];

    $sql = "SELECT Email FROM loan_applicant WHERE Email = '$Email' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    $result = mysqli_fetch_assoc($query2);

    if ($mysqli_num_rows($result) > 0) {
        $Email = $row['Email'];

        $_SESSION['Email'] = $Email;
        header('Location:../index.php');
        exit;
    } else {
        echo "Invalid username or password.";
    }
}
