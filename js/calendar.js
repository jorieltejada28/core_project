let currentYear, currentMonth;

function generateCalendar(year, month) {
    const calendar = document.getElementById("calendar");
    const monthYearLabel = document.getElementById("monthYear");

    calendar.innerHTML = ""; // Clear existing dates

    const now = new Date();
    const today = now.getDate();
    const currentYearToday = now.getFullYear();
    const currentMonthToday = now.getMonth();

    const firstDay = new Date(year, month, 1).getDay();
    const daysInMonth = new Date(year, month + 1, 0).getDate();

    // Set the header text for the month and year
    const monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    monthYearLabel.textContent = `${monthNames[month]} ${year}`;

    // Weekday Headers
    const weekdays = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];
    weekdays.forEach(day => {
        const dayElement = document.createElement("div");
        dayElement.classList.add("font-bold", "text-[#4E3B2A]");
        dayElement.textContent = day;
        calendar.appendChild(dayElement);
    });

    // Empty Days Before First Day
    for (let i = 0; i < firstDay; i++) {
        const emptyCell = document.createElement("div");
        emptyCell.classList.add("opacity-0");
        calendar.appendChild(emptyCell);
    }

    // Fill Dates
    for (let i = 1; i <= daysInMonth; i++) {
        const dateElement = document.createElement("div");
        dateElement.classList.add(
            "p-2",
            "bg-[#F7E6CA]",   // Background color
            "rounded-lg",
            "cursor-pointer",
            "hover:bg-[#4E3B2A]", // Hover effect
            "hover:text-white",   // Text turns white on hover
            "transition",
            "border",           // Adds a border
            "border-[#4E3B2A]"  // Sets border color
        );
        
        // Highlight today's date if it's the current month and year
        if (i === today && year === currentYearToday && month === currentMonthToday) {
            dateElement.style.backgroundColor = "#2A6B7A";
            dateElement.style.color = "white";
            dateElement.style.fontWeight = "bold";
        
            // Add hover effect using JavaScript
            dateElement.addEventListener("mouseenter", function () {
                this.style.backgroundColor = "#1E4F5C"; // Darker shade on hover
            });
        
            dateElement.addEventListener("mouseleave", function () {
                this.style.backgroundColor = "#2A6B7A"; // Reset to original color
            });
        }              

        dateElement.textContent = i;
        calendar.appendChild(dateElement);
    }
}

// Function to navigate months
function changeMonth(offset) {
    currentMonth += offset;

    if (currentMonth < 0) {
        currentMonth = 11;
        currentYear--;
    } else if (currentMonth > 11) {
        currentMonth = 0;
        currentYear++;
    }

    generateCalendar(currentYear, currentMonth);
}

// Ensure the script runs after the page loads
window.onload = function () {
    const now = new Date();
    currentYear = now.getFullYear();
    currentMonth = now.getMonth();
    generateCalendar(currentYear, currentMonth);

    document.getElementById("prevMonth").addEventListener("click", () => changeMonth(-1));
    document.getElementById("nextMonth").addEventListener("click", () => changeMonth(1));
};