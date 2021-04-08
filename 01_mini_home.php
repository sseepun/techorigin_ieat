<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <style>
        .slide-container .slide .text-container {position: absolute; top: 25%; left: 25%;}
       
        .banner-01 .slick-dots{
            position: absolute; bottom: 2rem;
        }
        .banner-01 .slick-dots button{
            clip-path: polygon(25% 0%, 75% 0%, 100% 50%, 75% 100%, 25% 100%, 0% 50%);
            border-radius: 0; border-color:#8c6ab2; background-color: #8c6ab2;
        }
        .banner-01 .slick-dots .slick-active button{
            font-size: 1.5625rem; width:3rem; height: 2.5rem; color: #fff;
            border-color:#4b326e; background-color: #4b326e;
        }
        table.table-download-02 td {background:#fff; border:none; }

        .call-04 .img-bg{
            position: absolute; z-index: -1; background-image: url('public/assets/app/images/bg/36.jpg');
            top:0; right:0; bottom:0; background-size: cover; 
            background-position: center; background-repeat: no-repeat; width:70vw; 
        }
        @media screen and (max-width: 991.98px){
            .slide-container .slide .text-container{left: 15%;}
            .ss-date{padding: 0 0 0 3rem;}
            .call-04 .img-bg{
                left: calc(50% - 50vw); right: calc(50% - 50vw); width: 100vw;
            }
        }
        @media screen and (max-width: 767.98px){
            .banner-01 .slick-dots .slick-active button{
                width: 2rem; height: 1.875rem; font-size: 1rem;
            }
        }
        @media screen and (max-width: 575.98px){
            .slide-container .slide .text-container{left: 10%;}
        }
    </style>
</head>
<body class="loading">
    <?php include_once('include/topnav.php'); ?>

    <section class="banner-01">
        <h5 class="d-none">&nbsp;</h5>
        <div class="slide-container">
            <div class="slides">
                <?php for($i=0; $i<2; $i++){?>
                    <div class="slide">
                        <div class="wrapper">
                            <div class="fit img-fill img-bg" style="background-image:url('public/assets/app/images/banner/05.jpg');"></div>
                            <div class="container">
                                <div class="text-container color-01">
                                    <h1>
                                        รอยยิ้มของทุกคนในชุมชน
                                    </h1>
                                    <h5>คือที่สุดของความภาคภูมิใจของการนิคมอุตสหกรรมแห่งประเทศไทย</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="wrapper">
                            <div class="fit img-fill img-bg" style="background-image:url('public/assets/app/images/banner/02.jpg');"></div>
                            <div class="container">
                            
                            </div>
                        </div>
                    </div>
                <?php }?>
            </div>
            <div class="dots"></div>
            <div class="arrows"></div>
        </div>
    </section>

    <section class="section-padding">
        <div class="container">
            <div class="h1 text-center color-04" data-aos="fade-up" data-aos-delay="0">
                กนอ.อัพเดท
            </div>
            <h5 class="text-center fw-200 color-gray sm-no-br" data-aos="fade-up" data-aos-delay="150">
                เพิ่มขีดคสามสามารถของคุรและธุรกิจด้วยการติดตามกิจกรรมข่าวสาร และข้อมูลอัพเดท ต่างๆ <br> 
                เกี่ยวกับ กนอ. และนิคมอุตสาหกรรมในประเทศไทย <span class="color-04 fw-600">ได้ที่นี่</span>
            </h5>

            <div class="tab-container tab-container-01">
                <div class="grids">
                    <div class="grid xl-20 lg-25 md-30 sm-100" data-aos="fade-up" data-aos-delay="300">
                        <?php include('component/category-tab.php'); ?>
                    </div>
                    <div class="grid xl-80 lg-75 md-70 sm-100 mt-0" data-aos="fade-up" data-aos-delay="450">
                        <div class="tab-contents">
                            <?php for($i=0; $i<7; $i++){?>
                                <div class="tab-content <?php if($i==0)echo 'active'; ?>" data-tab="<?= $i ?>">
                                    <div class="grids">
                                        <div class="grid xl-40 sm-100">

                                            <div class="ss-card ss-card-01">
                                                <a class="ss-img" href="#">
                                                    <div class="img-bg lazy-bg" data-src="public/assets/app/images/bg/17.jpg"></div>
                                                    <div class="hover-container">
                                                        <div class="icon">
                                                            <img src="public/assets/app/images/icon/06.png" alt="Icon" />
                                                        </div>
                                                    </div>
                                                    <div class="date">
                                                        <div class="d">0<?= $i+1 ?></div>
                                                        <div class="m-y">09.2563</div>
                                                    </div>
                                                </a>
                                                <div class="text-container">
                                                    <div class="ss-box-shadow"></div>
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
                                                                    <img src="public/assets/app/images/icon/07.png" alt="Icon" />
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
                                                </div>
                                            </div>

                                        </div>
                                        <div class="grid xl-60 sm-100 mt-0">
                                            <div class="grids">

                                                <?php for($j=0; $j<4; $j++){?>
                                                    <div class="grid sm-50">
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
                                                                                <img src="public/assets/app/images/icon/07.png" alt="Icon" />
                                                                            </div> 112
                                                                        </div>
                                                                        <div class="stat">
                                                                            <div class="icon">
                                                                                <em class="zmdi zmdi-share"></em>
                                                                            </div> 20
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
                                </div>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="btns text-center" data-aos="fade-up" data-aos-delay="0">
                <a class="btn btn-action" href="#">
                    <span>ดูทั้งหมด</span>
                </a>
            </div>
        </div>
    </section>

    <section class="call-02">
        <div class="container">
            <div class="grids no-gap">
                <div class="grid lg-50 sm-100 mt-0" data-aos="fade-up" data-aos-delay="0">
                    <div class="content">
                        <div class="img-bg lazy-bg" data-src="public/assets/app/images/bg/01.jpg"></div>
                    </div>
                </div>
                <div class="grid lg-50 sm-100 mt-0" data-aos="fade-up" data-aos-delay="150">
                    <div class="content">
                        <div class="img-bg lazy-bg" data-src="public/assets/app/images/bg/02.jpg"></div>
                        <div class="text-wrapper">
                            <h5 class="h3 color-01 fw-600">
                                ประกาศจัดซื้อจัดจ้าง
                            </h5>
                            <p class="fw-400 color-gray">
                                เพิ่มขีดความสามารถของคุณด้วยการอัพเดทข่าวสาร
                                <br> พร้อมกันทุกกระแสความเคลื่อนไหว
                            </p>
                            <div class="btns mt-2">
                                <a class="btn-icon btn-icon-01 btn-hex" href="#">
                                    <em class="zmdi zmdi-chevron-right"></em>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="content-01 section-padding">
        <div class="img-bg lazy-bg" data-src="public/assets/app/images/banner/02.jpg"></div>
        <div class="container">
            <div class="h1 text-center color-white" data-aos="fade-up" data-aos-delay="0">
                ทำเลทอง
            </div>
            <h5 class="text-center color-white fw-200" data-aos="fade-up" data-aos-delay="150">
                ตอบโจทย์ที่ใช่... ตอบสนองทุกความต้องการทางด้านธุรกิจของคุณ
            </h5>
        </div>
        <div class="btn-ads" data-aos="fade-up" data-aos-delay="300">
            <a class="btn-ad" href="#">
                <img src="public/assets/app/images/hero/ad-0.jpg" alt="Ad" />
            </a>
            <a class="btn-ad" href="#">
                <img src="public/assets/app/images/hero/ad-1.jpg" alt="Ad" />
            </a>
        </div>
        <div class="container">
            <div class="grids no-gap" data-aos="fade-up" data-aos-delay="450">
                <?php
                    foreach([
                        'นิคมอุตสาหกรรมบางชัน', 'นิคมอุตสาหกรรมลาดกระบัง', 'นิคมอุตสาหกรรมอัญธานี',
                        'นิคมอุตสาหกรรมอัญธานี (โครงการ2)', 'นิคมอุตสาหกรรมบางปะอิน',
                        'นิคมอุตสาหกรรมไฮเทค (บ้านหว้า)', 'นิคมอุตสาหกรรมนครหลวง',
                        'นิคมอุตสาหกรรมราชบุรี', 'นิคมอุตสาหกรรมวี อาร์ เอ็ม', 'นิคมอุตสาหกรรมแก่งคอย'
                    ] as $i=>$d){
                ?>
                    <div class="grid lg-20 md-1-3 xs-50 mt-0">
                        <a class="ss-card ss-card-02 color-black h-color-04 btn-popup-toggle" data-popup="0" href="#">
                            <div class="ss-img vertical">
                                <div class="img-bg" style="background-image:url('public/assets/app/images/bg/<?= sprintf('%02d', $i+3) ?>.jpg')"></div>
                                <?php if($i%2==1){?>
                                    <div class="ads-location">
                                        <img src="public/assets/app/images/hero/location.png" alt="Hero" />
                                    </div>
                                <?php }?>
                            </div>
                            <div class="text-container text-center">
                                <h5><?= $d ?></h5>
                            </div>
                        </a>
                    </div>
                <?php }?>
            </div>
            <div class="btns text-center" data-aos="fade-up" data-aos-delay="0">
                <a class="btn btn-action" href="#">
                    <span>ดูทั้งหมด</span>
                </a>
            </div>
        </div>
    </section>

    <div class="popup-container" data-popup="0">
        <div class="wrapper">
            <div class="close-filter btn-popup-toggle" data-popup="0"></div>
            <div class="popup-box">
                <div class="box-header">
                    <img class="pin" src="public/assets/app/images/icon/pin.png" alt="Pin" />
                    <h4 class="text-center position-relative">
                        08. <span class="fw-300">นิคมอุตสาหกรรมที เอฟ ดี</span>
                    </h4>
                    <a class="close-btn btn-popup-toggle" data-popup="0" href="#">
                        <em class="zmdi zmdi-close"></em>
                    </a>
                </div>
                <div class="box-body">
                    <div class="contents">
                        <div class="content">
                            <div class="img-fill fit" style="background-image:url('public/assets/app/images/bg/04.jpg');"></div>
                        </div>
                        <div class="content">
                            <div class="table-wrapper">
                                <table class="table table-detail">
                                    <tbody>
                                        <tr>
                                            <td class="fw-600 ws-nowrap">ผู้อำนวยการนิคมฯ</td>
                                            <td><span class="fw-500 mx-2">:</span></td>
                                            <td>นายสรายุทธ์ ประทีปแก้ว</td>
                                        </tr>
                                        <tr>
                                            <td class="fw-600 ws-nowrap">ผู้พัฒนานิคม</td>
                                            <td><span class="fw-500 mx-2">:</span></td>
                                            <td>บริษัท เจซีเค อินเตอร์เนชั่นแนล จำกัด (มหาชน)</td>
                                        </tr>
                                        <tr>
                                            <td class="fw-600 ws-nowrap">โทรศัพท์</td>
                                            <td><span class="fw-500 mx-2">:</span></td>
                                            <td>
                                                <a class="color-black h-color-04" href="#">
                                                    0 2676 4031-6
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="fw-600 ws-nowrap">โทรสาร</td>
                                            <td><span class="fw-500 mx-2">:</span></td>
                                            <td>
                                                <a class="color-black h-color-04" href="#">
                                                    0 2676 4038
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="fw-600 ws-nowrap">E-mail</td>
                                            <td><span class="fw-500 mx-2">:</span></td>
                                            <td>
                                                <a class="color-black h-color-04" href="#">
                                                    industrial@tfd-factory.com
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="btns mt-2">
                                <a class="btn btn-action" href="#">
                                    <span>อ่านรายละเอียด</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-btns">
                    <a class="box-btn" href="#">
                        <em class="zmdi zmdi-swap-alt"></em> View Google Map
                    </a>
                    <a class="box-btn" href="#">
                        <em class="zmdi zmdi-swap-alt"></em> View Graphic Map
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- <section class="call-03 section-padding img-fill lazy-bg" data-src="public/assets/app/images/banner/03.jpg">
        <div class="container">
            <div class="text-container text-center" data-aos="fade-up" data-aos-delay="0">
                <h3>ร่วมงานกับเรา</h3>
                <h4 class="d-none">Call 03 Description</h4>
                <h5 class="text-center fw-200 color-gray sm-no-br">
                    พัฒนาศักยภาพของพนักงานสู่ความเป็นผู้เชี่ยวชาญ <br>
                    พร้อมทั้งพัฒนาระบบการบริหารบุคลากรที่มีคุณภาพ เพื่อสร้างแรงจูงใจ <br>
                    และความผูกพันของบุคลากรที่มีต่อองค์กร
                </h5>
                <h4 class="fw-300">
                    มาร่วมเปนส่วนหนึ่งในการพัฒนาประเทศกับเรา
                </h4>
                <div class="btns mt-2">
                    <a class="btn btn-action" href="#">
                        <span>ดูตำแหน่งานว่าง</span>
                    </a>
                </div>
            </div>
            <img class="hero" src="public/assets/app/images/hero/02.png" alt="Hero" 
            data-aos="fade-up" data-aos-delay="150"/>
        </div>               
    </section> -->

    <div class="call-04 section-padding">
        <div class="container">
            <div class="grids no-gap">
                <div class="grid lg-70 sm-100">
                    <div class="position-relative" style="padding: 2rem 2.5rem 2rem 0;">
                        <div class="img-bg"></div>
                        <div class="d-flex ai-center">
                            <img class="mr-1" src="public/assets/app/images/icon/09.png" alt="">
                            <h5 class="h3 color-black fw-600 color-black">ประกาศจัดซื้อจัดจ้าง</h5>
                        </div>
                        <table class="table table-download-02 mt-3">
                            <tbody>
                                <?php for($i=0; $i<4; $i++){?>
                                    <tr class="bg-white">
                                        <td class="px-0 py-0">
                                            <div class="ss-date">
                                                <div class="date bg-0<?= ($i%2) == 0 ? '4': '8'; ?>" style="position:relative; left:0;">
                                                    <div class="d">04</div>
                                                    <div class="m-y">09.2563</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xl">
                                                ประกาศการนิคมอุตสาหกรรมแห่งประเทศไทย ที่ 26/2564 เรื่อง ประกวดราคาจ้างโครงการจัด...
                                            </p>
                                        </td>
                                        <td class="d-flex ai-center px-2 py-1">
                                            <img src="public/assets/app/images/file/pdf.png" alt="" class="file-icon mr-1">
                                            <a class="btn" href="#">
                                                ดาวน์โหลด
                                                <em class="zmdi zmdi-download"></em>
                                            </a>
                                        </td>
                                    </tr>
                                <?php }?>
                            </tbody>
                        </table>
                        <div class="btns text-right">
                            <a class="btn btn-action" href="#">
                                <span>ดูทั้งหมด</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="grid md-30">
                        
                </div>
            </div>
        </div>
    </div>

    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>