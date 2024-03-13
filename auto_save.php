<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto Save</title>
    <?php include("include/script.php") ?>
</head>

<body>
    <?php include("include/topbar.php") ?>
    <br>
    <div class="container">
        <h4 class="fw-bold text-center">บันทึกอัตโนมัติ</h4>
        <div class="row">
            <div class="container">
                <div class="row no-gutters align-items-center">
                    <div class="col-auto d-flex">
                        <h5 class="fw-bold mb-0">รายการ</h5>
                    </div>

                    <div class="col mr-2 d-flex justify-content-end">
                        <div class="dropdown">
                            <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                ทั้งหมด
                            </button>
                            <ul class="dropdown-menu" style="max-height: 200px; overflow-y: auto;">
                                <li><a class="dropdown-item" href="#">ทั้งหมด</a></li>
                                <li><a class="dropdown-item" href="#">ทุกวัน</a></li>
                                <li><a class="dropdown-item" href="#">ทุกสัปดาห์</a></li>
                                <li><a class="dropdown-item" href="#">ทุกเดือน</a></li>
                                <li><a class="dropdown-item" href="#">ทุก 3 เดือน</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <br><br>
            <div class="col-xl">
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
                <br>
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

    </script>
    <?php
        include("include/footer.php")
        ?>
</body>

</html>