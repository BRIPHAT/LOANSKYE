<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Payment Interface</title>
</head>

<body class="bg-gray-100">
    <div class="container mx-auto p-6">
        <h1 class="text-2xl font-bold mb-4">Payment Interface</h1>
        <form action="process_payment.php" method="POST" class="bg-white p-6 rounded shadow-md">
            <div class="mb-4">
                <label for="borrower_name" class="block text-sm font-medium text-gray-700">Borrower Name</label>
                <input type="text" id="borrower_name" name="borrower_name" required class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="Enter your name">
            </div>
            <div class="mb-4">
                <label for="amount" class="block text-sm font-medium text-gray-700">Amount</label>
                <input type="number" id="amount" name="amount" required class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="Enter amount">
            </div>
            <div class="mb-4">
                <label for="payment_method" class="block text-sm font-medium text-gray-700">Payment Method</label>
                <select id="payment_method" name="payment_method" required class="mt-1 block w-full border border-gray-300 rounded-md p-2">
                    <option value="credit_card">Credit Card</option>
                    <option value="debit_card">Debit Card</option>
                    <option value="paypal">PayPal</option>
                </select>
            </div>
            <button type="submit" class="w-full bg-blue-600 text-white font-bold py-2 rounded hover:bg-blue-700">Submit Payment</button>
        </form>
    </div>
</body>

</html>