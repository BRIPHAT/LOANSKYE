<?php
if (isset($_GET["login-success"]) && $_GET["login-success"] == "login_successful") {
    $message = "Congratulations! You have successfully login. Welcome into LOANSKYE.";
    echo "<p style='color: green;'>$message</p>";
} else {

    echo "<p style='color: red;' hidden='off';>Login failed. Please try again.</p>";
}  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOANSKYE</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body class=" register" id="main_body">

    <header>
        <nav>
            <ul>
                <li><a href=" index.php">Home</a></li>
                <li><a href="borrower loan/Calculate_interest">Apply for Loan</a></li>
                <li><a href="#">Track Application</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="hero">
            <h1>Welcome</h1>
            <p>Get the loan you need to achieve your goals</p>
            <button class="btn">
                <a href="Calculate_interest.php">Apply Now</a>
            </button>
        </section>
</body>

</html>