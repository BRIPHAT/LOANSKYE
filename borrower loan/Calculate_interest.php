<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOANSKYE</title>
</head>

<body>
    <form action="../calculate_interest_control.php" method="post">
        <label for="loan_amount">Loan Amount:</label>
        <input type="number" id="loan_amount" name="loan_amount" required>
        <button type="submit">Calculate Interest</button>
        <?php echo "<p>Interest of Amount of Loan per month:</p>"; ?>
    </form>
</body>

</html>