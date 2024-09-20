<?php
include('../include/connection.php');
error_reporting(1);
$borrower_email = $_SESSION['borrower_email'];
$sql = "SELECT * FROM loan_applicant WHERE Email = '$Email'";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
    echo "<h2>Loan Details</h2>";
    echo "<table>";
    echo "<tr><th>Loan Amount</th><th>Interest Amount/Rate</th><th>Loan Date</th><th>Loan Status</th><th>Description</th><th>Term</th><th>Disbursement Date</th><th>Created At</th><th>Updated At</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['loan_amount'] . "</td>";
        echo "<td>" . $row['interest_amount'] . " / " . $row['interest_rate'] . "%</td>";
        echo "<td>" . $row['loan_date'] . "</td>";
        echo "<td>" . $row['loan_status'] . "</td>";
        echo "<td>" . $row['description'] . "</td>";
        echo "<td>" . $row['term'] . "</td>";
        echo "<td>" . $row['disbursement_date'] . "</td>";
        echo "<td>" . $row['created_at'] . "</td>";
        echo "<td>" . $row['updated_at'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No loan details found.";
}
