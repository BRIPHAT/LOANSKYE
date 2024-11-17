<!-- borrower_dashboard.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrower Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>

<body>
    <div class="container mx-auto p-4 pt-6 md:p-6 lg:p-12" href="../control/dashboard_control.php">
        <h1 class="text-3xl font-bold">Borrower Dashboard</h1>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0" >
                <h2 class="text-2xl font-bold">My Details</h2>
               
                <p>Name: <?php echo $borrowerDetails['name']; ?></p>
                <p>Email: <?php echo $borrowerDetails['email']; ?></p>
                <p>Phone: <?php echo $borrowerDetails['phone']; ?></p>
            </div>
            <div class="w-full md:w-1/2 px-3">
                <h2 class="text-2xl font-bold">My Loans</h2>
                <ul>
                    <?php
                    // Fetch borrower's loans from database
                    $loans = array(
                        array('id' => $loanId, 'title' => $loans, 'amount' => $amount),
                        array('id' => $loanId, 'title' => $loans, 'amount' => $amount));

                    foreach ($loans as $loan) {
                    ?>
                        <li>
                            <a href="loan_details.php?id=<?php echo $loan['id']; ?>">
                                <?php echo $loan['title']; ?> (<?php echo $loan['amount']; ?>)
                            </a>
                        </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>