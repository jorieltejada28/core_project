function generateCalendar() {
    const calendar = document.getElementById("calendar");
    calendar.innerHTML = ""; 

    const now = new Date();
    const year = now.getFullYear();
    const month = now.getMonth();
    const today = now.getDate();
    const firstDay = new Date(year, month, 1).getDay();
    const daysInMonth = new Date(year, month + 1, 0).getDate();

    // Weekday Headers
    const weekdays = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];
    weekdays.forEach(day => {
        const dayElement = document.createElement("div");
        dayElement.classList.add("font-bold", "text-blue-400");
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
        dateElement.classList.add("p-2", "bg-gray-700", "rounded-lg", "cursor-pointer", "hover:bg-blue-500", "transition");

        // Highlight today's date in green
        if (i === today) {
            dateElement.classList.add("bg-green-500", "text-white", "font-bold");
        }

        dateElement.textContent = i;
        calendar.appendChild(dateElement);
    }
}

generateCalendar(); 
