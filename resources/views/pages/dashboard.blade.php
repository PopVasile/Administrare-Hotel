<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js"></script>
    <style>
        .content {
            height: 100%;
            width: 100%;
            position: fixed;
            z-index: 1;
            top: 100px;
            left: 300px;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
            border: 1px solid #f5f5f5;
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
                    <canvas id="rooms-chart"></canvas>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="chart-container" style="position: absolute; height:150px; width:350px; margin-left: 150px; margin-top:10%">
                    <canvas id="quests-chart"></canvas>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="chart-container" style="position: absolute; height:150px; width:350px; margin-left: 300px; margin-top:10%">
                    <canvas id="money-chart"></canvas>
                </div>
            </div>
        </div>
        <div class="row">

        </div>
    </div>

</body>

</html>
<script>
    new Chart(document.getElementById("rooms-chart"), {
        type: 'pie',
        data: {
            labels: ["Rooms On","Rooms Off"],
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
            labels: ["Single", "Double", "Twist", "Matrimoniala", "Tripla","Quad"],
            datasets: [{
                label: "Rooms Type",
                backgroundColor: ["#3e95cd", "#8e5ea2", "#3cba9f", "#e8c3b9", "#c45850","#06ffba"],
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
            labels: ["Super","Very Good","Good","Decent","Bad","Very Bad"],
            datasets: [{
                label: "Feedback",
                backgroundColor: ["green","blue","#f5f5f5","yellow","pink","red"],
                data: [2478, 5267, 734, 784, 433,100]
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