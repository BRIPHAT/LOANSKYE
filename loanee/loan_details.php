<!-- loan_details.php -->

<?php
// Fetch loan details from database
$loanId = $_GET['id'];
$loan = array(
    'id' => $loanId,
    'title' => 'Loan ' . $loanId,
    'description' => 'This is loan ' . $loanId,
);

// Display loan details
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loan Details</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>

<body>
    <div class="container mx-auto p-4 pt-6 md:p-6 lg:p-12">
        <h1 class="text-3xl font-bold">Loan Details</h1>
        <p>Loan ID: <?php echo $loan['id']; ?></p>
        <p>Loan Title: <?php echo $loan['title']; ?></p>
        <p>Loan Description: <?php echo $loan['description']; ?></p>
    </div>
</body>

</html>