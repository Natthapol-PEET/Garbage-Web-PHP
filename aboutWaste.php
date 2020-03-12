<!DOCTYPE html>
<html lang="en">

<head>
    <title>About Waste</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">


    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">

    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/iconKU144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/iconKU114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/iconKU72.png" />
    <link rel="apple-touch-icon-precomposed" href="ico/iconKU57.png" />
    <link rel="shortcut icon" href="ico/iconKU.png" />

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>

<style>
body {
    font-family: "Poppins", Arial, sans-serif;
    background: #fff;
    font-size: 15px;
    line-height: 1.8;
    font-weight: 400;
    color: gray;
    /* background: url(../images/kuBlack.jpg) no-repeat fixed; */
    background-repeat: no-repeat;
    background-size: 100%;

}



.root-text-center {
    text-align: center;
}

.text-left {
    text-align: left;
}

.text-right {
    text-align: right;
}
</style>

<body class="goto-here">

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <!-- <a class="navbar-brand" href="index.php">Garbage Classification Project</a> -->
            <a class="navbar-brand" href="index.php"><img src="ico/iconKU.png">&nbsp;&nbsp;&nbsp;<img
                    src="ico/unnamed.png">&nbsp;&nbsp;&nbsp;Garbage Classification Project</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                    <li class="nav-item active"><a href="aboutWaste.php" class="nav-link">About Waste</a></li>
                    <li class="nav-item"><a href="aboutUS.php" class="nav-link">About US</a></li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    <!-- <div class="hero-wrap hero-bread" style="background-image: url('images/ku3.png');">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    
                </div>
            </div>
        </div>
    </div> -->

    <section class="ftco-section ftco-no-pb ftco-no-pt bg-light">
        <div class="container">
            <div class="row">

                <div class="col-12 root-text-center">

                    <br>
                    <h4 class="text-left">ข้อมูลปริมาณขยะบริเวณอาคาร 7 ที่มหาวิทยาลัยเกษตรศาสตร์ วิทยาเขตเฉลิมพระเกียรติ จังหวัดสกลนคร</h4>
                    <div class="col-12">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ลำดับ</th>
                                    <th>ประเภทขยะ</th>
                                    <th>ปริมาณ (%)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Recyclable waste</td>
                                    <td>47.22</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Non-recycyclable waste</td>
                                    <td>37.45</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Biodegradable waste</td>
                                    <td>15.33</td>
                                </tr>
                                <tr>
                                    <td colspan="2">รวม</td>
                                    <td>100</td>
                                </tr>

                            </tbody>
                        </table>

                        <div id="piechart" style="width: 100%; height: 500px;"></div>
                    </div>

                    <br>
                    <!-- <h4 class="text-left">รายงานชนิดขยะ</h4> -->
                    <div class="col-12">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ลำดับ</th>
                                    <th>ชนิดขยะ</th>
                                    <th>ปริมาณ (%)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Paper</td>
                                    <td>18.60</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>PET</td>
                                    <td>28.25</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Mixed Plastic</td>
                                    <td>35.12</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>HDPE</td>
                                    <td>4.06</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Glass</td>
                                    <td>8.69</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Metal cans</td>
                                    <td>5.08</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Iron</td>
                                    <td>0.20</td>
                                </tr>
                               

                            </tbody>
                        </table>

                        <div id="piechart2" style="width: 100%; height: 650px;"></div>
                    </div>

                </div>
                <div class="col-md-12 root-text-center">
                    <br>
                    <h3 class="text-left">ปริมาณขยะของมหาวิทยาลัยเกษตรศาสตร์ วิทยาเขตเฉลิมพระเกียรติ จังหวัดสกลนคร ปี 2559</h3 class="text-left">
                    <br>
                    <div class="col-12">
                        <img src="logo/5.jpg" height="50%" width="50%">
                        <br>
                        <span>อ้างอิงจาก : <a
                                href="https://www.csc.ku.ac.th/uigreen/?p=2904#prettyPhoto">https://www.csc.ku.ac.th</a></span>
                    </div>
                </div>
                <div class="col-md-12 root-text-center">
                    <br>
                    <h3 class="text-left">นิยามของประเภทขยะทั้งที่รีไซเคิลได้และรีไซเคิลไม่ได้</h3 class="text-left">
                    <br>
                    <div class="col-12">
                        <img src="logo/w1.jpg" height="50%" width="50%">
                        <br>
                        <span>อ้างอิงจาก : <a
                                href="https://lifestyle.campus-star.com">https://lifestyle.campus-star.com</a></span>
                    </div>
                </div>

                <div class="col-md-12 root-text-center">
                    
                    <br>
                    <div class="col-12">
                        <img src="logo/02.jpg" height="50%" width="50%">
                        <br>
                        <span>อ้างอิงจาก : <a
                                href="https://home.kapook.com/view214035.html">https://home.kapook.com</a></span>
                    </div>
                </div>

                <div class="col-md-12 root-text-center">
                    <br>
                    <div class="col-12">
                        <img src="logo/03.jpg" height="50%" width="50%">
                        <br>
                        <span>อ้างอิงจาก : <a
                                href="https://home.kapook.com/view214035.html">https://home.kapook.com</a></span>
                    </div>
                </div>

                <div class="col-md-12 root-text-center">
                    <br>
                    <h3 class="text-left">Roadmap การจัดการขยะพลาสติกของกรมควบคุมมลพิษ</h3 class="text-left">
                    <br>
                    <div class="col-12">
                        <img src="logo/4.jpg" height="50%" width="50%">
                        <br>
                        <span>อ้างอิงจาก : <a
                                href="http://www.pcd.go.th/info_serv/waste.html">http://www.pcd.go.th</a></span>
                                
                    </div>
                </div>
                <br>

                

            </div>
        </div>
        <br>
    </section>



    <footer class="ftco-footer ftco-section">
        <div class="container">
            <!-- <div class="row">
                <div class="mouse">
                    <a href="#" class="mouse-icon">
                        <div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
                    </a>
                </div>
            </div> -->
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">ติดต่อสอบถาม</h2>
                        <address>
                            <!-- <strong>ติดต่อเรา</strong><br> -->
                            มหาวิทยาลัยเกษตรศาสตร์<br>
                            วิทยาเขตเฉลิมพระเกียรติ จังหวัดสกลนคร<br>
                            59 หมู่ 1 ถ.วปรอ 366 ต.เชียงเครือ อ.เมือง จ.สกลนคร 47000<br>
                            โทรศัพท์ 061-0287788
                            <!-- 59 หมู่ 1 ตำบลเชียงเครือ อำเภอเมืองสกลนคร<br>
  							จังหวัดสกลนคร 47000 -->
                        </address>
                        <!-- <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                            <li class="ftco-animate"><a href="https://www.facebook.com/KU.Sakonnakhon/"><span
                                        class="icon-facebook"></span></a></li>
                        </ul> -->
                    </div>
                </div>

                <!-- <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">ติดต่อหน่วยงานภายใน</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <i class="icon-phone"></i> 061-0287788 : ประชาสัมพันธ์และวิเทศสัมพันธ์ <br>
                                <i class="icon-phone"></i> 081-7391745 : หน่วยทะเบียนและประมวลผล <br>
                                <i class="icon-phone"></i> 086-2241118 : หน่วยแนะแนวและรับเข้า (ตรี/โท) <br>
                                <i class="icon-phone"></i> 098-4854435 : ทุน กยศ. และ กรอ. <br>
                                <i class="icon-phone"></i> 088-5108007 : หน่วยหอพักนิสิต <br>
                                <i class="icon-phone"></i> 042-725042 ต่อ 5503 : งานเทคโนโลยีสารสนเทศ
                            </ul>
                        </div>
                    </div>
                </div> -->
            </div>
            <div class="row">
                <div class="col-md-12 text-center">

                    <!-- <p>
                 
                        Copyright &copy;<script>
                        document.write(new Date().getFullYear());
                        </script> All rights reserved | This template is made with <i class="icon-heart color-danger"
                            aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        
                    </p> -->
                </div>
            </div>
        </div>
    </footer>



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" /></svg></div>


    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
    </script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>

    <script type="text/javascript">
    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

        var data = google.visualization.arrayToDataTable([
            ['Task', 'Hours per Day'],
            ['Recyclable waste', 47.22],
            ['Non-recycyclable waste', 37.45],
            ['Biodegradable waste', 15.33]
        ]);

        var options = {
            title: 'รายงานประเภทขยะ (%)'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
    }
    google.charts.setOnLoadCallback(drawChart2);

    function drawChart2() {
        var data2 = google.visualization.arrayToDataTable([
            ['bim', 'Day'],
            ['Paper', 18.60],
            ['PET', 28.25],
            ['Mixed Plastic', 35.12],
            ['HDPE', 4.06],
            ['Glass', 8.69],
            ['Metal cans', 5.08],
            ['Iron', 0.20]
        ]);

        var options2 = {

            title: 'รายงานชนิดขยะ (%)',
            pieHole: 0.4,
        };

        var chart2 = new google.visualization.PieChart(document.getElementById('piechart2'));
        chart2.draw(data2, options2);
    }
    </script>

</body>

</html>