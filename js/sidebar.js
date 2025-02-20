const toggleButton = document.getElementById("menuToggleBtn");
const sidebar = document.getElementById("sidebar");
const mainContent = document.getElementById("mainContent");

// Check localStorage for sidebar state
let isSidebarOpen = localStorage.getItem("sidebarOpen") === "true";

function updateSidebar() {
    if (isSidebarOpen) {
        sidebar.style.transform = "translateX(0)";
        mainContent.style.marginLeft = "16rem"; // 64px * 4 = 16rem
    } else {
        sidebar.style.transform = "translateX(-100%)";
        mainContent.style.marginLeft = "0";
    }
}

// Load the saved state on page load
updateSidebar();

toggleButton.addEventListener("click", () => {
    isSidebarOpen = !isSidebarOpen;
    localStorage.setItem("sidebarOpen", isSidebarOpen);
    updateSidebar();
});