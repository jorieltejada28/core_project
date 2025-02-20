<div class="bg-gray-900 p-4 flex items-center rounded-t-lg border-t-4 border-r-4 border-l-4 border-blue-500 relative">
    <!-- Hamburger Menu -->
    <button id="menuToggleBtn" class="text-2xl p-2 bg-gray-300 rounded-md mr-4">
        <i class="fas fa-bars"></i>
    </button>

    <!-- Search Bar -->
    <div class="flex items-center bg-gray-700 p-2 rounded-md w-1/2">
        <i class="fas fa-search text-white mr-2"></i>
        <input type="text" placeholder="Search..." class="bg-transparent text-white outline-none w-full">
    </div>

    <!-- Spacer to push icons to the right -->
    <div class="flex-1"></div>

    <!-- Envelope Dropdown -->
    <div class="relative">
        <button id="messageBtn" class="text-white text-2xl mx-2">
            <i class="fas fa-envelope"></i>
        </button>
        <div id="messageDropdown" class="hidden absolute right-0 mt-2 w-48 bg-gray-800 text-white rounded-md shadow-lg">
            <p class="p-2 text-center">No new messages</p>
        </div>
    </div>

    <!-- Bell Dropdown -->
    <div class="relative">
        <button id="notificationBtn" class="text-white text-2xl mx-2">
            <i class="fas fa-bell"></i>
        </button>
        <div id="notificationDropdown" class="hidden absolute right-0 mt-2 w-48 bg-gray-800 text-white rounded-md shadow-lg">
            <p class="p-2 text-center">No new notifications</p>
        </div>
    </div>

    <!-- Profile Picture with Dropdown -->
    <div class="relative ml-4">
        <img id="profileBtn" src="../pictures/richard.jpg" alt="Profile"
            class="w-10 h-10 rounded-full border-4 border-blue-500 cursor-pointer">

        <!-- Profile Dropdown Menu -->
        <div id="profileDropdown" class="hidden absolute right-0 mt-2 w-48 bg-gray-800 text-white rounded-md shadow-lg">
            <a href="#" class="block px-4 py-2 hover:bg-gray-700">View Profile</a>
            <a href="#" class="block px-4 py-2 hover:bg-gray-700">Settings</a>
            <a href="#" class="block px-4 py-2 hover:bg-red-600 group">
                <span class="group-hover:hidden block">Bakal ako hover me</span>
                <span class="hidden group-hover:block">Crush ko si renz <span class="rainbow-heart">❤️</span></span>
            </a>
        </div>
    </div>
</div>