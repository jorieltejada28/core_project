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

function updateClock() {
    const now = new Date();
    let hours = now.getHours();
    const minutes = now.getMinutes();
    const seconds = now.getSeconds();
    const ampm = hours >= 12 ? "PM" : "AM";

    hours = hours % 12 || 12; // Convert 24-hour format to 12-hour

    const formattedTime = `${hours}:${String(minutes).padStart(2, "0")}:${String(seconds).padStart(2, "0")} ${ampm}`;
    document.getElementById("clock").textContent = formattedTime;
}

setInterval(updateClock, 1000);
updateClock(); // Initialize immediately

// Hide the loading screen after the page is fully loaded
document.addEventListener("DOMContentLoaded", function () {
    setTimeout(() => {
        document.getElementById("loadingScreen").classList.add("hidden");
    }, 500); // Adjust delay based on fetching time
});