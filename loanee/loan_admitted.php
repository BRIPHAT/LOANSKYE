<!-- loan_admitted.php -->

<div class="max-w-md mx-auto p-4 bg-white rounded-md shadow-md">
    <h2 class="text-lg font-bold mb-4">Loan Admitted</h2>
    <p class="text-gray-600 mb-2">Loan ID: <?php echo $loan_id; ?></p>
    <p class="text-gray-600 mb-2">Loan Amount: <?php echo $loan_amount; ?></p>
    <p class="text-gray-600 mb-2">Interest Rate: <?php echo $interest_rate; ?>%</p>
    <p class="text-gray-600 mb-2">Loan Status: <?php echo $loan_status; ?></p>
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        View Loan Details
    </button>
</div>

<!-- loan_admitted.php -->
<div class="container mx-auto p-4 pt-6 md:p-6 lg:p-12">
    <header class="flex justify-between mb-4">
        <a href="#" class="text-2xl font-bold">Loanee/Lender Platform</a>
        <nav class="flex justify-end">
            <a href="#" class="text-gray-600 hover:text-gray-900">Payment History</a>
            <a href="#" class="text-gray-600 hover:text-gray-900">Loan Applications</a>
        </nav>
    </header>
    <section class="bg-white shadow-md p-4 md:p-6 lg:p-12">
        <h2 class="text-2xl font-bold mb-2">Loan Details</h2>
        <ul class="list-none mb-4">
            <li class="flex justify-between mb-2">
                <span class="text-gray-600">Loan ID:</span>
                <span class="text-gray-900">LOAN-001</span>
            </li>
            <li class="flex justify-between mb-2">
                <span class="text-gray-600">Loan Amount:</span>
                <span class="text-gray-900">$10,000</span>
            </li>
            <!-- Add more loan details here -->
        </ul>
        <div class="flex justify-end">
            <a href="#" class="btn btn-primary">View Loan Documents</a>
            <a href="#" class="btn btn-primary">Make Payment</a>
        </div>
    </section>
</div>