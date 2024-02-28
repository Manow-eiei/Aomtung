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



    <div class="container">
        <div class="row">
            <!-- ... โค้ด Card ทางซ้าย ... -->

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

            <div class="col-xl-6 col-md-6 mb-4">

                <div class="card border-left-primary ">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto d-flex">
                                <h5 class="fw-bold mb-0">รายรับแน่นอน</h5>
                            </div>

                            <div class="col mr-2 d-flex justify-content-end">
                                <div class="fw-bold h5">+1,000.00 ฿</div>
                            </div>

                            <!-- เพิ่ม div ใหม่ -->
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
            </div>
        </div>


        <?php
    include("include/footer.php")
    ?>
</body>

</html>