<div class="grid grid-cols-5 bg-gray-900 p-5 gap-6">
    <!-- Reservation System -->
    <div class="bg-[#2F697D] text-white text-center rounded-lg px-6 py-3 cursor-pointer hover:bg-[#24525F] hover:scale-105 transition duration-300 flex flex-col justify-between h-full">
        <p class="font-bold">Reservation System</p>
        <hr class="border-t border-white my-2 w-full">
        <p class="text-lg font-bold">80%</p>
        <div class="w-full bg-gray-700 rounded-full h-2">
            <div class="bg-blue-500 h-2 rounded-full" style="width: 80%;"></div>
        </div>
    </div>

    <!-- POS System -->
    <div class="bg-[#17C3C3] text-white text-center rounded-lg px-6 py-3 cursor-pointer hover:bg-[#13A1A1] hover:scale-105 transition duration-300 flex flex-col justify-between h-full">
        <p class="font-bold">Point of Sale System</p>
        <hr class="border-t border-white my-2 w-full">
        <p class="text-lg font-bold">60%</p>
        <div class="w-full bg-gray-700 rounded-full h-2">
            <div class="bg-pink-500 h-2 rounded-full" style="width: 60%;"></div>
        </div>
    </div>

    <!-- Inventory Management -->
    <div class="bg-[#F4B942] text-white text-center rounded-lg px-6 py-3 cursor-pointer hover:bg-[#D89C34] hover:scale-105 transition duration-300 flex flex-col justify-between h-full">
        <p class="font-bold">Inventory Management</p>
        <hr class="border-t border-white my-2 w-full">
        <p class="text-lg font-bold">40%</p>
        <div class="w-full bg-gray-700 rounded-full h-2">
            <div class="bg-blue-500 h-2 rounded-full" style="width: 40%;"></div>
        </div>
    </div>

    <!-- Housekeeping & Maintenance -->
    <div class="bg-[#F08E7E] text-white text-center rounded-lg px-6 py-3 cursor-pointer hover:bg-[#D47A6C] hover:scale-105 transition duration-300 flex flex-col justify-between h-full">
        <p class="font-bold">Housekeeping & Maintenance</p>
        <hr class="border-t border-white my-2 w-full">
        <p class="text-lg font-bold">70%</p>
        <div class="w-full bg-gray-700 rounded-full h-2">
            <div class="bg-orange-500 h-2 rounded-full" style="width: 70%;"></div>
        </div>
    </div>

    <!-- Customer Relationship Management -->
    <div class="bg-[#E15565] text-white text-center rounded-lg px-6 py-3 cursor-pointer hover:bg-[#C34452] hover:scale-105 transition duration-300 flex flex-col justify-between h-full">
        <p class="font-bold">Customer Relationship Management</p>
        <hr class="border-t border-white my-2 w-full">
        <p class="text-lg font-bold">50%</p>
        <div class="w-full bg-gray-700 rounded-full h-2">
            <div class="bg-purple-500 h-2 rounded-full" style="width: 50%;"></div>
        </div>
    </div>
</div>

<!-- Charts Section -->
<div class="bg-gray-900 p-10 grid grid-cols-2 gap-6">
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