<!DOCTYPE html>
<html lang="en">

<head>
    <title>Garbage Classification Project</title>
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

    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</head>

<style>
#exampleFormControlSelect1 {
    border-radius: 20px;
}

#div-box {
    background-color: #fff;
    margin-top: 1%;
    margin-bottom: 10%;
    /* box-shadow: 5px 5px 5px 5px #ccc; */
    padding: 3% 5% 10% 5%;
}

h3.text-center {
    color: #343a40;
}

.root-text-color {
    color: #343a40;
}

.root-text-center {
    text-align: center;
}

.block-div {
    border-style: ridge;
    border-width: 1px 0px 0px 0px;
    /* margin-top: 5px; */
}

/* #edit {
        display: none;
    } */
input {
    border-radius: 20px;
}

.radius20 {
    border-radius: 20px;
}

#div-box2 {
    background-color: #fff;
    margin-top: 5%;
    /* margin-bottom: 1%; */
    /* box-shadow: 5px 5px 5px 5px #ccc; */
    /* padding: 10% 5% 10% 5%; */
    width: 25%;
    text-align: center;
}

</style>

<body class="goto-here">

        <?php
        $servername = "35.247.164.240";
        $username = "peet";
        $password = "10042541";
        $dbname = "testdb";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM bin";
        $result = $conn->query($sql);
        // Type Garbage
        $p = 0;
        $g = 0;
        $m = 0;
        $t = 0;
        $SUM = 0;

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                // echo $row["id"] . "";
                // echo $row["img_name"]. "";
                // echo $row["type"]. "";
                // echo $row["bin"]. "";
                // echo $row["member_id"]. "<br>";
                
                if( $row["type"] == '01' ) {
                    $p += 1;
                }
                else if( $row["type"] == '02' ) {
                    $g += 1;
                }
                else if( $row["type"] == '03' ) {
                    $m += 1;
                }
                else {
                    $t += 1;
                }
                $SUM += 1;
            }
            // echo "<br>" . "SUM: " . $SUM . "  plastic: " . $p  . "  glass: " . $g . "  metal: "  . $m . "  trash: " . $t  ."";
            $pp = ($p / $SUM) * 100;
            $gg = ($g / $SUM) * 100;
            $mm = ($m / $SUM) * 100;
            $tt = ($t / $SUM) * 100;
            // echo "<br>" . number_format($p, 2) . " %";
            // echo "<br>" . number_format($g, 2) . " %";
            // echo "<br>" . number_format($m, 2) . " %";
            // echo "<br>" . number_format($t, 2) . " %";
            // echo "<br>" . number_format($t+$p+$g+$m, 2) . " %";
        } else {
            // echo "0 results";
        }
        $conn->close();
        ?>

        <?php
        $servername = "35.247.164.240";
        $username = "peet";
        $password = "10042541";
        $dbname = "testdb";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT COUNT(DISTINCT member_id) FROM bin";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
                // print_r(array_values($row));
                foreach ($row as $num)
                {
                    $user = $num;
                }
            }
        }
        ?>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.php"><img src="ico/iconKU.png">&nbsp;&nbsp;&nbsp;<img src="ico/unnamed.png">&nbsp;&nbsp;&nbsp;Garbage Classification Project</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="aboutWaste.php" class="nav-link">About Waste</a></li>
                    <li class="nav-item"><a href="aboutUS.php" class="nav-link">About US</a></li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->
    <!-- user show -->
    <div class = "container" id="div-box2">
    <h2 >จำนวนผู้ใช้ <?php echo $user ?> คน</h2>
    </div>

    <div class="container" id="div-box">
        <h3 class="text-center">รายงานข้อมูลขยะ</h3>
        <br>
        <div class="container-fluid">
            <div class="row">
                <div class="card">
                    <div class="container">
                        <br>
                        <div class="row">


                            <div class="col-sm-3 ftco-animate2">
                                <div class="product">
                                    <a href="#" class="img-prod"><img class="img-fluid" src="images/plastic.png"
                                            alt="Colorlib Template">
                                        <!-- <span class="status">30%</span> -->
                                        <div class="overlay"></div>
                                    </a>
                                    <div class="text py-3 pb-4 px-3 text-center">
                                        <h3><a href="#">Plastic bottles</a></h3>
                                        <h2><?php echo number_format($pp, 2)?> %</h2>
                                        <h5><?php echo $p ?> ชิ้น</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-3 ftco-animate2">
                                <div class="product">
                                    <a href="#" class="img-prod"><img class="img-fluid" src="images/glass.png"
                                            alt="Colorlib Template">
                                        <div class="overlay"></div>
                                    </a>
                                    <div class="text py-3 pb-4 px-3 text-center">
                                        <h3><a href="#">Glass bottles</a></h3>
                                        <h2><?php echo number_format($gg, 2)?> %</h2>
                                        <h5><?php echo $g ?> ชิ้น</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-3 ftco-animate2">
                                <div class="product">
                                    <a href="#" class="img-prod"><img class="img-fluid" src="images/can.png"
                                            alt="Colorlib Template">
                                        <div class="overlay"></div>
                                    </a>
                                    <div class="text py-3 pb-4 px-3 text-center">
                                        <h3><a href="#">Metal Cans</a></h3>
                                        <h2><?php echo number_format($mm, 2)?> %</h2>
                                        <h5><?php echo $m ?> ชิ้น</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-3 ftco-animate2">
                                <div class="product">
                                    <a href="#" class="img-prod"><img class="img-fluid" src="images/Trash.png"
                                            alt="Colorlib Template">
                                        <div class="overlay"></div>
                                    </a>
                                    <div class="text py-3 pb-4 px-3 text-center">
                                        <h3><a href="#">Trash</a></h3>
                                        <h2><?php echo number_format($tt, 2)?> %</h2>
                                        <h5><?php echo $t ?> ชิ้น</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div id="chart">

                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <footer class="ftco-footer ftco-section">
        <div class="container">

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


    <script>
        var plastic = <?php echo number_format($pp, 2)?>;
        var glass = <?php echo number_format($gg, 2)?>;
        var metal = <?php echo number_format($mm, 2)?>;
        var trash = <?php echo number_format($tt, 2)?>;
        var recycle = plastic + glass + metal;
        // console.log(recycle2);
    var options = {
        series: [{
            data: [recycle.toFixed(2), trash.toFixed(2)]
            // backgroundColor: 'green'
        }],
        chart: {
            type: 'bar',
            height: 350
        },
        plotOptions: {
            bar: {
                distributed: true,
                horizontal: true,
                // dataLabels: {
                // position: 'center'
                // },
            }
        },
        colors: ['#7CCD7C', '#A0522D'
        ],
        dataLabels: {
            enabled: true 
        },
        xaxis: {
            categories: ['รีไซเคิลได้ (%)','รีไซเคิลไม่ได้ (%)'
            ]
           
        },
        yaxis: {
            show: true,
            showAlways: true,
            seriesName: undefined,
            opposite: false,
            reversed: false,
            logarithmic: false,
            tickAmount: 6,
            min: 0,
            max: 100
        }
        
        
    };

    var chart = new ApexCharts(document.querySelector("#chart"), options);
    chart.render();
    </script>

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

    

</body>

</html>