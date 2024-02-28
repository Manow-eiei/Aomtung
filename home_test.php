<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Aomtung</title>
    <?php include("include/script.php") ?>
</head>

<body>
    <?php include("include/topbar.php") ?>

    <br>
    <div class="container">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h3 class="mb-0 text-pink">ยินดีต้อนรับสู่ ออมตุง ค้าบบบฟู่ววว(>_<) </h3>
        </div>

        <div class="row">
            <div class="col-xl-6 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto text-center">
                                <img src="img/wallet.png" alt="" width="80px">
                            </div>
                            <div class="col mr-2 text-center">
                                <div class="text-s">
                                    คงเหลือ (บาท)
                                </div>
                                <div class="h3 mb-0">
                                    <span>8,000.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <center>
                <div class="row">
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card  shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <img src="img/up.png" alt="" width="60px">
                                    </div>
                                    <div class="col mr-2">
                                        <div class="text-s font-weight-bold">
                                            รายรับ (บาท)</div>
                                        <div class="h3 mb-0 ">
                                            <span>10,000.00</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card  shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <img src="img/down.png" alt="" width="70px">
                                    </div>
                                    <div class="col mr-2">
                                        <div class="text-s ">
                                            รายจ่าย (บาท)</div>
                                        <div class="h3 mb-0 ">
                                            <span>2,000.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </center>
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-center">
                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                            <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off"
                                checked>
                            <label class="btn btn-outline-dark btn-block" for="btnradio1">รายรับ</label>

                            <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                            <label class="btn btn-outline-danger btn-block" for="btnradio2">รายจ่าย</label>
                        </div>
                    </div>

                    <div class="card-body">
                        <div>
                            <canvas id="myChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <canvas id="myChart"></canvas>
        </div>

        <script>
        const ctx = document.getElementById('myChart');

        new Chart(ctx, {
            type: 'doughnut',
            data: {
                // labels: ['Red', 'Yellow' , 'Blue'],
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '# of Votes',
                    data: [15000, 2500, 500, 8000, 2700, 1500],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
        </script>
    </div>

    <?php
    include("include/footer.php")
    ?>
</body>

</html>