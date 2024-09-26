<?php
if (isset($_GET["error"]) && $_GET["error"] == "user_already_exists") {
    $message = "User already exists!";
    echo "<p style='color: green;'>$message</p>";
}
if (isset($_GET["submited"]) && $_GET["submited"] == "data_successful") {
    $message2 = "Data succesfull submitted";
    echo "<p style='color: green;'>$message</p>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOANSKYE</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="register-body">
    <form action="../control/register_control.php" method="post" autocomplete="off">
        <fieldset class="background-register">
            <fieldset class=" register">
                <h1>REGISTER IN LOANSKYE</h1>
                <label for=" Firstname">Firstname:</label>
                <input type="text" name="Firstname" id="Firstname" placeholder="enter first name" size="30" required="required"><br>
                <label for=" Phone_number">Phone Number:</label>
                <input type="number" minlength="10" maxlength="10" size="30" name="Phone_number" id=" Phone_number" placeholder="xxx-xxx-xxx" required="required"><br>
                <label for=" Email">Email:</label>
                <input type="email" name="Email" id="Email" size="34" required="required" placeholder="exmple@gmail.com"><br>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" size="32" placeholder="Enter your Password with more than 8 character" title="Enter your Password with more than 8 character" required="required"><br>
                <label for="confirm_password">Confirm Password:</label>
                <input type="password" name="confirm_password" id="confirm_password" size="32" placeholder="Enter your Password with more than 8 character" title="Enter your Password with more than 8 character" required="required"><br>
                <button type="submit" name="submit" class="register-submit">SUBMIT</button>
            </fieldset>
        </fieldset>
    </form>
</body>

</html>