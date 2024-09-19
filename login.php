<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOANSKYE</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <form action="control/login_control.php" method="post">
        <fieldset class="login">
            <h1>LOGIN IN LOANSKYE</h1>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email"><br>
            <label for="Phone_number">Phone Number:</label>
            <input type="number" name="Phone_number" id="Phone_number"><br>
            <label for="password">Password:</label>
            <input type="password" name="password" id="passwordl"><br>
            <input type="submit" value="SUBMIT">
        </fieldset>
    </form>
</body>

</html>