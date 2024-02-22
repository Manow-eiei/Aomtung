<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สรุปยอด</title>
    <?php include("include/script.php") ?>
</head>

<body>
    <?php include("include/topbar.php") ?>

    <br>
    <div class="container">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h3 class="mb-0 text-pink">สรุปยอดรายรับ - รายจ่าย (>_<) </h3>
        </div>
        <center>
            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
                <label class="btn btn-outline-primary" for="btnradio1">วัน</label>

                <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                <label class="btn btn-outline-primary" for="btnradio2">สัปดาห์</label>

                <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                <label class="btn btn-outline-primary" for="btnradio3">เดือน</label>

                <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                <label class="btn btn-outline-primary" for="btnradio4">ปี</label>
            </div>
        </center> <br>


        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-center">
                        <h5>รายงานสรุปยอดรายรับ - รายจ่าย</h5>
                    </div>

                    <div class="card-body">
                        <div>
                            <canvas id="densityChart"></canvas>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div>
            <canvas id="densityChart"></canvas>
        </div>

        <!-- <canvas id="densityChart" width="600" height="400"></canvas> -->
        <script>
        var densityCanvas = document.getElementById("densityChart");

     

        var densityData = {
            label: 'Density of Planet (kg/m3)',
            data: [5427, 5243, 5514, 3933, 1326, 687, 1271, 1638],
            backgroundColor: 'rgba(0, 99, 132, 0.6)',
            borderColor: 'rgba(0, 99, 132, 1)',
            yAxisID: "y-axis-density"
        };

        var gravityData = {
            label: 'Gravity of Planet (m/s2)',
            data: [3.7, 8.9, 9.8, 3.7, 23.1, 9.0, 8.7, 11.0],
            backgroundColor: 'rgba(99, 132, 0, 0.6)',
            borderColor: 'rgba(99, 132, 0, 1)',
            yAxisID: "y-axis-gravity"
        };

        var planetData = {
            labels: ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune"],
            datasets: [densityData, gravityData]
        };

        var chartOptions = {
            scales: {
                xAxes: [{
                    barPercentage: 1,
                    categoryPercentage: 0.6
                }],
                yAxes: [{
                    id: "y-axis-density"
                }, {
                    id: "y-axis-gravity"
                }]
            }
        };

        var barChart = new Chart(densityCanvas, {
            type: 'bar',
            data: planetData,
            options: chartOptions
        });
        </script>

    </div>

    <?php
    include("include/footer.php")
    ?>
</body>

</html>