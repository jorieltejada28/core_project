// Message Dropdown
document.getElementById("messageBtn").addEventListener("click", function () {
    document.getElementById("messageDropdown").classList.toggle("hidden");
});

// Notification Dropdown
document.getElementById("notificationBtn").addEventListener("click", function () {
    document.getElementById("notificationDropdown").classList.toggle("hidden");
});

// Close dropdowns when clicking outside
document.addEventListener("click", function (event) {
    const messageDropdown = document.getElementById("messageDropdown");
    const notificationDropdown = document.getElementById("notificationDropdown");
    const messageBtn = document.getElementById("messageBtn");
    const notificationBtn = document.getElementById("notificationBtn");

    if (!messageBtn.contains(event.target) && !messageDropdown.contains(event.target)) {
        messageDropdown.classList.add("hidden");
    }
    if (!notificationBtn.contains(event.target) && !notificationDropdown.contains(event.target)) {
        notificationDropdown.classList.add("hidden");
    }
});

// Toggle Profile Dropdown
document.getElementById('profileBtn').addEventListener('click', function () {
    document.getElementById('profileDropdown').classList.toggle('hidden');
});

// Close dropdown if clicked outside
document.addEventListener('click', function (event) {
    let profileDropdown = document.getElementById('profileDropdown');
    let profileBtn = document.getElementById('profileBtn');
    if (!profileBtn.contains(event.target) && !profileDropdown.contains(event.target)) {
        profileDropdown.classList.add('hidden');
    }
});