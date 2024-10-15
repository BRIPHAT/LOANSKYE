<!-- loanee_dashboard.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loanee Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body>
    <div class="flex h-screen">
        <!-- Sidebar -->
        <div class="w-64 bg-gray-200 h-full p-4">
            <h2 class="text-lg font-bold mb-4">Loanee Dashboard</h2>
            <ul>
                <li><a href="#" class="block py-2 px-4 hover:bg-gray-300">My Profile</a></li>
                <li><a href="#" class="block py-2 px-4 hover:bg-gray-300">My Borrowers</a></li>
                <li><a href="#" class="block py-2 px-4 hover:bg-gray-300">Loan History</a></li>
            </ul>
        </div>
        <!-- Main Content -->
        <div class="flex-1 p-4">
            <h1 class="text-3xl font-bold mb-4">My Borrower Details</h1>
            <?php
            // Connect to database
            $conn = mysqli_connect("localhost", "username", "password", "database");

            // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            // Query to retrieve borrower details
            $sql = "SELECT * FROM borrower_details WHERE loanee_id = $_SESSION['loanee_id']";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<p>Borrower Name: " . $row['borrower_name'] . "</p>";
                    echo "<p>Borrower Email: " . $row['borrower_email'] . "</p>";
                    echo "<p>Borrower Phone: " . $row['borrower_phone'] . "</p>";
                }
            } else {
                echo "No borrower details found.";
            }

            // Close connection
            mysqli_close($conn);
            ?>
        </div>
    </div>
</body>
</html>