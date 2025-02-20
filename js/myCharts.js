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