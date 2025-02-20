<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "../components/head.php" ?>
</head>

<body class="flex flex-col min-h-screen">

    <!-- Sidebar -->
    <div id="sidebar" class="w-64 bg-gray-900 text-white text-lg p-4 fixed h-full left-0 top-0 transform transition-transform flex flex-col justify-between">
        <?php include "../components/sidebar.php" ?>
    </div>

    <!-- Main Content -->
    <div class="flex-1 p-6 transition-all duration-300 min-h-screen" id="mainContent">
        <?php include "../components/options.php" ?>

        <div>
            <?php
            // Define the allowed pages
            $allowed_pages = ['dashboard'];

            // Check if ?page= is set in the URL
            if (isset($_GET['page'])) {
                $page = $_GET['page'];

                // Validate the page and include it if allowed
                if (in_array($page, $allowed_pages) && file_exists(__DIR__ . "/../pages/" . $page . ".php")) {
                    include __DIR__ . "/../pages/" . $page . ".php";
                } else {
                    echo "<h1 class='text-red-500 text-2xl'>Page does not exist</h1>";
                }
            } else {
                // If no ?page= is provided, show "Page not found"
                echo "<h1 class='text-red-500 text-2xl'>Page does not exist</h1>";
            }
            ?>

        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white text-center p-4 mt-auto">
        <?php include "../components/footer.php" ?>
    </footer>

    <?php include "../script/script.php" ?>

</body>

</html>