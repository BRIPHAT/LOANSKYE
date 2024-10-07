<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOANSKYE</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <form action="../control/login_control.php" method="post">
        <fieldset class="login">
            <h1>LOGIN IN LOANSKYE</h1>
            <label for="email">Email:</label><br />
            <input type="email" name="Email" id="Email" placeholder="example@gmail.com" /><br />
            <label for="password">Password:</label><br />
            <input type="password" name="password" id="password" placeholder="enter new password" /><br />
            <label for="password">Confirm Password:</label><br />
            <input type="password" name="confirm_password" id="confirm_password" placeholder="retype again your password" /><br />
            <input type="submit" name="login-submit" value=" SUBMIT" /><br>
            <p>OR</p><button><a href="borrower_register.php" style="color: red; text-decoration:none;">REGISTER UP HERE</a>
            </button>
        </fieldset>
    </form>
</body>

</html>