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
        </center> <br><br>


        <div class="row">
            <div class="col-lg-6 col-lg-6">

                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-center">
                        <h5>รายงานสรุปยอดรายรับ - รายจ่าย</h5>
                    </div>

                    <div class="card-body">
                        <!-- Chart 5 - Bootstrap Brain Component -->

                        <!-- <div class="d-block d-sm-flex align-items-center justify-content-between mb-3">
                            <div class="mb-3 mb-sm-0">
                                <h5 class="card-title widget-card-title">Revenue</h5>
                            </div>
                            <div>
                                <select class="form-select text-secondary border-light-subtle">
                                    <option value="1">Month</option>
                                    <option value="2">Week</option>
                                    <option value="3">Day</option>
                                </select>
                            </div>
                        </div> -->
                        <div id="bsb-chart-5"></div>
                    </div>
                </div>
            </div>
        
            <div class="col-xl-6 col-md-6 mb-4">
                <div class="container">
                    
                    <!-- <div class="col-8 mx-2">
                            <h4 class="fw-bold mb-0 ">รายการย้อนหลัง</h4>
                        </div> -->
                    <div class="row no-gutters align-items-center">
                            <h5 class="fw-bold mb-0 text-center">รายการย้อนหลัง</h5>         
                    </div>
                </div>

                <br>

                <div class="card border-left-primary ">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto d-flex">
                                <h5 class="fw-bold mb-0 text-lightblue">รายรับ</h5>
                            </div>

                            <div class="col mr-2 d-flex justify-content-end">
                                <div class="fw-bold h5 text-lightblue">10,000.00 ฿</div>
                            </div>
                            <div class="w-100"></div>
                            <div class="col-auto d-flex">
                                <p class="fw-bold mb-0 ">แน่นอน</p>
                            </div>
                            <div class="col mr-2 d-flex justify-content-end">
                                <p class="fw-bold mb-0">9,000.00 ฿</p>
                            </div>

                            <div class="w-100"></div>
                            <div class="col-auto d-flex">
                                <p class="fw-bold ">ไม่แน่นอน</p>
                            </div>
                            <div class="col mr-2 d-flex justify-content-end">
                                <p class="fw-bold mb-0">1,000.00 ฿</p>
                            </div>
                            
                            <hr>

                            <div class="col-auto d-flex">
                                <h5 class="fw-bold text-red">รายจ่าย</h5>
                            </div>

                            <div class="col mr-2 d-flex justify-content-end">
                                <div class="fw-bold h5 text-red">8,000.00 ฿</div>
                            </div>
                            <div class="w-100"></div>
                            <div class="col-auto d-flex">
                                <p class="fw-bold mb-0 ">จำเป็น</p>
                            </div>
                            <div class="col mr-2 d-flex justify-content-end">
                                <p class="fw-bold mb-0">5,000.00 ฿</p>
                            </div>

                            <div class="w-100"></div>
                            <div class="col-auto d-flex">
                                <p class="fw-bold mb-0 ">ไม่จำเป็น</p>
                            </div>
                            <div class="col mr-2 d-flex justify-content-end">
                                <p class="fw-bold mb-0">3,000.00 ฿</p>
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


        <script src="https://cdn.jsdelivr.net/npm/apexcharts">
        </script>
        <script>
        ! function() {
            var t = {
                    891: function() {
                        ! function() {
                            const t = {
                                init() {
                                    const t = {
                                        series: [{
                                            name: "รายรับ",
                                            data: [500, 1500, 600, 1000, 2400, 500, 100, 300, 500,
                                                1500, 300, 2200
                                            ]
                                        }, {
                                            name: "รายจ่าย",
                                            data: [2500, 700, 450, 700, 2100, 700, 500, 750, 1200,
                                                1800, 900, 1900
                                            ]
                                        }],
                                        chart: {
                                            type: "bar",
                                            toolbar: {
                                                show: !1
                                            }
                                        },
                                        colors: ["var(--bs-primary)", "var(--bs-primary-bg-subtle)"],
                                        states: {
                                            hover: {
                                                filter: {
                                                    type: "darken",
                                                    value: .9
                                                }
                                            }
                                        },
                                        plotOptions: {
                                            bar: {
                                                horizontal: !1,
                                                columnWidth: "45%",
                                                endingShape: "rounded"
                                            }
                                        },
                                        dataLabels: {
                                            enabled: !1
                                        },
                                        legend: {
                                            position: "bottom"
                                        },
                                        xaxis: {
                                            categories: ["ม.ค.", "ก.พ.", "มี.ค.", "เม.ย.", "พ.ค.", "มิ.ย.",
                                                "ก.ค.", "ส.ค.", "ก.ย.", "ต.ค.", "พ.ย.", "ธ.ค."
                                            ]
                                        },
                                        yaxis: {
                                            title: {
                                                text: "จำนวนเงิน (บาท)"
                                            }
                                        },
                                        tooltip: {
                                            theme: "dark",
                                            y: {
                                                formatter(t) {
                                                    return "จำนวน " + t + " บาท "
                                                }
                                            }
                                        }
                                    };
                                    new ApexCharts(document.querySelector("#bsb-chart-5"), t).render()
                                }
                            };

                            function e() {
                                t.init()
                            }
                            "loading" === document.readyState ? document.addEventListener("DOMContentLoaded", e) :
                                e(), window.addEventListener("load", (function() {}), !1)
                        }()
                    }
                },
                e = {};

            function n(r) {
                var o = e[r];
                if (void 0 !== o) return o.exports;
                var a = e[r] = {
                    exports: {}
                };
                return t[r](a, a.exports, n), a.exports
            }
            n.n = function(t) {
                    var e = t && t.__esModule ? function() {
                        return t.default
                    } : function() {
                        return t
                    };
                    return n.d(e, {
                        a: e
                    }), e
                }, n.d = function(t, e) {
                    for (var r in e) n.o(e, r) && !n.o(t, r) && Object.defineProperty(t, r, {
                        enumerable: !0,
                        get: e[r]
                    })
                }, n.o = function(t, e) {
                    return Object.prototype.hasOwnProperty.call(t, e)
                },
                function() {
                    "use strict";
                    n(891)
                }()
        }();
        </script>
    </div>

    <?php
    include("include/footer.php")
    ?>
</body>

</html>