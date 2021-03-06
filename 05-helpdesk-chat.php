<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>

    <style>
        /* slide 99 */
        @media screen and (max-width:767.98px){
            .chat-message > .text-container {width:calc(100% - 5rem);}
        }
    </style>
</head>
<body class="loading">
    <?php include_once('include/topnav.php'); ?>

    <?php
        $breadcrumb = [
            [ 'url' => '#', 'display' => 'เกี่ยวกับกนอ' ],
            [ 'url' => '#', 'display' => 'แจ้งเรื่องร้องเรียน' ],
        ];
        include('component/breadcrumb.php');
    ?>

    <section class="section-bpadding section-bg-hero helpdesk-chat">
        <div class="bg-hero lazy-bg" data-src="public/assets/app/images/hero/10.jpg"></div>
        <div class="container">
            <h3 class="h2 color-black" data-aos="fade-up" data-aos-delay="0">
                แจ้งเรื่องร้องเรียน
            </h3>
            <h4 class="h3 sm color-02 fw-300 xs-hide" data-aos="fade-up" data-aos-delay="150">
                ระบบจัดการ เกี่ยวกับการใช้งาน
            </h4>
            <h5 class="color-black xs-no-br xs-hide" data-aos="fade-up" data-aos-delay="300">
                จัดการเนื้อหาในเว็บไซต์และข้อมูลส่วนตัว
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
                </div>
            </div>

            <div class="tab-container tab-container-01">

                <div class="grids">

                    <div class="grid xl-20 lg-25 sm-100" data-aos="fade-up" data-aos-delay="600">
                        <div class="tabs">
                            <div class="ss-box-shadow"></div>
                            <a class="tab tab-main color-black h-color-04 active" href="#">
                                <div class="icon">
                                    <img src="public/assets/app/images/icon/tab-1.png" alt="Icon">
                                </div>
                                <h6>กระทู้ของฉัน</h6>
                            </a>
                            <a class="tab tab-main color-black h-color-04" href="#">
                                <div class="icon">
                                    <img src="public/assets/app/images/icon/tab-12.png" alt="Icon">
                                </div>
                                <h6>จดหมายข่าวสาร</h6>
                            </a>
                            <a class="tab tab-main color-black h-color-04" href="#">
                                <div class="icon">
                                    <img src="public/assets/app/images/icon/tab-10.png" alt="Icon">
                                </div>
                                <h6>แก้ไขข้อมูลและรหัส</h6>
                            </a>
                            <a class="tab tab-main color-black h-color-04" href="#">
                                <div class="icon">
                                    <img src="public/assets/app/images/icon/tab-11.png" alt="Icon">
                                </div>
                                <h6>ออกจากระบบ</h6>
                            </a>
                        </div>
                    </div>

                    <div class="grid xl-80 lg-75 sm-100" data-aos="fade-up" data-aos-delay="750">
                        <div class="ss-box-header">
                            <div class="ss-box-shadow"></div>
                            <div class="header bg-07 color-white pt-1 pb-2">
                                <div class="d-flex jc-space-between ai-center fw-wrap">
                                    <div class="d-flex ai-center pt-1">
                                        <p class="color-white mr-2">
                                            หมายเลข :
                                        </p>
                                        <div class="p bg-white color-black px-2">
                                            <span class="text-xs">#667643</span>
                                        </div>
                                        <p class="color-white mx-2">
                                            แจ้งโดย : นายสรรเสริญ สมะลาภา
                                        </p>
                                    </div>
                                    <div class="ss-stat width-auto mt-0 pt-1">
                                        <div class="stat">
                                            <div class="icon">
                                                <img src="public/assets/app/images/icon/helpdesk-1.png" alt="Icon" />
                                            </div>
                                            <div class="p sm">04.09.2560</div>
                                        </div>
                                        <div class="stat">
                                            <div class="icon">
                                                <img src="public/assets/app/images/icon/helpdesk-2.png" alt="Icon" />
                                            </div>
                                            <div class="p sm">04.09.2560</div>
                                        </div>
                                        <a class="stat color-white h-color-03" href="#">
                                            <div class="p">แชร์</div>
                                            <div class="icon ml-2 mr-0">
                                                <img src="public/assets/app/images/icon/helpdesk-4.png" alt="Icon" />
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="header bg-06 color-white">
                                <div class="py-2">
                                    <h6 class="fw-200">
                                        กรณีที่ระบบเดิมมีการขอมอบอำนาจ เพื่อขอสิทธิ์ผู้ใช้งานเพิ่มเติมมากกว่า 1 User User 
                                        ที่เป็นรูปแบบของการมอบอำนาจสามารถใช้งานในระบบใหม่ได้หรือไม่ 
                                        ถ้าไม่ได้ ต้องยื่นเรื่องขอมอบอำนาจใหม่หรือไม่
                                    </h6>
                                    <p class="sm mt-2">
                                        กรณีที่ระบบเดิมมีการขอมอบอำนาจ เพื่อขอสิทธิ์ผู้ใช้งานเพิ่มเติมมากกว่า 1 User User 
                                        ที่เป็นรูปแบบของการมอบอำนาจสามารถใช้งานในระบบใหม่ได้หรือไม่ 
                                        ถ้าไม่ได้ ต้องยื่นเรื่องขอมอบอำนาจใหม่หรือไม่
                                    </p>
                                </div>
                            </div>
                            <div class="header bg-02 color-white">
                                <div class="btns text-center mt-0">
                                    <a class="btn btn-action" href="#">
                                        <span>ปิดเรื่องร้องเรียน</span>
                                    </a>
                                </div>
                            </div>
                            <div class="body bg-gradient-gray-03">

                                <div class="mt-1 mb-4">
                                    <p class="fw-600 mb-2">ไฟล์แนบ</p>
                                    <table class="table table-download type-02">
                                        <tbody>
                                            <?php foreach(['pdf', 'ppt', 'xls'] as $d){?>
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

                                <div class="chat-container">
                                    <div class="chat-content" data-simplebar>

                                        <div class="chat-date">วันที่ 11/12/2563</div>
                                        <div class="chat chat-other">
                                            <div class="profile-container">
                                                <div class="profile" style="background-image:url('public/assets/app/images/hero/chat-other.jpg');"></div>
                                            </div>
                                            <div class="text-container">
                                                <div class="text-wrapper p fw-200">
                                                    ใน e-PP เวอร์ชั่นใหม่ ทางกนอ: ได้ยกเลิกเรื่องการมอบอำนาจ 
                                                    เพื่อขอสิทธิ์ใช้งานเพิ่มเติมทั้งหมด คงไว้แต่ User หลักของผู้ประกอบการ 
                                                    ซึ่งในระบบใหม่จะเรียกว่า Master User ซึ่งหากผู้ประกอบการรายใด 
                                                    ต้องการสร้าง User เพิ่มในระบบ สามารถบริหารจัดการ User/Password 
                                                    และสิทธิ์การเข้าใช้งานโปรแกรมได้ด้วยตัวเองโดยไม่จำกัด User ใช้งาน
                                                </div>
                                                <p class="mt-2">
                                                    <span class="text-sm">
                                                        เวลา 14.50 น.
                                                    </span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="chat">
                                            <div class="profile-container">
                                                <div class="profile" style="background-image:url('public/assets/app/images/hero/chat-me.jpg');"></div>
                                            </div>
                                            <div class="text-container">
                                                <div class="text-wrapper p fw-200">
                                                    อยากให้ กนอ. ช่วยสนับสนุนศูนย์ฝึกอาชัพ อบรมเทคนิคเฉพาะทาง 
                                                    เป็นคอร์สสัมนา เกี่ยวกับสินค้าที่จะทำธุรกิจครับ เพราะว่าโรงงานในนิคมของ 
                                                    กนอ. นั้นมีแต่บริษัทชั้นนำของประเทศ อยากให้ช่วยส่งเสริมแนะนำ SME
                                                </div>
                                                <p class="mt-2">
                                                    <span class="text-sm">
                                                        เวลา 14.50 น.
                                                    </span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="chat">
                                            <div class="profile-container">
                                                <div class="profile" style="background-image:url('public/assets/app/images/hero/chat-me.jpg');"></div>
                                            </div>
                                            <div class="text-container">
                                                <div class="text-wrapper p fw-200">
                                                    ข้อมูลผู้ติดต่อ ยังต้องกรอกใหม่ทุกคำขอเหมือนเดิมได้หรือไม่
                                                </div>
                                                <p class="mt-2">
                                                    <span class="text-sm">
                                                        เวลา 14.50 น.
                                                    </span>
                                                </p>
                                            </div>
                                        </div>
                                        
                                        <div class="chat-date">วันที่ 12/12/2563</div>
                                        <div class="chat chat-other">
                                            <div class="profile-container">
                                                <div class="profile" style="background-image:url('public/assets/app/images/hero/chat-other.jpg');"></div>
                                            </div>
                                            <div class="text-container">
                                                <div class="text-wrapper p fw-200">
                                                    ทางเราได้รับเรื่องร้องเรียน และอยู่ระหว่างการดำนเนินการแล้วค่ะ
                                                </div>
                                                <p class="mt-2">
                                                    <span class="text-sm">
                                                        เวลา 14.50 น.
                                                    </span>
                                                </p>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <div class="body bg-04">
                                <form action="/" method="POST">
                                    <div class="chat-message py-2">
                                        <div class="profile-container">
                                            <div class="profile" style="background-image:url('public/assets/app/images/hero/chat-me.jpg');"></div>
                                        </div>
                                        <div class="text-container field mt-0">
                                            <input type="text" placeholder="พิมพ์ตอบหรือถามเพิ่มเติมเรื่องร้องเรียน..." required title="Subject" />
                                            <div class="btns mt-2">
                                                <button type="submit" class="btn btn-action">
                                                    <span>ส่งข้อความ</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
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
