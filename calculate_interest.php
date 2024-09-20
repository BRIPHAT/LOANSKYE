<?php
include('include/connection.php');
// Retrieve the loan amount from the user input
$loan_amount = $_POST['loan_amount'];

// Query the database to retrieve the interest rate based on the loan amount
$sql = "SELECT interest_rate FROM loanee WHERE loanAmount <= '$loan_amount' ORDER BY loan_amount DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Retrieve the interest rate from the database
    $interest_rate = $result->fetch_assoc()['interest_rate'];

    // Calculate the interest amount
    $interest_amount = $loan_amount * ($interest_rate / 100);

    // Display the results
    echo "Loan Amount: $" . $loan_amount . "<br>";
    echo "Interest Rate: " . $interest_rate . "%<br>";
    echo "Interest Amount: $" . $interest_amount . "<br>";
} else {
    echo "No interest rate found for the loan amount.";
}
