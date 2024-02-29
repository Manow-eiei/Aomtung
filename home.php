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
        <div class="row">
            <div class="col-lg-6 col-md-6 mb-4">
                <div class="card border-left-primary ">
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
                <br>



                <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-4">
                    <div class="col-6">
                        <div class="card border-left-primary ">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto text-center">
                                        <img src="img/up_icon.png" alt="" width="60px">
                                    </div>
                                    <div class="col mr-2 text-center">
                                        <div class="text-s font-weight-bold ">
                                            รายรับ (บาท)</div>
                                        <div class="h3 mb-0 ">
                                            <span>10,000.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card border-left-primary ">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto text-center">
                                        <img src="img/down_icon.png" alt="" width="60px">
                                    </div>
                                    <div class="col mr-2 text-center">
                                        <div class="text-s font-weight-bold ">
                                            รายรับ (บาท)</div>
                                        <div class="h3 mb-0 ">
                                            <span>2,000.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>


                <div class="card border-left-primary ">
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


            <div class="col-xl-6 col-md-6 mb-4">
                <div class="container">
                    <!-- <div class="col-8 mx-2">
                            <h4 class="fw-bold mb-0 ">รายการย้อนหลัง</h4>
                        </div> -->
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto d-flex">
                            <h5 class="fw-bold mb-0">รายการย้อนหลัง</h5>
                        </div>

                        <div class="col mr-2 d-flex justify-content-end">
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    มกราคม 67
                                </button>
                                <ul class="dropdown-menu" style="max-height: 200px; overflow-y: auto;">
                                    <li><a class="dropdown-item" href="#">มกราคม</a></li>
                                    <li><a class="dropdown-item" href="#">กุมภาพันธ์</a></li>
                                    <li><a class="dropdown-item" href="#">มีนาคม</a></li>
                                    <li><a class="dropdown-item" href="#">เมษายน</a></li>
                                    <li><a class="dropdown-item" href="#">พฤษภาคม</a></li>
                                    <li><a class="dropdown-item" href="#">มิถุนายน</a></li>
                                    <li><a class="dropdown-item" href="#">กรกฎาคม</a></li>
                                    <li><a class="dropdown-item" href="#">สิงหาคม</a></li>
                                    <li><a class="dropdown-item" href="#">กันยายน</a></li>
                                    <li><a class="dropdown-item" href="#">ตุลาคม</a></li>
                                    <li><a class="dropdown-item" href="#">พฤศจิกายน</a></li>
                                    <li><a class="dropdown-item" href="#">ธันวาคม</a></li>
                                    <!-- Add more items as needed -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <br>

                <div class="card border-left-primary ">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto d-flex">
                                <h5 class="fw-bold mb-0 text-darkblue">รายรับแน่นอน</h5>
                            </div>

                            <div class="col mr-2 d-flex justify-content-end">
                                <div class="fw-bold h5 text-darkblue">+1,000.00 ฿</div>
                            </div>
                            <div class="w-100"></div>
                            <div class="col-auto d-flex">
                                <p class="fw-bold mb-0 ">เงินเดือน</p>
                            </div>
                            <div class="col mr-2 d-flex justify-content-end">
                                <p class="fw-light mb-0">22/12/2023 11:17</p>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="card border-left-primary ">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto d-flex">
                                <h5 class="fw-bold mb-0 text-lightblue">รายรับไม่แน่นอน</h5>
                            </div>

                            <div class="col mr-2 d-flex justify-content-end">
                                <div class="fw-bold h5 text-lightblue">+500.00 ฿</div>
                            </div>

                            <div class="w-100"></div>
                            <div class="col-auto d-flex">
                                <p class="fw-bold mb-0 ">เงินเดือน</p>
                            </div>
                            <div class="col mr-2 d-flex justify-content-end">
                                <p class="fw-light mb-0">22/12/2023 11:17</p>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="card border-left-primary ">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto d-flex">
                                <h5 class="fw-bold mb-0 text-darkpink">รายรับไม่แน่นอน</h5>
                            </div>

                            <div class="col mr-2 d-flex justify-content-end">
                                <div class="fw-bold h5 text-darkpink">-2,500.00 ฿</div>
                            </div>

                            <div class="w-100"></div>
                            <div class="col-auto d-flex">
                                <p class="fw-bold mb-0 ">ค่าอาหาร</p>
                            </div>
                            <div class="col mr-2 d-flex justify-content-end">
                                <p class="fw-light mb-0">22/12/2023 11:17</p>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="card border-left-primary ">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto d-flex">
                                <h5 class="fw-bold mb-0 text-yellow">รายจ่ายไม่จำเป็น</h5>
                            </div>

                            <div class="col mr-2 d-flex justify-content-end">
                                <div class="fw-bold h5 text-yellow">-500.00 ฿</div>
                            </div>

                            <div class="w-100"></div>
                            <div class="col-auto d-flex">
                                <p class="fw-bold mb-0 ">บันเทิง</p>
                            </div>
                            <div class="col mr-2 d-flex justify-content-end">
                                <p class="fw-light mb-0">22/12/2023 11:17</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
    <?php
        include("include/footer.php")
        ?>
</body>

</html>