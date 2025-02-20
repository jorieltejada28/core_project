<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "../components/head.php" ?>
</head>

<body class="flex flex-col min-h-screen bg-gray-900">

    <!-- Sidebar -->
    <div id="sidebar" class="w-64 bg-gray-900 text-white text-lg p-4 fixed h-full left-0 top-0 transform transition-transform flex flex-col justify-between border-r-4 border-blue-500">
        <!-- Sidebar Content -->
        <?php include "../components/sidebar.php" ?>
    </div>

    <!-- Main Content -->
    <div class="flex-1 p-6 transition-all duration-300 min-h-screen" id="mainContent">
        <?php include "../components/options.php"; ?>

        <?php
        // Define allowed pages
        $allowed_pages = ['dashboard', 'settings'];

        // Check if ?page= is set and valid
        if (isset($_GET['page']) && in_array($_GET['page'], $allowed_pages)) {
            include __DIR__ . "/../pages/" . $_GET['page'] . ".php";
        } else {
            echo "<h1 class='text-red-500 text-2xl'>Page does not exist</h1>";
        }
        ?>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white text-center p-4 mt-auto border-t-4 border-b-4 border-blue-500"">
        <?php include "../components/footer.php" ?>
    </footer>

    <?php include "../script/script.php" ?>

</body>

</html>