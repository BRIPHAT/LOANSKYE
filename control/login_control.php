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
