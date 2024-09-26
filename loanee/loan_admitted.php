<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOANSKYE</title>
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <h1>Admit Loan to Borrower</h1>
    <form action="../control/loan_admitted_control.php" method="post">
        <fieldset class="background-register">
            <fieldset class=" register">
                <label for="borrower_name">Borrower Name:</label>
                <input type="text" id="borrower_name" name="borrower_name" required><br>

                <label for="loan_amount">Loan Amount:</label>
                <input type="number" id="loan_amount" name="loan_amount" required><br>

                <label for="loan_term">Loan Term:</label>
                <input type="number" id="loan_term" name="loan_term" required><br>

                <label for="interest_rate">Interest Rate:</label>
                <input type="number" id="interest_rate" name="interest_rate" required><br>

                <input type="submit" value="Admit Loan">
            </fieldset>
        </fieldset>
    </form>
</body>

</html>