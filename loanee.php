<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOANSKYE</title>
</head>

<body>
    <form action="calculate_interest.php" method="post">
        <label for="loan_amount">Loan Amount:</label>
        <input type="number" id="loan_amount" name="loan_amount" required>
        <button type="submit">Calculate Interest</button>
    </form>
    <div>
        <table>
            <tr>
                <th>Loan Amount</th>
                <td><?php echo $loan->getLoanAmount(); ?></td>
            </tr>
            <tr>
                <th>Interest Amount/Rate</th>
                <td><?php echo $loan->getInterestAmountRate(); ?></td>
            </tr>
            <tr>
                <th>Loan Date</th>
                <td><?php echo $loan->getLoanDate(); ?></td>
            </tr>
            <tr>
                <th>Loan Status</th>
                <td><?php echo $loan->getLoanStatus(); ?></td>
            </tr>
            <tr>
                <th>Description</th>
                <td><?php echo $loan->getDescription(); ?></td>
            </tr>
            <tr>
                <th>Term</th>
                <td><?php echo $loan->getTerm(); ?></td>
            </tr>
            <tr>
                <th>Disbursement Date</th>
                <td><?php echo $loan->getDisbursementDate(); ?></td>
            </tr>
            <tr>
                <th>Created At</th>
                <td><?php echo $loan->getCreatedAt(); ?></td>
            </tr>
            <tr>
                <th>Updated At</th>
                <td><?php echo $loan->getUpdatedAt(); ?></td>
            </tr>
            <tr>
                <th>Admitted to Borrower</th>
                <td><?php echo $loan->getAdmittedToBorrower(); ?></td>
            </tr>
        </table>
    </div>

</body>

</html>