<?php
include('../include/connection.php');
error_reporting(1);
if (isset($_POST['submit'])) {
    $Lastname = $_POST['Lastname'];
    $Physical_address = $_POST['Physical_address'];
    $date_of_birth = $_POST['date_of_birth'];
    $country = $_POST['country'];
    $city = $_POST['city'];
    $street = $_POST['street'];
    $house_number = $_POST['house_number'];
    $ownership = $_POST['ownership'];
    $Profile = $_POST['Profile'];
    $National_Identification = $_POST['National_Identification'];
    $credit_score = $_POST['credit_score'];
    $Value = $_POST['Value'];
    $collateral_taken_type = $_POST['collateral_taken_type'];
    $Description = $_POST['Description'];
    $sponsor_name = $_POST['sponsor_name'];
    $contact_sponsor = $_POST['contact_sponsor'];
    $profile_sponsor = $_POST['profile_sponsor'];
    $document_sponsor = $_POST['document_sponsor'];
    $Amount_of_loan = $_POST['Amount_of_loan'];
    $Loan_Purpose = $_POST['Loan_Purpose'];
    $sql2 = "INSERT INTO loan_applicant(Lastname,Physical_address,date_of_birth,country,city,street,house_number,ownership,Profile,National_Identification,
            credit_score,sponsor_name,contact_sponsor,profile_sponsor,document_sponsor,Amount_of_loan,
            Loan_Purpose)
            VALUES(''$Lastname','$Physical_address','$date_of_birth','$country','$city','$street','$house_number','$ownership','$Profile','$National_Identification',
            '$credit_score','$sponsor_name','$contact_sponsor','$profile_sponsor','$document_sponsor','$Amount_of_loan',
            '$Loan_Purpose')";
    $query2 = mysqli_query($conn, $sql2);
    if ($query2) {
        header("location: login.php?submited=1");
    }
}
if (isset($_GET["submitted"])) {
    echo "<script>alert('form succesfuly uploaded')</script>";
}
