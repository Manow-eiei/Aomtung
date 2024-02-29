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
            label: 'รายรับ',
            data: [500, 1500, 600, 1000, 2400, 500, 100, 300, 500, 1500, 300, 2200],
            backgroundColor: 'rgba(129, 200, 228, 1)',
            borderColor: '#81C8E4',
            yAxisID: "y-axis-density"
        };
     

        var gravityData = {
            label: 'รายจ่าย',
            data: [2500, 700, 450, 700, 2100, 700, 500, 750, 1200, 1800, 900, 1900],
            backgroundColor: 'rgba(255, 134, 134, 1)',
            borderColor: '#81C8E4',
            yAxisID: "y-axis-gravity"
        };

        var planetData = {
            labels: ["ม.ค.", "ก.พ.", "มี.ค.", "เม.ย.", "พ.ค.", "มิ.ย.", "ก.ค.", "ส.ค.", "ก.ย.", "ต.ค.", "พ.ย.", "ธ.ค."],
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