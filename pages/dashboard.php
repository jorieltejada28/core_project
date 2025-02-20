<div class="grid grid-cols-5 bg-gray-900 p-5 gap-6">
    <div class="bg-[#2F697D] text-white text-center rounded-lg px-6 py-3">
        <p class="font-bold">Total</p>
        <p>800</p>
    </div>
    <div class="bg-[#17C3C3] text-white text-center rounded-lg px-6 py-3">
        <p class="font-bold">Involuntary</p>
        <p>200</p>
    </div>
    <div class="bg-[#F4B942] text-white text-center rounded-lg px-6 py-3">
        <p class="font-bold">Voluntary</p>
        <p>100</p>
    </div>
    <div class="bg-[#F08E7E] text-white text-center rounded-lg px-6 py-3">
        <p class="font-bold">Female</p>
        <p>200</p>
    </div>
    <div class="bg-[#E15565] text-white text-center rounded-lg px-6 py-3">
        <p class="font-bold">Male</p>
        <p>100</p>
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

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<style>
    .chart {
        width: 100% !important;
    }

    #lineChart {
        height: 250px !important;
    }

    #pieChart1,
    #pieChart2 {
        height: 400px !important;
    }
</style>

<script>
    // Line Chart
    const ctx1 = document.getElementById('lineChart').getContext('2d');
    new Chart(ctx1, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
            datasets: [{
                label: 'Tickets Solved',
                data: [10, 25, 40, 50, 65, 80],
                borderColor: '#17C3C3',
                borderWidth: 2,
                fill: false
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false
        }
    });

    // First Donut Chart
    const ctx2 = document.getElementById('pieChart1').getContext('2d');
    new Chart(ctx2, {
        type: 'doughnut',
        data: {
            labels: ['Info', 'Help', 'Tech'],
            datasets: [{
                data: [300, 150, 200],
                backgroundColor: ['#2F697D', '#17C3C3', '#F4B942']
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false
        }
    });

    // Second Donut Chart
    const ctx3 = document.getElementById('pieChart2').getContext('2d');
    new Chart(ctx3, {
        type: 'doughnut',
        data: {
            labels: ['Resolved', 'Pending'],
            datasets: [{
                data: [500, 100],
                backgroundColor: ['#F08E7E', '#E15565']
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false
        }
    });
</script>
