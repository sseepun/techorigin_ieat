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
            [ 'url' => '#', 'display' => 'ดาวโหลดเอกสาร' ],
        ];
        include('component/breadcrumb.php');
    ?>

    <section class="section-bpadding section-bg-hero">
        <div class="bg-hero lazy-bg" data-src="public/assets/app/images/hero/08.jpg"></div>
        <div class="container">
            <h3 class="h2" data-aos="fade-up" data-aos-delay="0">
                ดาวน์โหลดเอกสาร
            </h3>
            <h4 class="h3 sm color-06 fw-300 xs-hide" data-aos="fade-up" data-aos-delay="150">
                แบบฟอร์มและเอกสารต่างๆ 
            </h4>
            <h5 class="xs-no-br xs-hide" data-aos="fade-up" data-aos-delay="300">
                เพื่อการเติบโตทางธุรกิจสังคมและสิ่งแวดล้อมอย่างยั่งยืน รางวัลแห่งความสำเร็จต่างๆ <br>
                ที่ กนอ. ได้รับนับว่าเป็นเครื่องการันตีถึงการดำเนินการของบริษัทที่ดีและมีการบูรณาการ <br>
                อีกทั้งพัฒนาอย่างต่อเนื่อง
            </h5>

            <div data-aos="fade-up" data-aos-delay="450">
                <div class="grids grid-header">
                    <div class="grid xl-20 lg-25 md-30 sm-100 mt-0">
                        <div class="options">
                            <input type="text" name="search" placeholder="ค้นหา" required title="Search" />
                            <button type="submit" class="btn btn-grid">
                                <em class="zmdi zmdi-search"></em>
                            </button>
                        </div>
                    </div>
                    <div class="grid xl-80 lg-75 md-70 sm-100 mt-0">
                        <div class="options">
                            <div class="select-wrapper">
                                <select class="order" title="Order">
                                    <option value="" disabled="" selected="">เรียงลำดับข้อมูล</option>
                                    <option value="newest">เรียงลำดับข้อมูล</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-container tab-container-01">
                <div class="grids">

                    <div class="grid xl-20 lg-25 sm-100" data-aos="fade-up" data-aos-delay="600">
                        <div class="tabs">
                            <div class="ss-box-shadow"></div>
                            <?php
                                foreach([
                                    'คู่มือหรือมาตรฐานการให้บริการ', 'คู่มือต่างๆ', 'แบบฟอร์ม', 'รายงานสถานภาพการลงทุน', 
                                    'ข้อมูลเชิงสถิติการให้บริหาร', 'รายงานผลสำรวจความพึงพอใจ', 'E-Service'
                                ] as $i=>$d){
                            ?>
                                <a class="tab tab-main color-black h-color-04 <?php if($i==0)echo 'active'; ?>" href="#">
                                    <div class="icon">
                                        <img src="public/assets/app/images/icon/asset-<?= $i+1 ?>.png" alt="Icon">
                                    </div>
                                    <h6><?= $d ?></h6>
                                </a>
                            <?php }?>
                        </div>
                    </div>

                    <div class="grid xl-80 lg-75 sm-100" data-aos="fade-up" data-aos-delay="750">
                        <div class="table-wrapper">
                            <table class="table table-download-02">
                                <?php for($i=0; $i<4; $i++){?>
                                    <tr class="row-sep">
                                        <td colspan="4"></td>
                                    </tr>
                                    <tr class="row-title">
                                        <td colspan="4">
                                            <div class="row-header">
                                                <div class="ss-date bg-04">
                                                    <div class="date">
                                                        <div class="d">04</div>
                                                        <div class="m-y">09.2563</div>
                                                    </div>
                                                </div>
                                                <div class="text-wrapper">
                                                    <div class="h4">
                                                        ผลแผนปฏิบัติการ-ไตรมาส 2 (070463)
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php foreach(['pdf', 'xls', 'doc', 'ppt'] as $d){?>
                                        <tr>
                                            <td>
                                                <img class="file-icon" src="public/assets/app/images/file/<?= $d ?>.png" alt="File Icon Image" />
                                            </td>
                                            <td>
                                                <p class="sm">
                                                    รายงานผลการดำเนินงานภายใต้แผนปฏิบัติการ กนอ. <br>
                                                    ปีงบประมาณ 2563 ประจำไตรมาส 2/2563(ตุลาคม 2562 – มีนาคม 2563)
                                                </p>
                                                <p class="sm">
                                                    ขนาด <span class="fw-600 mr-3">1.6 Mb.</span>
                                                    จำนวนดาวโหลด <span class="fw-600">23 ครั้ง</span>
                                                </p>
                                            </td>
                                            <td>
                                                <a class="btn" href="#">
                                                    ดาวน์โหลด
                                                    <em class="zmdi zmdi-download"></em>
                                                </a>
                                            </td>
                                            <td>
                                                <a class="btn" href="#">
                                                    แจ้งไฟล์เสีย 
                                                    <em class="zmdi zmdi-alert-circle-o"></em>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php }?>
                                <?php }?>
                            </table>
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
