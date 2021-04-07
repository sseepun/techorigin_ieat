<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <style>
        /* Breadcrumb */
        .breadcrumb-01{
            position:relative; width: auto; margin:0 auto;
        }
        .btn-cards {
            position:absolute; top: calc(50% - 2.5625rem); left: calc(100% - 1rem); 
        }
        .btn-hex-02 {
            transform: rotate(90deg); line-height: 2.625rem; font-weight: 600;
        }
        .btn-hex-02 em{
            transform: rotate(-90deg);
        }
    </style>
</head>
<body class="loading">
    <?php include_once('include/topnav.php'); ?>

    

    <section class="section-bpadding section-bg-hero">
        <div class="bg-hero lazy-bg" data-src="public/assets/app/images/hero/16.jpg"></div>
        <div class="container">
            <h3 class="h2 color-white text-center" data-aos="fade-up" data-aos-delay="0">
                ข่าวประชาสัมพันธ์
            </h3>
            <h4 class="h4 sm color-white fw-300 xs-hide text-center" data-aos="fade-up" data-aos-delay="150">
                ติดตามกิจกรรมข่าวสาร และข้อมูลอัพเดทจต่างๆ <br>
                เกี่ยวกับ กนอ.และนิคมอุตสาหกรรมในประเทศไทย
            </h4>
            <div class="d-flex jc-center" data-aos="fade-up" data-aos-delay="450">
                <?php
                    $breadcrumb = [
                        [ 'url' => '#', 'display' => 'กนอ.อัพเดท' ],
                        [ 'url' => '#', 'display' => 'ข่าวประชาสัมพันธ์' ],
                    ];
                    include('component/breadcrumb.php');
                ?>
            </div>

            <div class="tab-container tab-container-01">
                <div class="grids">
                    <div class="grid sm-100" data-aos="fade-up" data-aos-delay="600">
                        <div class="grids">
                            <div class="grid xl-80 lg-75 sm-100">
                                <div class="ss-card ss-card-03">
                                    <a class="ss-img" href="#">
                                        <div class="img-bg lazy-bg" data-src="public/assets/app/images/bg/35.jpg"></div>
                                        <div class="hover-container">
                                            <div class="icon">
                                                <img src="public/assets/app/images/icon/06.png" alt="Icon" />
                                            </div>
                                        </div>
                                        <div class="date bg-05">
                                            <div class="d">04</div>
                                            <div class="m-y">09.2563</div>
                                        </div>
                                    </a>
                                    <div class="text-container">
                                        <div class="wrapper">
                                            <div class="ss-box-shadow fade-right"></div>
                                            <div class="text-wrapper">
                                                <a class="title h4" href="#">
                                                    กนอ.ดึงเอกชนร่วมพีพีพีจัดระเบียบ
                                                    สายสื่อสารลงดิน วางระบบ 5G
                                                </a>
                                                <p class="desc mt-1">
                                                    บอร์ดกนอ.ไฟเขียวลงทุนนำสายสื่อสารในนิคมอุตสาหกรรมลงใต้ดิน 
                                                    รองรับ Smart City เตรียมวางระบบ 5 G ครอบคลุมพื้นที่นิคมอุตสาห
                                                    กรรรม 14 แห่ง และท่าเรืออุตสาหกรรม 1 แห่ง คาดเริ่มได้ปี’67  
                                                </p>
                                                <div class="ss-stat">
                                                    <div class="stat">
                                                        <div class="icon">
                                                            <i class="zmdi zmdi-eye"></i>
                                                            <!-- <img src="public/assets/app/images/icon/07.png" alt="Icon" /> -->
                                                        </div> 112
                                                    </div>
                                                    <div class="stat">
                                                        <div class="icon">
                                                            <em class="zmdi zmdi-share"></em>
                                                        </div> 20
                                                    </div>
                                                </div>
                                                <div class="ss-tag">
                                                    <div class="text">TAG :</div> 
                                                    <div class="tags">
                                                        <a class="tag" href="#">นิคมอุตสาหกรรม</a>
                                                        <a class="tag" href="#">กนอ.</a>
                                                        <a class="tag" href="#">5G</a>
                                                        <a class="tag" href="#">สายสื่อสาร</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="btn-cards">
                                                <a class="btn-icon btn-icon-01 bg-04 btn-hex-02" href="#">
                                                    <em class="zmdi zmdi-chevron-right"></em>
                                                </a>
                                                <a class="btn-icon btn-icon-01 bg-04 btn-hex-02" href="#">
                                                    <em class="zmdi zmdi-chevron-left"></em>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid xl-20 lg-25 sm-100" data-aos="fade-up" data-aos-delay="750">
                        <?php
                            include('component/category-tab-mini.php');
                        ?>
                    </div>

                    <div class="grid xl-80 lg-75 sm-100 mt-0" data-aos="fade-up" data-aos-delay="750">
                        <div class="grids">
                            <?php include('component/grid-header-mini.php'); ?>
                            <div class="grid sm-100 mt-0">
                                <div class="grids">

                                    <?php for($j=0; $j<9; $j++){?>
                                        <div class="grid md-1-3 sm-50">
                                            <div class="ss-card ss-card-01">
                                                <a class="ss-img" href="#">
                                                    <div class="img-bg lazy-bg" data-src="public/assets/app/images/bg/17.jpg"></div>
                                                    <div class="hover-container">
                                                        <div class="icon">
                                                            <img src="public/assets/app/images/icon/06.png" alt="Icon" />
                                                        </div>
                                                    </div>
                                                    <div class="date">
                                                        <div class="d">04</div>
                                                        <div class="m-y">09.2563</div>
                                                    </div>
                                                </a>
                                                <div class="text-container">
                                                    <div class="ss-box-shadow"></div>
                                                    <div class="text-wrapper">
                                                        <a class="title h6 fw-600" href="#">
                                                            กนอ.ดึงเอกชนร่วมพีพีพีจัดระเบียบ
                                                            สายสื่อสารลงดิน วางระบบ 5G
                                                        </a>
                                                        <p class="desc mt-1">
                                                            บอร์ดกนอ.ไฟเขียวลงทุนนำสายสื่อสารในนิคมอุตสาหกรรมลงใต้ดิน 
                                                            รองรับ Smart City เตรียมวางระบบ 5 G ครอบคลุมพื้นที่นิคมอุตสาห
                                                            กรรรม 14 แห่ง และท่าเรืออุตสาหกรรม 1 แห่ง คาดเริ่มได้ปี’67  
                                                        </p>
                                                        <div class="ss-stat">
                                                            <div class="stat">
                                                                <div class="icon">
                                                                    <i class="zmdi zmdi-eye"></i>
                                                                    <!-- <img src="public/assets/app/images/icon/07.png" alt="Icon" /> -->
                                                                </div> 112
                                                            </div>
                                                            <div class="stat">
                                                                <div class="icon">
                                                                    <em class="zmdi zmdi-share"></em>
                                                                </div> 20
                                                            </div>
                                                        </div>
                                                        <div class="ss-tag">
                                                            <div class="text">TAG :</div> 
                                                            <div class="tags">
                                                                <a class="tag" href="#">นิคมอุตสาหกรรม</a>
                                                                <a class="tag" href="#">กนอ.</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php }?> 

                                </div>
                            </div>
                        </div>
                        <?php include('component/grid-footer.php'); ?>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <?php include_once('include/footer-inside.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>