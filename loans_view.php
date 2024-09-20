<!DOCTYPE html>
<html>

<head>
    <title>View Loans</title>
</head>

<body>
    <h1>View Loans</h1>
    <table>
        <tr>
            <th>Borrower Name</th>
            <th>Loan Amount</th>
            <th>Loan Term</th>
            <th>Interest Rate</th>
        </tr>
        <?php
        $query = "SELECT * FROM loans WHERE lender_id = '" . $_SESSION["lender_id"] . "'";
        $result = mysqli_query($conn, $query);

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row["borrower_name"] . "</td>";
            echo "<td>" . $row["loan_amount"] . "</td>";
            echo "<td>" . $row["loan_term"] . "</td>";
            echo "<td>" . $row["interest_rate"] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>