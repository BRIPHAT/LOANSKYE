<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOANSKYE</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />

</head>

<body class=" w-screen h-screen flex justify-center items-center bg-indigo-900">
    <form action="../control/register_control.php" method="post" autocomplete="off" class="bg-white px-10 py-8 rounded-lg drop-shadow-lg space-y-5">
        <fieldset class="background-register">
            <fieldset class="bg-white px-10 py-8 rounded-lg drop-shadow-lg space-y-5">
                <div class="pl-2 border border-slate-300 rounded-md">
                    <h1 class="text-center text-red-400">REGISTER IN LOANSKYE</h1>
                    <div class="pl-2 border border-slate-100 rounded-md">
                        <label for=" Firstname"><i class="fa-solid fa-circle-user"></i></label>
                        <input type="text" name="Firstname" id="Firstname" placeholder="enter first name" size="30" required="required" class="px-2  w-96 border-0"><br>
                    </div>
                    <label for="Phone_number"><i class="fa-solid fa-phone"></i></label>
                    <input type="number" minlength="10" maxlength="10" size="30" name="Phone_number" id=" Phone_number" placeholder="xxx-xxx-xxx" required="required"><br>
                    <label for="email"><i class="fa-solid fa-envelope text-gray-500"></i></label>
                    <input type="email" name="Email" id="Email" size="34" required="required" placeholder="exmple@gmail.com"><br>
                    <button type="submit" name="submit" class="register-submit"> <i class="fa-solid fa-right-to-bracket mr-2"></i>SUBMIT</button>
                </div>
            </fieldset>
        </fieldset>
    </form>
</body>

</html>