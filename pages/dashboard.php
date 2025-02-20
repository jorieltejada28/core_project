<div class="grid grid-cols-5 bg-gray-900 p-5 gap-6 border-r-4 border-l-4 border-blue-500">
    <!-- Reservation System -->
    <div onclick="showInfo('Reservation System', 'Handles booking and reservations for guests.')"
        class="bg-[#2F697D] text-white text-center rounded-lg px-6 py-3 cursor-pointer hover:bg-[#24525F] hover:scale-105 transition duration-300 flex flex-col justify-between h-full">
        <p class="font-bold">Reservation System</p>
        <hr class="border-t border-white my-2 w-full">
        <p class="text-lg font-bold">80%</p>
        <div class="w-full bg-gray-700 rounded-full h-2">
            <div class="bg-yellow-400 h-2 rounded-full" style="width: 80%;"></div>
        </div>
    </div>

    <!-- POS System -->
    <div onclick="showInfo('Point of Sale System', 'Manages transactions and sales processing.')"
        class="bg-[#17C3C3] text-white text-center rounded-lg px-6 py-3 cursor-pointer hover:bg-[#13A1A1] hover:scale-105 transition duration-300 flex flex-col justify-between h-full">
        <p class="font-bold">Point of Sale System</p>
        <hr class="border-t border-white my-2 w-full">
        <p class="text-lg font-bold">60%</p>
        <div class="w-full bg-gray-700 rounded-full h-2">
            <div class="bg-red-500 h-2 rounded-full" style="width: 60%;"></div>
        </div>
    </div>

    <!-- Inventory Management -->
    <div onclick="showInfo('Inventory Management', 'Keeps track of stock levels and supplies.')"
        class="bg-[#F4B942] text-white text-center rounded-lg px-6 py-3 cursor-pointer hover:bg-[#D89C34] hover:scale-105 transition duration-300 flex flex-col justify-between h-full">
        <p class="font-bold">Inventory Management</p>
        <hr class="border-t border-white my-2 w-full">
        <p class="text-lg font-bold">40%</p>
        <div class="w-full bg-gray-700 rounded-full h-2">
            <div class="bg-blue-500 h-2 rounded-full" style="width: 40%;"></div>
        </div>
    </div>

    <!-- Housekeeping & Maintenance -->
    <div onclick="showInfo('Housekeeping & Maintenance', 'Manages room cleanliness and repairs.')"
        class="bg-[#F08E7E] text-white text-center rounded-lg px-6 py-3 cursor-pointer hover:bg-[#D47A6C] hover:scale-105 transition duration-300 flex flex-col justify-between h-full">
        <p class="font-bold">Housekeeping & Maintenance</p>
        <hr class="border-t border-white my-2 w-full">
        <p class="text-lg font-bold">70%</p>
        <div class="w-full bg-gray-700 rounded-full h-2">
            <div class="bg-indigo-500 h-2 rounded-full" style="width: 70%;"></div>
        </div>
    </div>

    <!-- Customer Relationship Management -->
    <div onclick="showInfo('Customer Relationship Management', 'Handles guest communication and feedback.')"
        class="bg-[#E15565] text-white text-center rounded-lg px-6 py-3 cursor-pointer hover:bg-[#C34452] hover:scale-105 transition duration-300 flex flex-col justify-between h-full">
        <p class="font-bold">Customer Relationship Management</p>
        <hr class="border-t border-white my-2 w-full">
        <p class="text-lg font-bold">50%</p>
        <div class="w-full bg-gray-700 rounded-full h-2">
            <div class="bg-cyan-500 h-2 rounded-full" style="width: 50%;"></div>
        </div>
    </div>
</div>

<!-- Charts Section -->
<div class="bg-gray-900 p-10 grid grid-cols-2 gap-6 border-r-4 border-l-4 border-b-4 border-blue-500">
    <!-- Line Chart -->
    <div class="col-span-3 text-center border-4 border-blue-500 p-4">
        <h2 class="text-white text-xl font-bold mb-4">Tickets Solved Over Time</h2>
        <div class="flex items-center justify-center">
            <canvas id="lineChart" class="chart"></canvas>
        </div>
    </div>

    <!-- Donut Charts -->
    <div class="text-center border-4 border-blue-500 p-4">
        <h2 class="text-white text-xl font-bold mb-4">Ticket Categories</h2>
        <div class="flex items-center justify-center">
            <canvas id="pieChart1" class="chart"></canvas>
        </div>
    </div>
    <div class="text-center border-4 border-blue-500 p-4">
        <h2 class="text-white text-xl font-bold mb-4">Ticket Status</h2>
        <div class="flex items-center justify-center">
            <canvas id="pieChart2" class="chart"></canvas>
        </div>
    </div>
</div>