<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js"></script>
    <style>
        .table-rooms {

            position: absolute;
            top: 600px;
            
            width: 80%;
            text-align: center;

        }
        .chart-container
        {
            margin-left: 150px;
        }

        @media only screen and (max-width: 1700px) {
            .pie_graph  {
               zoom: 0.8;
            }
            .table-rooms{
                zoom: 0.9;
            }
        }
        
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <h1>Dashboard</h1>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="chart-container" style="position: absolute; height:150px; width:350px; margin-top:10%">
                    <canvas id="rooms-chart" class="pie_graph"></canvas>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="chart-container" style="position: absolute; height:150px; width:350px; margin-top:10%">
                    <canvas id="quests-chart" class="pie_graph"></canvas>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="chart-container" style="position: absolute; height:150px; width:350px; margin-top:10%">
                    <canvas id="money-chart" class="pie_graph"></canvas>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="table-rooms">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Room</th>
                            <th scope="col">Type</th>
                            <th scope="col">Price</th>
                            <th scope="col">ON/OFF</th>
                            <th scope="col">Numbers</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

</html>
<script>
    new Chart(document.getElementById("rooms-chart"), {
        type: 'pie',
        data: {
            labels: ["Rooms On", "Rooms Off"],
            datasets: [{
                label: "Rooms On/Off",
                backgroundColor: ["green", "#f5f5f5"],
                data: [2478, 267]
            }]
        },
        options: {
            title: {
                display: true,
                text: 'Rooms capability in the hotel'
            }
        },
    });
    new Chart(document.getElementById("money-chart"), {
        type: 'pie',
        data: {
            labels: ["Single", "Double", "Twist", "Matrimoniala", "Tripla", "Quad"],
            datasets: [{
                label: "Rooms Type",
                backgroundColor: ["#3e95cd", "#8e5ea2", "#3cba9f", "#e8c3b9", "#c45850", "#06ffba"],
                data: [2478, 5267, 734, 784, 433, 2000]
            }]
        },
        options: {
            title: {
                display: true,
                text: 'Preferred room type'
            }
        },
    });
    new Chart(document.getElementById("quests-chart"), {
        type: 'doughnut',
        data: {
            labels: ["Super", "Very Good", "Good", "Decent", "Bad", "Very Bad"],
            datasets: [{
                label: "Feedback",
                backgroundColor: ["green", "blue", "#f5f5f5", "yellow", "pink", "red"],
                data: [2478, 5267, 734, 784, 433, 100]
            }]
        },
        options: {
            title: {
                display: true,
                text: 'Feedback from guest'
            }
        }
    });
</script>