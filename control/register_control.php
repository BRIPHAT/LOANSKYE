<?php
include '../include/connection.php';
error_reporting(0);
if (isset($_POST['submit'])) {
    $Firstname = $_POST['Firstname'];
    $Lastname = $_POST['Lastname'];
    $Phone_number = $_POST['Phone_number'];
    $Pysical_address = $_POST['Pysical_address'];
    $Email = $_POST['Email'];
    $date_of_birth = $_POST['date_of_birth'];
    $country = $_POST['country'];
    $city = $_POST['city'];
    $street = $_POST['street'];
    $house_number = $_POST['house_number'];
    $ownership = $_POST['ownership'];
    $Profile = $_POST['Profile'];
    $National_Identification = $_POST['National_Identification'];
    $credit_score = $_POST['credit_score'];
    $sponsor_name = $_POST['sponsor_name'];
    $profile_sponsor = $_POST['profile_sponsor'];
    $document_sponsor = $_POST['document_sponsor'];
    $Amount_of_loan = $_POST['Amount_of_loan'];
    $Loan_Purpose = $_POST['Loan_Purpose'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    $sql = "SELECT * FROM loan_applicant WHERE Email='$Email' && Phone_number='$Phone_number'";
    $query = mysqli_query($conn, $sql);
    if (mysqli_num_rows($query) > 0) {
        echo "Loan detailed already exist! Try to login again";
    } else {
        $sql2 = "INSERT INTO loan_applicant(Firstname,Lastname,Phone_number,Physical_address,Email,
            date_0f_birth,country,city,street,house_number,ownership,Profile,National_identification,
            credit_score,sponsor_name,contact_sponsor,profile_sponsor,document_sponsor,Amount_of_loan,
            Loan_Purpose,password,confirm_password)
            VALUES('$Firstname','$Lastname','$Phone_number','$Physical_address','$Email',
            '$date_0f_birth','$country','$city','$street','$house_number','$ownership','$Profile','$National_identification',
            '$credit_score','$sponsor_name','$contact_sponsor','$profile_sponsor','$document_sponsor','$Amount_of_loan',
            '$Loan_Purpose','$password','$confirm_password')";
        $query2 = mysqli_query($conn, $sql2);
        if ($query2) {

            echo "successfull uploaded detail";
        }
    }
}
