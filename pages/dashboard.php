<div class="grid grid-cols-5 bg-[#F7E6CA] p-5 gap-6 border-r-4 border-l-4 border-[#4E3B2A]">
    <!-- Reservation System -->
    <div onclick="showInfo('Reservation System', 'Handles booking and reservations for guests.')"
        class="bg-[#594423] text-white text-center rounded-lg px-6 py-3 cursor-pointer hover:bg-[#4E3B2A] hover:scale-105 transition duration-300 flex flex-col justify-between h-full">
        <p class="font-bold">Reservation System</p>
        <hr class="border-t border-white my-2 w-full">
        <p class="text-lg font-bold">80%</p>
        <div class="w-full bg-[#F7E6CA] rounded-full h-2">
            <div class="bg-[#2A6B7A] h-2 rounded-full" style="width: 80%;"></div>
        </div>
    </div>

    <!-- POS System -->
    <div onclick="showInfo('Point of Sale System', 'Manages transactions and sales processing.')"
        class="bg-[#594423] text-white text-center rounded-lg px-6 py-3 cursor-pointer hover:bg-[#4E3B2A] hover:scale-105 transition duration-300 flex flex-col justify-between h-full">
        <p class="font-bold">Point of Sale System</p>
        <hr class="border-t border-white my-2 w-full">
        <p class="text-lg font-bold">60%</p>
        <div class="w-full bg-[#F7E6CA] rounded-full h-2">
            <div class="bg-[#2A6B7A] h-2 rounded-full" style="width: 60%;"></div>
        </div>
    </div>

    <!-- Inventory Management -->
    <div onclick="showInfo('Inventory Management', 'Keeps track of stock levels and supplies.')"
        class="bg-[#594423] text-white text-center rounded-lg px-6 py-3 cursor-pointer hover:bg-[#4E3B2A] hover:scale-105 transition duration-300 flex flex-col justify-between h-full">
        <p class="font-bold">Inventory Management</p>
        <hr class="border-t border-white my-2 w-full">
        <p class="text-lg font-bold">40%</p>
        <div class="w-full bg-[#F7E6CA] rounded-full h-2">
            <div class="bg-[#2A6B7A] h-2 rounded-full" style="width: 40%;"></div>
        </div>
    </div>

    <!-- Housekeeping & Maintenance -->
    <div onclick="showInfo('Housekeeping & Maintenance', 'Manages room cleanliness and repairs.')"
        class="bg-[#594423] text-white text-center rounded-lg px-6 py-3 cursor-pointer hover:bg-[#4E3B2A] hover:scale-105 transition duration-300 flex flex-col justify-between h-full">
        <p class="font-bold">Housekeeping & Maintenance</p>
        <hr class="border-t border-white my-2 w-full">
        <p class="text-lg font-bold">70%</p>
        <div class="w-full bg-[#F7E6CA] rounded-full h-2">
            <div class="bg-[#2A6B7A] h-2 rounded-full" style="width: 70%;"></div>
        </div>
    </div>

    <!-- Customer Relationship Management -->
    <div onclick="showInfo('Customer Relationship Management', 'Handles guest communication and feedback.')"
        class="bg-[#594423] text-white text-center rounded-lg px-6 py-3 cursor-pointer hover:bg-[#4E3B2A] hover:scale-105 transition duration-300 flex flex-col justify-between h-full">
        <p class="font-bold">Customer Relationship Management</p>
        <hr class="border-t border-white my-2 w-full">
        <p class="text-lg font-bold">50%</p>
        <div class="w-full bg-[#F7E6CA] rounded-full h-2">
            <div class="bg-[#2A6B7A] h-2 rounded-full" style="width: 50%;"></div>
        </div>
    </div>
</div>

