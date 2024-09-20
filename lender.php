<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOANSKYE LENDER REGISTER FORM</title>
</head>

<body>
    <form action="/control/register_control.php" method="post" autocomplete="off">
        <fieldset class="background-register">
            <fieldset class=" register">
                <h1>Lender Registration Form</h1>
                <form action=" /control/lender_control.php" method="post">
                    <label for="loan_officer_name">Loan Officer Name:</label>
                    <input type="text" id="loan_officer_name" name="loan_officer_name" required>

                    <label for="phone_number">Phone Number:</label>
                    <input type="tel" id="phone_number" name="phone_number" required>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>

                    <label for="role">Role:</label>
                    <select id="role" name="role" required>
                        <option value="">Select Role</option>
                        <option value="lender">Lender</option>
                        <option value="borrower">Borrower</option>
                    </select>

                    <input type="submit" name="submit" value=" Register">
            </fieldset>
        </fieldset>
    </form>
</body>

</html>
</body>

</html>