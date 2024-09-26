<?php
include '../include/connection.php';
error_reporting(1);
if (isset($_POST['submit'])) {
    $Firstname = $_POST['Firstname'];
    $Phone_number = $_POST['Phone_number'];
    $Email = $_POST['Email'];
    $password = md5($_POST['password']);
    $confirm_password = md5($_POST['confirm_password']);
    $Phone_number = preg_replace('/[^0-9]/', '', $Phone_number);
    $Email = trim($Email);


    if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email address format!";
        exit;
    }

    $sql = "SELECT Email, Phone_number FROM loan_applicant WHERE Email='$Email' and Phone_number ='$Phone_number'";
    $query = mysqli_query($conn, $sql);
    if (mysqli_num_rows($query) > 0) {
        if (strlen($Phone_number) != 10) {
            echo "Invalid phone number format!";
            header("Location: ../borrower_register.php?error=user_already_exists&submitted=data_successful");
            exit;
        }
    } else {

        $sql2 = "CALL Sp_addLoanApplicant('$Firstname','$Phone_number','$Email','$password','$confirm_password')";
        /*"INSERT INTO loan_applicant(Firstname,Phone_number,Email,password,confirm_password)
            VALUES('$Firstname','$Phone_number','$Email','$password','$confirm_password')";*/
        $query2 = mysqli_query($conn, $sql2);
        if ($query2) {
            header("location:../login.php?submited=data_successful");
        }
    }
}
