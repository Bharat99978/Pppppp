<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="max-w-md mx-auto bg-white rounded-lg shadow-lg p-6">
        <h1 class="text-2xl font-bold text-gray-800">Welcome to My Website</h1>
        <p class="mt-4 text-gray-600">
            <?php
            // Display the current date
            echo "Today is " . date("l, F j, Y") . ".";
            ?>
        </p>
        <div class="mt-6">
            <a href="about.php" class="text-blue-500 hover:underline">Learn More</a>
        </div>
    </div>
</body>
</html>
