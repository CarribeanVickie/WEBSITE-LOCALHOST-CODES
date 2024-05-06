<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUPERIOR MOTORS REVENUE</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="styling/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">Superior Motor's Limited</a>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="settings.php">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="Login.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area me-1"></i>
                                        Area Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="stocksVsRevenueAreaChart" width="800" height="400"></canvas>
                                    <script>
                                    // Sample data (replace with your actual data)
                                    var labels = ["January", "February", "March", "April", "May"];
                                    var stocksData = [200, 250, 300, 280, 320]; // Stock values
                                    var revenueData = [5000, 5500, 6000, 5800, 6200]; // Revenue values

                                    // Create an area chart
                                    var ctx = document.getElementById('stocksVsRevenueAreaChart').getContext('2d');
                                    var myChart = new Chart(ctx, {
                                        type: 'line', // Change this to 'area'
                                        data: {
                                        labels: labels,
                                        datasets: [
                                            {
                                                label: 'Stocks',
                                                data: stocksData,
                                                borderColor: 'rgba(75, 192, 192, 1)',
                                                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                                                fill: true,
                                            },

                                            {
                                                label: 'Revenue',
                                                data: revenueData,
                                                borderColor: 'rgba(255, 99, 132, 1)',
                                                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                                                fill: true,
                                            },
                                        ],
                                    },
                                    options: {
                                        responsive: true,
                                        maintainAspectRatio: false,
                                        scales: {
                                            x: {
                                                display: true,
                                                scaleLabel: {
                                                    display: true,
                                                    labelString: 'Months',
                                                },
                                            },
                                            y: {
                                                beginAtZero: true,
                                                title: {
                                                    display: true,
                                                    text: 'Value',
                                                },
                                            },
                                        },
                                    },
                                    });
                                    </script>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar me-1"></i>
                                        Bar Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="stocksVsRevenueChart" width="800" height="400"></canvas>
                                    <script>
                                    // Sample data (replace with your actual data)
                                    var labels = ["January", "February", "March", "April", "May"];
                                    var stocksData = [200, 250, 300, 280, 320]; // Stock values
                                    var revenueData = [5000, 5500, 6000, 5800, 6200]; // Revenue values
                                    
                                    // Create a line chart
                                    var ctx = document.getElementById('stocksVsRevenueChart').getContext('2d');
                                    var myChart = new Chart(ctx, {
                                        type: 'line',
                                        data: {
                                            labels: labels,
                                            datasets: [
                                                {
                                                    label: 'Stocks',
                                                    data: stocksData,
                                                    borderColor: 'rgba(75, 192, 192, 1)',
                                                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                                                    fill: false,
                                                    yAxisID: 'y-axis-1',
                                            },
                                            {
                                                    label: 'Revenue',
                                                    data: revenueData,
                                                    borderColor: 'rgba(255, 99, 132, 1)',
                                                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                                                    fill: false,
                                                    yAxisID: 'y-axis-2',
                                                },
                                            ],
                                        },
                                        options: {
                                            responsive: true,
                                            maintainAspectRatio: false,
                                            scales: {
                                                x: {
                                                    display: true,
                                                    scaleLabel: {
                                                        display: true,
                                                        labelString: 'Months',
                                                },
                                        },
                                            yAxes: [
                                                    {
                                                        type: 'linear',
                                                        display: true,
                                                        position: 'left',
                                                        id: 'y-axis-1',
                                                        scaleLabel: {
                                                            display: true,
                                                            labelString: 'Stocks',
                                                    },
                                            },
                                                {
                                                        type: 'linear',
                                                        display: true,
                                                        position: 'right',
                                                        id: 'y-axis-2',
                                                        scaleLabel: {
                                                            display: true,
                                                            labelString: 'Revenue',
                                                    },
                                                },
                                            ],
                                         },
                                        },
                                    });
                                    </script>
                                    </div>
                                    </div>
                                </div>
                            </div>
                                <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area me-1"></i>
                                        PI CHART 
                                    </div>
                                    <div class="card-body"><canvas id="revenuePieChart" width="400" height="400"></canvas>
                                    <script>
                                    // Sample data (replace with your actual data)
                                    var labels = ["Cruise Bike", "Standard Bike", "Sport Bike", "Offroad Bike","Dual Bike","Touring Bike"];
                                    var revenueData = [5000, 3000, 7000, 4500, 2500, 4000, 5500];
                                    
                                    // Create a pie chart
                                    var ctx = document.getElementById('revenuePieChart').getContext('2d');
                                    var myChart = new Chart(ctx, {
                                        type: 'pie',
                                        data: {
                                            labels: labels,
                                            datasets: [{
                                                data: revenueData,
                                                backgroundColor: [
                                                    'rgba(255, 99, 132, 0.7)',
                                                    'rgba(75, 192, 192, 0.7)',
                                                    'rgba(255, 205, 86, 0.7)',
                                                    'rgba(54, 162, 235, 0.7)',
                                                    'rgba(86, 160, 105, 0.7)',
                                                    'rgba(14, 94, 115, 0.7)',
                                                ],
                                                borderColor: [
                                                    'rgba(255, 99, 132, 1)',
                                                    'rgba(75, 192, 192, 1)',
                                                    'rgba(255, 205, 86, 1)',
                                                    'rgba(54, 162, 235, 1)',
                                                    'rgba(86, 160, 105, 1)',
                                                    'rgba(14, 94, 115, 1)',
                                                ],
                                                borderWidth: 1,
                                            }],
                                        },
                                        options: {
                                            responsive: true,
                                            maintainAspectRatio: false,
                                        },
                                    });
                                    </script>
                                    </div>
                                </div>
                            </div>
                            <footer class="py-4 bg-light mt-auto">
                                <div class="container-fluid px-4">
                                    <div class="d-flex align-items-center justify-content-between small">
                                        <div class="text-muted">Copyright &copy; SUPERIOR MOTORS LTD 2024</div>
                                        <div>
                                            <a href="#">Privacy Policy</a>
                                            &middot;
                                             <a href="#">Terms &amp; Conditions</a>
                                        </div>
                                    </div>
                                </div>
                            </footer>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
</body>
</html>