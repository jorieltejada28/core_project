<div class="bg-[#F7E6CA] p-4 flex items-center rounded-t-lg border-t-4 border-r-4 border-l-4 border-[#4E3B2A] relative">
    <!-- Hamburger Menu -->
    <button id="menuToggleBtn" class="text-2xl p-2 bg-[#594423] text-[#F7E6CA] rounded-md mr-4">
        <i class="fas fa-bars"></i>
    </button>

    <!-- Search Bar -->
    <div class="flex items-center bg-[#594423] p-2 rounded-md w-1/2">
        <i class="fas fa-search text-white mr-2"></i>
        <input type="text" placeholder="Search..." class="bg-transparent text-white outline-none w-full">
    </div>

    <!-- Spacer to push icons to the right -->
    <div class="flex-1"></div>
    
    <!-- Real-time Clock (Centered Under Icons) -->
    <div id="clock" class="text-lg font-bold text-[#4E3B2A] mt-1 cursor-default unselectable"></div>

    <!-- Envelope Dropdown -->
    <div class="relative">
        <button id="messageBtn" class="text-[#594423] text-2xl mx-2">
            <i class="fas fa-envelope"></i>
        </button>
        <div id="messageDropdown" class="hidden absolute right-0 mt-2 w-48 bg-[#F7E6CA] text-[#594423] rounded-md shadow-lg border border-[#4E3B2A]">
            <p class="p-2 text-center cursor-pointer hover:text-[#F7E6CA] hover:bg-[#4E3B2A] transition rounded-md">
                No new messages
            </p>
        </div>
    </div>

    <!-- Bell Dropdown -->
    <div class="relative">
        <button id="notificationBtn" class="text-[#594423] text-2xl mx-2">
            <i class="fas fa-bell"></i>
        </button>
        <div id="notificationDropdown" class="hidden absolute right-0 mt-2 w-48 bg-[#F7E6CA] text-[#594423] rounded-md shadow-lg border border-[#4E3B2A]">
            <p class="p-2 text-center cursor-pointer hover:text-[#F7E6CA] hover:bg-[#4E3B2A] transition rounded-md">
                No new messages
            </p>
        </div>
    </div>

    <!-- Profile Picture with Dropdown -->
    <div class="relative ml-4">
        <img id="profileBtn" src="../pictures/richard.jpg" alt="Profile"
            class="w-10 h-10 rounded-full border-4 border-[#4E3B2A] cursor-pointer">

        <!-- Profile Dropdown Menu -->
        <div id="profileDropdown" class="hidden absolute right-0 mt-2 w-48 bg-[#F7E6CA] text-[#594423] rounded-md shadow-lg border border-[#A67B5B] hover:text-[#4E3B2A] transition">
            <a href="#" class="block px-4 py-2 hover:bg-[#4E3B2A] hover:text-[#F7E6CA]">View Profile</a>
            <a href="#" class="block px-4 py-2 hover:bg-[#4E3B2A] hover:text-[#F7E6CA]">Settings</a>
            <a href="#" class="block px-4 py-2 hover:bg-[#2A6B7A] hover:text-[#F7E6CA]">Sign Out</a>
        </div>
    </div>
</div>