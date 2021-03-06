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
            [ 'url' => '#', 'display' => 'เกี่ยวกับ กนอ.' ],
            [ 'url' => '#', 'display' => 'ร่วมงานกับเรา' ],
        ];
        include('component/breadcrumb.php');
    ?>

    <section class="about-02 section-bpadding section-bg-hero">
        <div class="bg-hero lazy-bg" data-src="public/assets/app/images/hero/12.jpg"></div>
        <div class="container">
            <h3 class="h2 color-black" data-aos="fade-up" data-aos-delay="0">
                ร่วมงานกับเรา
            </h3>
            <h4 class="h3 sm color-02 fw-300 xs-hide" data-aos="fade-up" data-aos-delay="150">
                ทุกความสำเร็จมาจากทีมที่ยิ่งใหญ่
            </h4>
            <h5 class="color-black xs-no-br xs-hide" data-aos="fade-up" data-aos-delay="300">
                มาร่วมเป็นส่วนหนึ่งกับเรา กนอ.
            </h5>
 
            <div data-aos="fade-up" data-aos-delay="450">
                <?php include('component/grid-header.php'); ?>
            </div>

            <div class="tab-container tab-container-01">

                <div class="grids">

                    <div class="grid xl-20 lg-25 sm-100" data-aos="fade-up" data-aos-delay="600">
                        <div class="tabs">
                            <div class="ss-box-shadow"></div>
                            <a class="tab tab-main color-black h-color-04" href="#">
                                <div class="icon">
                                    <img src="public/assets/app/images/icon/tab-1.png" alt="Icon">
                                </div>
                                <h6>ข่าวประชาสัมพันธ์</h6>
                            </a>
                            <div class="tab-children d-block">
                                <a class="tab tab-list color-black h-color-04 active" href="#">
                                    <p>ประกาศจาก กนอ.</p>
                                </a>
                                <a class="tab tab-list color-black h-color-04" href="#">
                                    <p>ข่าวสารจาก กนอ.</p>
                                </a>
                                <a class="tab tab-list color-black h-color-04" href="#">
                                    <p>ข่าวสารจากหน่วยงานที่เกี่ยวข้อง</p>
                                </a>
                            </div>
                            <a class="tab tab-main color-black h-color-04" href="#">
                                <div class="icon">
                                    <img src="public/assets/app/images/icon/tab-2.png" alt="Icon">
                                </div>
                                <h6>ข่าวสารการลงทุน</h6>
                            </a>
                            <a class="tab tab-main color-black h-color-04" href="#">
                                <div class="icon">
                                    <img src="public/assets/app/images/icon/tab-4.png" alt="Icon">
                                </div>
                                <h6>ประกาศจัดซื้อจัดจ้าง</h6>
                            </a>
                            <a class="tab tab-main color-black h-color-04 active" href="#">
                                <div class="icon">
                                    <img src="public/assets/app/images/icon/tab-7.png" alt="Icon">
                                </div>
                                <h6>ร่วมงานกับเรา</h6>
                            </a>
                        </div>
                    </div>

                    <div class="grid xl-80 lg-75 sm-100" data-aos="fade-up" data-aos-delay="750">
                        <?php for($i=0; $i<7; $i++){?>
                            <div class="about-container <?php if($i==0)echo 'active'; ?>">
                                <div class="about-header">
                                    <h5 class="prefix fw-400">ตำแหน่ง</h5>
                                    <h6 class="title h3 xs color-04">
                                        Mechanical Project Manager / ผู้จัดการโครงการเครื่องกล 2 อัตรา
                                    </h6>
                                    <div class="ss-date">
                                        <div class="date">
                                            <div class="d border-bottom bcolor-white">04</div>
                                            <div class="m-y">09.2563</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="about-tag">
                                    <h5>จำนวนที่รับสมัคร <span class="fw-500 color-03">10</span> ตำแหน่ง</h5>
                                    <div class="icon">
                                        <em class="active zmdi zmdi-plus"></em>
                                        <em class="inactive zmdi zmdi-minus"></em>
                                    </div>
                                </div>
                                <div class="about-body">
                                    <div class="grids">

                                        <div class="grid xl-75 lg-2-3 sm-100 mt-0">
                                            <h5 class="fw-600">
                                                จำนวนที่รับสมัคร <span class="text-md color-04">10</span> ตำแหน่ง
                                            </h5>
                                            <h5 class="fw-600 mt-2">คุณสมบัติที่จำเป็น</h5>
                                            <ul>
                                                <li>เพศชาย อายุ 35 ปี ขึ้นไป</li>
                                                <li>วุฒิการศึกษา ปริญญาตรี วิศวกรเครื่องกล</li>
                                                <li>มีประสบการณ์ในการทำงานด้านเครื่องกล ไม่ต่ำกว่า 10 ปี</li>
                                                <li>สามารถถอดแบบและประมาณราคาได้</li>
                                                <li>มีทักษาะในการบริการโครงการและบริหารเวลาได้เป็นอย่างดี</li>
                                                <li>สามารถแก้ไขปัญหาที่เกิดขึ้นได้อย่างมีประสิทธิภาพ</li>
                                                <li>มีใบอนุญาตประกอบวิชาชีพ (จะได้รับพิจารณาเป็นพิเศษ)</li>
                                                <li>สามารถควบคุมดูแลการดำเนินงานของโครงการทุกโครงการให้เป็นไปตามแผนและระยะเวลาที่กำหนด</li>
                                                <li>ให้คำแนะนำและแก้ปัญหาอย่างสร้างสรรค์เกี่ยวกับปัญหา / ข้อบกพร่องที่เกิดขึ้น</li>
                                                <li>ดูแลและให้คำปรึกษาพนักงานและประสานงานผู้มีส่วนร่วม</li>
                                                <li>มีทักษาะในการติดต่อสื่อสารและมีมนุษยสัมพันธ์ที่ดี</li>
                                            </ul>
                                            <h5 class="fw-600 mt-4">หน้าที่และความรับผิดชอบ:</h5>
                                            <p class="fw-200 pl-3 mt-2">
                                                ควมคุมดูแลโครงการที่ได้รับมอบหมายให้สามสามารถปฏิบัติงานได้อย่างมีประสิทธิภาพ 
                                                ตั้งแต่การบริหารจัดการบุคคลปรนะจำโครงการ การบริหารจัดการในงาน งบประมาณค่าใช้จ่าย 
                                                รวมถึงวัสดุอุปกรณ์และแรงงานที่ต้องใช้ในโครงการให้เป็นไปตามแผนที่กำหนด
                                            </p>
                                            <h5 class="fw-600 mt-4 mb-2">EMBED</h5>
                                            <div class="ss-mp4">
                                                <div class="wrapper">
                                                    <video controls="">
                                                        <source src="public/assets/app/video/01.mp4" type="video/mp4">
                                                        Your browser does not support the video tag.
                                                    </video>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="grid xl-25 lg-1-3 sm-100">
                                            <div class="about-side">
                                                <div class="text-container">
                                                    <h5 class="fw-400 color-white">ติดต่อ</h5>
                                                    <p class="color-03 fw-300 mt-2">
                                                        คุณศรีสมร รัศมีฤกษ์เศรษฐี <br>
                                                        หัวหน้าฝ่ายทรัพยากรบุคคล <br>
                                                        ฝ่ายทรัพยากรบุคคล
                                                    </p>
                                                    <p class="color-white fw-200 mt-2">
                                                        โทรศัพท์ 02-1234567 <br>
                                                        Recruit@ieat.go.th
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="btns mt-3">
                                                <a class="btn btn-action" href="#">
                                                    <span>สมัครตำแหน่งนี้</span>
                                                </a>
                                            </div>
                                        </div>

                                    </div>

                                    <h5 class="fw-600 mt-4 mb-2">เอกสารแนบ</h5>
                                    <table class="table table-download type-02">
                                        <tbody>
                                            <?php foreach(['jpg', 'gif', 'pdf'] as $d){?>
                                                <tr>
                                                    <td>
                                                        <div class="file-icon">
                                                            <img src="public/assets/app/images/file/<?= $d ?>.png" alt="Icon" />
                                                        </div>
                                                    </td>
                                                    <td class="pr-3">
                                                        ระบบ 5G ในนิคมอุตสาหกรรม <br>
                                                        ขนาด <span class="fw-600 mr-3">1.6 Mb.</span>
                                                        ดาวโหลด <span class="fw-600">23 ครั้ง</span>
                                                    </td>
                                                    <td>
                                                        <a class="btn-download mr-2" href="#">
                                                            <span class="xs-hide">ดาวน์โหลด</span>
                                                            <em class="zmdi zmdi-arrow-right"></em>
                                                        </a>
                                                        <a class="btn-download" href="#">
                                                            <span class="xs-hide">แจ้งไฟล์เสีย</span>
                                                            <em class="zmdi zmdi-alert-circle-o" style="transform:none;"></em>
                                                        </a>
                                                    </td>
                                                </tr>
                                            <?php }?>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        <?php }?>
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
