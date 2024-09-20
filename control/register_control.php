<?php
include('../include/connection.php');
error_reporting(1);
if (isset($_POST['submit'])) {
    $Firstname = $_POST['Firstname'];
    $Lastname = $_POST['Lastname'];
    $Phone_number = $_POST['Phone_number'];
    $Physical_address = $_POST['Physical_address'];
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
    $Value = $_POST['Value'];
    $collateral_taken_type = $_POST['collateral_taken_type'];
    $Description = $_POST['Description'];
    $sponsor_name = $_POST['sponsor_name'];
    $contact_sponsor = $_POST['contact_sponsor'];
    $profile_sponsor = $_POST['profile_sponsor'];
    $document_sponsor = $_POST['document_sponsor'];
    $Amount_of_loan = $_POST['Amount_of_loan'];
    $Loan_Purpose = $_POST['Loan_Purpose'];
    $password = md5($_POST['password']);
    $confirm_password = md5($_POST['confirm_password']);

    $sql = "SELECT * FROM loan_applicant WHERE Email='$Email'";
    $query = mysqli_query($conn, $sql);
    if (mysqli_num_rows($query) > 0) {
        header('location:../borrower_register.php', "user already exist");
    } else {

        $sql2 = "INSERT INTO loan_applicant(Firstname,Lastname,Phone_number,Physical_address,Email,
            date_of_birth,country,city,street,house_number,ownership,Profile,National_Identification,
            credit_score,sponsor_name,contact_sponsor,profile_sponsor,document_sponsor,Amount_of_loan,
            Loan_Purpose,password,confirm_password)
            VALUES('$Firstname','$Lastname','$Phone_number','$Physical_address','$Email',
            '$date_of_birth','$country','$city','$street','$house_number','$ownership','$Profile','$National_Identification',
            '$credit_score','$sponsor_name','$contact_sponsor','$profile_sponsor','$document_sponsor','$Amount_of_loan',
            '$Loan_Purpose','$password','$confirm_password')";
        $query2 = mysqli_query($conn, $sql2);

        $sql3 = "INSERT INTO collateral(Value,collateral_taken_type,Description)
                VALUES('$Value','$collateral_taken_type','$Description')";
        $query3 = mysqli_query($conn, $sql3);
        if ($query2 && $query3) {

            echo "successfull uploaded detail";
        }
    }
}
