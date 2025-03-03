<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style/style.css">
</head>

<body class="flex flex-col min-h-screen bg-[#594423] text-white">

    <div id="loadingScreen">
        <div class="spinner-container text-center">
            <div class="spinner"></div>
            <div class="loading-text">Loading</div>
        </div>
    </div>

    <!-- Navigation Bar -->
    <nav class="bg-[#F7E6CA] text-[#4E3B2A] p-4 shadow-md fixed top-0 left-0 w-full z-50">
        <div class="container mx-auto flex justify-between items-center">
            <a href="#" onclick="navigateToSection('home')" class="text-2xl font-bold">MyLogo</a>
            <ul class="hidden md:flex space-x-6 mx-auto">
                <li><a href="#" onclick="navigateToSection('about')">About</a></li>
                <li><a href="#" onclick="navigateToSection('services')">Services</a></li>
                <li><a href="#" onclick="navigateToSection('contact')">Contact</a></li>
            </ul>
            <div class="hidden md:flex space-x-4">
                <a href="signin.php" class="border border-[#8B5E3C] text-[#8B5E3C] px-4 py-2 rounded-lg transition duration-300 ease-in-out hover:bg-[#8B5E3C] hover:text-white">Sign In</a>
                <a href="signup.php" class="border border-[#8B5E3C] text-[#8B5E3C] px-4 py-2 rounded-lg transition duration-300 ease-in-out hover:bg-[#8B5E3C] hover:text-white">Sign Up</a>
            </div>
            <button id="menu-toggle" class="md:hidden text-white focus:outline-none">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </nav>

    <!-- Sign Up Form -->
    <div class="flex items-center justify-center flex-grow">
        <div class="bg-[#F7E6CA] text-[#4E3B2A] p-8 rounded-lg shadow-lg w-full max-w-md mt-20">
            <h2 class="text-2xl font-bold text-center mb-6">Create an Account</h2>
            <form action="register.php" method="POST">
                <div class="mb-4">
                    <label class="block font-medium mb-1">Full Name</label>
                    <input type="text" name="fullname" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#8B5E3C]" required>
                </div>
                <div class="mb-4">
                    <label class="block font-medium mb-1">Email Address</label>
                    <input type="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#8B5E3C]" required>
                </div>
                <div class="mb-4">
                    <label class="block font-medium mb-1">Password</label>
                    <input type="password" name="password" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#8B5E3C]" required>
                </div>
                <div class="mb-4">
                    <label class="block font-medium mb-1">Confirm Password</label>
                    <input type="password" name="confirm_password" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#8B5E3C]" required>
                </div>
                <button type="submit" class="w-full bg-[#8B5E3C] text-white px-4 py-2 rounded-lg hover:bg-[#4E3B2A] transition duration-300">
                    Sign Up
                </button>
            </form>
            <p class="mt-4 text-center">Already have an account? <a href="signin.php" class="text-[#8B5E3C] font-bold">Sign In</a></p>
        </div>
    </div>

    <footer class="bg-[#F7E6CA] text-[#4E3B2A] text-center p-4 mt-auto border-t-4 border-[#4E3B2A]">
        <div class="container mx-auto">
            <p class="text-lg">&copy; 2025 Your Company. All rights reserved.</p>
            <div class="flex justify-center space-x-4 mt-2">
                <a href="#" class="text-[#4E3B2A] hover:text-[#594423]"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="text-[#4E3B2A] hover:text-[#594423]"><i class="fab fa-twitter"></i></a>
                <a href="#" class="text-[#4E3B2A] hover:text-[#594423]"><i class="fab fa-instagram"></i></a>
                <a href="#" class="text-[#4E3B2A] hover:text-[#594423]"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
</body>

</html>