<!-- Charts Section -->
<div class="bg-[#F7E6CA] p-10 grid grid-cols-3 gap-6 border-r-4 border-l-4 border-[#4E3B2A]">
    <!-- Line Chart -->
    <div class="col-span-3 text-center border-4 rounded-lg border-[#4E3B2A] p-4">
        <h2 class="text-[#4E3B2A] text-xl font-bold mb-4">Tickets Solved Over Time</h2>
        <div class="flex items-center justify-center">
            <canvas id="lineChart" class="chart"></canvas>
        </div>
    </div>

    <!-- Donut Charts -->
    <div class="text-center border-4 rounded-lg border-[#4E3B2A] p-4">
        <h2 class="text-[#4E3B2A] text-xl font-bold mb-4">Ticket Categories</h2>
        <div class="flex items-center justify-center">
            <canvas id="pieChart1" class="chart"></canvas>
        </div>
    </div>
    <div class="text-center border-4 rounded-lg border-[#4E3B2A] p-4">
        <h2 class="text-[#4E3B2A] text-xl font-bold mb-4">Ticket Status</h2>
        <div class="flex items-center justify-center">
            <canvas id="pieChart2" class="chart"></canvas>
        </div>
    </div>

    <!-- Calendar -->
    <div class="border-4 border-[#4E3B2A] p-4 rounded-lg text-[#4E3B2A]">
        <div class="flex justify-between items-center mb-4">
            <button id="prevMonth" class="text-5xl px-3 text-[#4E3B2A] font-bold hover:text-[#A67B5B] transition-transform transform hover:scale-110">
                &#8592; <!-- Left Arrow -->
            </button>
            <h2 id="monthYear" class="text-2xl font-bold"></h2>
            <button id="nextMonth" class="text-5xl px-3 text-[#4E3B2A] font-bold hover:text-[#A67B5B] transition-transform transform hover:scale-110">
                &#8594; <!-- Right Arrow -->
            </button>
        </div>
        <div id="calendar" class="grid grid-cols-7 gap-2 text-center"></div>
    </div>
</div>

<!-- Table Section -->
<div class="bg-[#F7E6CA] p-10 border-r-4 border-l-4 border-b-4 border-[#4E3B2A]">
    <h2 class="text-[#4E3B2A] text-xl font-bold mb-4 text-center">Ticket Overview</h2>
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse text-[#4E3B2A]">
            <thead>
                <tr class="bg-[#4E3B2A] text-[#F7E6CA]">
                    <th class="p-3 border border-[#A67B5B]">Ticket ID</th>
                    <th class="p-3 border border-[#A67B5B]">Issue Type</th>
                    <th class="p-3 border border-[#A67B5B]">Assigned To</th>
                    <th class="p-3 border border-[#A67B5B]">Status</th>
                    <th class="p-3 border border-[#A67B5B]">Date Created</th>
                </tr>
            </thead>
            <tbody class="bg-transparent">
                <tr class="hover:bg-[#C19A6B] transition duration-300">
                    <td class="p-3 border border-[#A67B5B]">#1001</td>
                    <td class="p-3 border border-[#A67B5B]">Login Issue</td>
                    <td class="p-3 border border-[#A67B5B]">Randy Orton</td>
                    <td class="p-3 border border-[#A67B5B] text-yellow-700 font-bold">Pending</td>
                    <td class="p-3 border border-[#A67B5B]">2025-02-21</td>
                </tr>
                <tr class="hover:bg-[#C19A6B] transition duration-300">
                    <td class="p-3 border border-[#A67B5B]">#1002</td>
                    <td class="p-3 border border-[#A67B5B]">Payment Error</td>
                    <td class="p-3 border border-[#A67B5B]">John Cena</td>
                    <td class="p-3 border border-[#A67B5B] text-green-700 font-bold">Resolved</td>
                    <td class="p-3 border border-[#A67B5B]">2025-02-20</td>
                </tr>
                <tr class="hover:bg-[#C19A6B] transition duration-300">
                    <td class="p-3 border border-[#A67B5B]">#1003</td>
                    <td class="p-3 border border-[#A67B5B]">Login Issue</td>
                    <td class="p-3 border border-[#A67B5B]">Undertaker</td>
                    <td class="p-3 border border-[#A67B5B] text-green-700 font-bold">Resolved</td>
                    <td class="p-3 border border-[#A67B5B]">2025-02-20</td>
                </tr>
                <tr class="hover:bg-[#C19A6B] transition duration-300">
                    <td class="p-3 border border-[#A67B5B]">#1004</td>
                    <td class="p-3 border border-[#A67B5B]">Payment Error</td>
                    <td class="p-3 border border-[#A67B5B]">Browny James</td>
                    <td class="p-3 border border-[#A67B5B] text-red-700 font-bold">Declined</td>
                    <td class="p-3 border border-[#A67B5B]">2025-02-20</td>
                </tr>
                <tr class="hover:bg-[#C19A6B] transition duration-300">
                    <td class="p-3 border border-[#A67B5B]">#1005</td>
                    <td class="p-3 border border-[#A67B5B]">Payment Error</td>
                    <td class="p-3 border border-[#A67B5B]">Awra Briguela</td>
                    <td class="p-3 border border-[#A67B5B] text-yellow-700 font-bold">Pending</td>
                    <td class="p-3 border border-[#A67B5B]">2025-02-20</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>