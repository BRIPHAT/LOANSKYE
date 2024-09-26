<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="register-body">
    <form action="control/dashboard_control.php" method="post" autocomplete="off">
        <fieldset class="background-register">
            <fieldset class=" register">
                <h1>REGISTER IN LOANSKYE</h1>
                <label for=" Lastname">Lastname:</label>
                <input type="text" name="Lastname" id="Lastname" placeholder="enter last name" size="30" required="required"><br>
                <label for=" Physical_address">Address:</label>
                <input type="text" name="Physical_address" id="Pysical_address" size="32" required="required" placeholder="address of your house"><br>
                <label for=" date_of_birth">Date Of Birth</label>
                <input type="date" name="date_of_birth" id="date_of_birth" max="2006-01-01" required="required"><br>
                <label for=" country">Country:</label>
                <input type="text" name="country" id="country" required="required" placeholder="enter your country lived" size="32"><br>
                <label for="city">City</label>
                <input type="text" name="city" id="city" placeholder="Enter your city" size="37"><br>
                <label for="street">Street:</label>
                <input type="text" name="street" id="street" placeholder="Enter your street" size="35"><br>
                <label for="house_number">Number Of House:</label>
                <input type="number" name="house_number" id="house_number" required="required" size="30" placeholder="enter house number"><br>
                <label for="ownership">Asset and Non-asset Owner:</label>
                <input type="text" name="ownership" id="ownership" size="16" required="required" title="asset and non asset used for apply loan" placeholder="asset and non asset used for apply loan"><br>
                <label for="Profile">Profile:</label>
                <input type="file" name="Profile" id="Profile" required="required" title="enter a document with pdf format only"><br>
                <label for="National_Identification">National Identification:</label>
                <input type="number" minlength="20" name="National_Identification" id=" National_Identification" required="required" placeholder="National number ID"><br>
                <label for="credit_score">Credit:</label>
                <input type="number" name="credit_score" id="credit_score" placeholder="enter salary amount taken per month" title="enter salary amount taken per month" required="required"><br>
                <label for="sponsor_name">Sponsor Name:</label>
                <input type="text" name="sponsor_name" id="sponsor_name" required="required" placeholder="enter your sponsor name" size="28"><br>
                <label for="sponsor_name">Sponsor Contact:</label>
                <input type="number" minlength="10" maxlength="10" name=" contact_sponsor" id="contact_sponsor" required="required" placeholder="enter your sponsor contact" size="28"><br>
                <label for="profile_sponsor">Sponsor Picture:</label>
                <input type="file" name="profile_sponsor" id="profile_sponsor" required="required"><br>
                <label for="document_sponsor">Verification Sponsor Document:</label>
                <input type="file" name="document_sponsor" id="document_sponsor" placeholder="upload only pdf format file" required="required"><br>
                <label for="Amount_of_loan">Amount Of Loan borrow:</label>
                <input type="number" min="50000" max="100000000000" name=" Amount_of_loan" id="Amount_of_loan" placeholder="Enter amount of money borrow" title="Enter amount of money borrow" required="required"><br>
                <label for="Loan_Purpose">Purpose Of Loan:</label>
                <textarea name="Loan_Purpose" id="Loan_Purpose" cols="20" rows="3" placeholder="enter the purpose of loan will borrow"></textarea><br><br>
                <button type="submit" name="submit" class="register-submit">SUBMIT</button>
            </fieldset>
        </fieldset>
    </form>
</body>

</html>