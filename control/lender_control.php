<?php
include('../include/connection.php');
error_reporting(1);
if (isset($_POST[''])) {
    $loan_officer_name = $_POST["loan_officer_name"];
    $phone_number = $_POST["phone_number"];
    $email = $_POST["email"];
    $role = $_POST["role"];

    $query = "INSERT INTO lenders (loan_officer_name, phone_number, email, role) VALUES ('$loan_officer_name', '$phone_number', '$email', '$role')";
    $result = mysqli_query($conn, $query);
    if ($result) {


        header("Location: lender_dashboard.php");
        exit;
    }
}
