<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
    <?php include_once('include/topnav.php'); ?>

    <?php
        $breadcrumb = [
            [ 'url' => '#', 'display' => 'คลังภาพ กนอ.' ],
        ];
        include('component/breadcrumb.php');
    ?>

    <section class="content-04 section-bpadding img-fill lazy-bg" data-src="public/assets/app/images/bg/25.jpg">
        <div class="container">
            <h3 class="h2" data-aos="fade-up" data-aos-delay="0">
                คลังภาพ กนอ.
            </h3>
            <h4 class="h3 sm color-06 fw-200 xs-hide" data-aos="fade-up" data-aos-delay="150">
                สัมผัสภาพความประทับใจต่างๆ
            </h4>
            <h5 class="xs-no-br fw-200 xs-hide" data-aos="fade-up" data-aos-delay="300">
                จากการทำงาน และช่วยเหลืงสังคมกับการนิคมอุตสาหกรรม 
            </h5>

            <div class="tab-container tab-container-01">
                <div class="grids mt-3">

                    <div class="grid xl-20 lg-25 sm-100" data-aos="fade-up" data-aos-delay="600">
                        <div class="tabs">
                            <div class="ss-box-shadow"></div>
                            <a class="tab tab-main color-black h-color-04 active" href="#">
                                <div class="icon">
                                    <img src="public/assets/app/images/icon/tab-1.png" alt="Icon">
                                </div>
                                <h6>คลังภาพ</h6>
                            </a>
                            <a class="tab tab-main color-black h-color-04" href="#">
                                <div class="icon">
                                    <img src="public/assets/app/images/icon/tab-8.png" alt="Icon">
                                </div>
                                <h6>วิดีโอ</h6>
                            </a>
                        </div>
                    </div>

                    <div class="grid xl-80 lg-75 sm-100" data-aos="fade-up" data-aos-delay="750">
                        <div class="slide-container">
                            <div class="slides">
                                <?php for($i=0; $i<10; $i++){?>
                                    <div class="slide">
                                        <div class="ss-img horizontal">
                                            <div class="img-bg lazy-bg" data-src="public/assets/app/images/bg/<?= sprintf('%02d', $i+3) ?>.jpg"></div>
                                            <div class="date">
                                                <div class="d">0<?= $i+1 ?></div>
                                                <div class="m-y">09.2563</div>
                                            </div>
                                            <div class="content-info">
                                                <div class="text-wrapper color-white">
                                                    <h4 class="fw-400">กนอ.ดึงเอกชนร่วมพีพีพีจัดระเบียบสายสื่อสารลงดิน</h4>
                                                    <h5 class="fw-200">วางระบบ 5G ในนิคมอุตสาหกรรม</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php }?>
                            </div>
                            <div class="arrows"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="slide-nav" data-aos="fade-up" data-aos-delay="0">
            <div class="slides">
                <?php for($i=0; $i<10; $i++){?>
                    <div class="slide">
                        <div class="wrapper">
                            <div class="img-wrapper">
                                <div class="img-fill fit" style="background-image:url('public/assets/app/images/bg/<?= sprintf('%02d', $i+3) ?>.jpg');"></div>
                            </div>
                        </div>
                    </div>
                <?php }?>
            </div>
        </div>
    </section>

    <section class="section-padding">
        <div class="container">
            <div class="tab-container tab-container-01">
                <div class="grids">
                    <div class="grid xl-20 lg-25 sm-100 mt-0"></div>
                    <div class="grid xl-80 lg-75 sm-100 mt-0">
                        <h3 class="sm color-01" data-aos="fade-up" data-aos-delay="0">
                            ดึงเอกชนร่วมพีพีพีจัดระเบียบสายสื่อสารลงดิน วางระบบ 5G ในนิคมฯ
                        </h3>

                        <div data-aos="fade-up" data-aos-delay="0">
                            <h3 class="xs fw-200 mt-4 pt-1" style="max-width:44rem;">
                                บอร์ดกนอ.ไฟเขียวลงทุนนำสายสื่อสารในนิคมอุตสาหกรรมลงใต้ดิน 
                                <span class="fw-600 color-06">
                                    รองรับ Smart City เตรียมวางระบบ 5 G
                                </span>
                                ครอบคลุมพื้นที่นิคมอุตสาหกรรรม 14 แห่ง 
                                และท่าเรืออุตสาหกรรม 1 แห่ง คาดเริ่มได้ปี’67
                            </h3>
                            <p class="md mt-3">
                                น.ส.สมจิณณ์ พิลึก ผู้ว่าการการนิคมอุตสาหกรรมแห่งประเทศไทย (กนอ.) เปิดเผยว่า  
                                กนอ.มีแนวคิดจัดระเบียบสายสื่อสารในนิคมอุตสาหกรรมลงใต้ดิน เพื่อเพิ่มความ
                                ปลอดภัยต่อชีวิตและทรัพย์สิน รวมทั้งยังเป็นการเฝ้าระวังอุบัติเหตุที่อาจจะเกิดขึ้น 
                                และจัดเตรียมระบบสาธารณูปโภค สิ่งอำนวยความสะดวกและการบริการให้กับผู้ประกอบ
                                การในนิคมอุตสาหกรรม เพื่อให้สามารถใช้ประโยชน์ร่วมกันได้
                            </p>
                            <h3 class="xs fw-500 color-06 xs-no-br mt-4 pt-2">
                                นอกจากนี้ ยังเป็นการรองรับการขยายตัว <br>
                                ของอุตสาหกรรมโทรคมนาคมที่สูงขึ้นในอนาคต 
                            </h3>
                            <p class="md mt-3">
                                โดยล่าสุดในการประชุมคณะกรรมการ กนอ.(บอร์ด กนอ.) ที่มีนายนรินทร์ กัลยาณมิตร ประธานบอร์ด 
                                กนอ.เป็นประธานการประชุม มีมติเห็นชอบในหลักการของแนวทาง
                                ดังกล่าวตามที่ กนอ.เสนอ โดยให้เริ่มศึกษาความเป็นไปได้ของการลงทุนฯ ในปี 2564 
                                และคาดว่าหากผลการศึกษาแล้วเสร็จจะสามารถเริ่มดำเนินโครงการวางท่อร้อยสาย
                                สื่อสารใต้ดินในนิคมอุตสาหกรรมได้ในปี 2567 โดยจะเป็นการร่วมทุนระหว่างรัฐและเอกชน (PPP) 
                                หรือ พีพีพ
                            </p>
                            <div class="pt-3">
                                <p class="md mt-3">
                                    <img class="content-img-float" src="public/assets/app/images/bg/18.jpg" alt="Image" />
                                    โดยอุตสาหกรรมดิจิทัล เป็นหนึ่งในกลุ่มอุตสาหกรรมที่ใช้เทคโนโลยีขั้นสูง และเป็นอุตสาหกรรมเป้าหมาย
                                    ของการพัฒนาในพื้นที่อีอีซี ซึ่งนักลงทุนต่างชาติโดยเฉพาะนักลงทุนจีนได้ย้ายฐานการผลิตมายังภูมิภาค
                                    อาเซียนจนยอดการลงทุนโดยตรงจากจากต่างประเทศ (Foreign Direct Investment : FDI) เพิ่มมากขึ้น
                                    ถึงแม้ว่าในช่วงไตรมาส 2 จะชะลอตัวลงเล็กน้อยจากสถานการณ์โควิด-19 แต่หลังจากที่รัฐบาลได้ประกาศ
                                    ผ่อนปรนมาตรการต่างๆ ทำให้บรรยากาศการลงทุนเริ่มกลับมาคึกคักอีกครั้ง
                                </p>
                                <h4 class="xs-no-br mt-4">
                                    โดยเฉพาะในกลุ่มอุตสาหกรรม <br>
                                    เป้าหมายเช่น อุตสาหกรรมดิจิทัล เพื่อพัฒนาระบบ 5G <br>
                                    และนวัตกรรมด้านดิจิทัลสมัยใหม่
                                </h4>
                            </div>
                        </div>
                        
                        <div class="clear-both"></div>
                        <div class="content-quote mt-4 pt-2" data-aos="fade-up" data-aos-delay="0">
                            <h4 class="h3 xs text-center fw-200 md-no-br">
                                สำหรับพื้นที่เป้าหมายของการวางท่อร้อยสายสื่อสารใต้ดินในนิคมอุตสาหกรรม <br> 
                                เพื่อให้บริการโทรคมนาคมประกอบด้วย นิคมอุตสาหกรรม 14 แห่ง <br>
                                และท่าเรืออุตสาหกรรม 1 แห่งที่ กนอ.บริหารจัดการเอง
                            </h4>
                            <h5 class="h4 text-center mt-2">
                                เนื้อที่ประมาณ 
                                <span class="text-2xl color-05">33,855.72</span>
                                ไร่ มีผู้ประกอบกิจการในพื้นที่รวมทั้งสิ้น 
                                <span class="text-2xl color-05">2,142</span>
                                ราย
                            </h5>
                        </div>
                        
                        <div class="mt-5 pt-1" data-aos="fade-up" data-aos-delay="0">
                            <?php
                                $rowEmbed = true;
                                include('component/content-footer.php');
                            ?>
                            <div class="btns text-center">
                                <a class="btn btn-action" href="#">
                                    <span>คลังภาพต่อไป</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include_once('include/footer-inside.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
