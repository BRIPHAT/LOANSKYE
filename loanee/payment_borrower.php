<!-- payment_borrower.php -->
<div class="container mx-auto p-4 pt-6 md:p-6 lg:p-12">
    <header class="flex justify-between mb-4">
        <a href="#" class="text-2xl font-bold">Loanee/Lender Platform</a>
        <nav class="flex justify-end">
            <a href="#" class="text-gray-600 hover:text-gray-900">Loan Admitted</a>
            <a href="#" class="text-gray-600 hover:text-gray-900">Loan Applications</a>
        </nav>
    </header>
    <section class="bg-white shadow-md p-4 md:p-6 lg:p-12">
        <h2 class="text-2xl font-bold mb-2">Payment History</h2>
        <table class="table-auto w-full mb-4">
            <thead>
                <tr>
                    <th class="px-4 py-2">Date</th>
                    <th class="px-4 py-2">Amount</th>
                    <th class="px-4 py-2">Status</th>
                </tr>
            </thead>
            <tbody>
                <!-- Add payment history rows here -->
            </tbody>
        </table>
        <form class="flex flex-wrap mb-4">
            <label class="block mb-2">
                <span class="text-gray-600">Payment Amount:</span>
                <input type="number" class="form-input w-full" />
            </label>
            <label class="block mb-2">
                <span class="text-gray-600">Payment Method:</span>
                <select class="form-select w-full">
                    <option value="">Select Payment Method</option>
                    <!-- Add payment method options here -->
                </select>
            </label>
            <button class="btn btn-primary w-full">Make Payment</button>
        </form>
    </section>
</div>