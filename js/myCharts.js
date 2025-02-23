// Line Chart
const ctx1 = document.getElementById('lineChart').getContext('2d');
new Chart(ctx1, {
    type: 'line',
    data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
        datasets: [{
            label: 'Tickets Solved',
            data: [10, 25, 40, 50, 65, 80],
            borderColor: '#2A6B7A', // Brown shade
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
            backgroundColor: ['#4E3B2A', '#8B5E3B', '#C19A6B'] // Brown shades
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
            backgroundColor: ['#A67B5B', '#594423'] // Brown shades
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false
    }
});
