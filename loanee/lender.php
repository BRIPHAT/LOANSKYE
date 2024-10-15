<!-- lender.php -->

<div class="max-w-md mx-auto p-4 bg-white rounded-md shadow-md">
    <h2 class="text-lg font-bold mb-4">Lender Profile</h2>
    <p class="text-gray-600 mb-2">Lender Name: <?php echo $lender_name; ?></p>
    <p class="text-gray-600 mb-2">Lender Email: <?php echo $lender_email; ?></p>
    <h3 class="text-lg font-bold mb-2">Loan Offers</h3>
    <ul>
        <?php foreach ($loan_offers as $offer) { ?>
            <li class="mb-2">
                <p class="text-gray-600">Loan Amount: <?php echo $offer['amount']; ?></p>
                <p class="text-gray-600">Interest Rate: <?php echo $offer['interest_rate']; ?>%</p>
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    View Offer Details
                </button>
            </li>
        <?php } ?>
    </ul>
</div>