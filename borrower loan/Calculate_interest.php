
<!-- calculate_interest.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculate Interest LOANSKYE</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body>
    <div class="container mx-auto p-4 pt-6 md:p-6 lg:p-12">
        <h1 class="text-3xl font-bold">Calculate Interest</h1>
        <form>
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="principal-amount">
                        Principal Amount
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white" id="principal-amount" type="number" required>
                </div>
                <div class="w-full md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="interest-rate">
                        Interest Rate
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white" id="interest-rate" type="number" required>
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="loan-tenure">
                        Loan Tenure
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white" id="loan-tenure" type="number" required>
                </div>
            </div>
            <button class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded" type="submit">
                Calculate Interest
            </button>
        </form>
        <div class="mt-6">
            <h2 class="text-2xl font-bold">Calculated Interest</h2>
            <p id="calculated-interest"></p>
        </div>
    </div>

    <script>
        const form = document.querySelector('form');
        form.addEventListener('submit', (e) => {
            e.preventDefault();
            const principalAmount = document.querySelector('#principal-amount').value;
            const interestRate = document.querySelector('#interest-rate').value;
            const loanTenure = document.querySelector('#loan-tenure').value;
            const calculatedInterest = calculateInterest(principalAmount, interestRate, loanTenure);
            document.querySelector('#calculated-interest').textContent = `The calculated interest is $${calculatedInterest.toFixed(2)}`;
        });

        function calculateInterest(principalAmount, interestRate, loanTenure) {
            // Calculate the interest here
            return principalAmount * interestRate * loanTenure;
        }
    </script>