<?php
include('../include/connection.php');
error_reporting(1);
if (isset($_POST['submit'])) {
    $Firstname = $_POST['Firstname'];
    $Phone_number = $_POST['Phone_number'];
    $Email = $_POST['Email'];
    $password = md5($_POST['password']);
    $confirm_password = md5($_POST['confirm_password']);

    $sql = "SELECT Email, Phone_number FROM loan_applicant WHERE Email='$Email'";
    $query = mysqli_query($conn, $sql);
    if (mysqli_num_rows($query) > 0) {
        header("location:../borrower_register.php?error=1");
    } else {

        $sql2 = "INSERT INTO loan_applicant(Firstname,Phone_number,Email,password,confirm_password)
            VALUES('$Firstname','$Phone_number','$Email','$password','$confirm_password')";
        $query2 = mysqli_query($conn, $sql2);
        if ($query2) {
            header("location:login.php?submited=1");
        }


        //$sql = "CALL insertBorrowerData('" . $Firstname . "', '" . $Phone_number . "','" . $Email . "','" . $password . "','" . $confirm_password . "')";
        if (isset($_GET["error"])) {
            echo '<script>alert("user already exist")</script>';
        } else {
            if (isset($_GET["submit"])) {
                echo '<script>alert("data submited")</script>';
            }
        }
    }
}
