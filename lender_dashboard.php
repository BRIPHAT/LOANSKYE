<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lender Dashboard</title>
</head>

<body>
    <div>
        <h1>Lender Dashboard</h1>
        <p>Welcome, <?php echo $_SESSION["loan_officer_name"]; ?>!</p>
        <ul>
            <li><a href="admit_loan.php">Admit Loan to Borrower</a></li>
            <li><a href="view_loans.php">View Loans</a></li>
        </ul>
    </div>
</body>

</html>