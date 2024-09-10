<?php 
    session_start();
    ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>เว็บไซต์สาธารณสุขจังหวัดตราด</title>
    <link rel="icon" href="img/ตรากระทรวงสาธารณสุขใหม่.png" type="image/png">
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

    <!--ส่วนหัว-->

    <div class="border-bottom border" >

        <div class="container ">
            <header class="d-flex flex-wrap justify-content-center    ">
              <a href="./index.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none ">
                <img class="bi me-2 " width="300" height="90" src="img/โลโก้.png"></img>
              </a>
        
              <ul class="nav nav-pills py-4 ">
            
                <li class="nav-item active "><a href="index.php" class="nav-link  "><font style="vertical-align: inherit;">หน้าหลัก</font></a></li>
                
                <div class="nav-item"><button class="nav-link btn-secondary dropdown-toggle  " type="button" data-bs-toggle="dropdown" aria-expanded="false" aria-current="page">
                  ข่าวสาร
                  </button>
                  <ul class="dropdown-menu  "> 
                    <li><a class="dropdown-item nav-link" href="a_announce.php">ประกาศ</a></li>
                    <li><a class="dropdown-item nav-link" href="a_relations.php">ประชาสัมพันธ์</a></li>
                    <li><a class="dropdown-item nav-link" href="a_tender.php">ประกวดราคา</a></li>
                    <?php
                      
                         if(isset($_SESSION["userid"]))
                         {
                          ?>
                          <li><a href="#"><?php echo $_SESSION["useruid"]; ?></a></li>
                          <li><a class="dropdown-item nav-link" href="post.php">โพส</a></li>
                        <?php 
                         }
                         else
                        {
                        ?>
                        <?php
                        }
                        ?>
  
                    <div class="nav-item dropend">
                      <button class="nav-link btn-secondary dropdown-toggle  " type="button" data-bs-toggle="dropdown" aria-expanded="false" aria-current="page">
                      ระบบงานออนไลน์
                      </button>
                      <ul class="dropdown-menu  "> 
                        <li><a class="dropdown-item nav-link" href="http://203.157.138.83/ita_trat_view/index.php">ITA จังหวัดตราด</a></li>
                        <li><a class="dropdown-item nav-link" href="http://203.157.138.26/">Health Explorer</a></li>
                        <li><a class="dropdown-item nav-link" href="http://team.sko.moph.go.th/healthreport/">ตัวชี้วัดกระทรวงจาก 43 เเฟ้ม</a></li>
                        <li><a class="dropdown-item nav-link" href="https://healthkpi.moph.go.th/kpi2/kpi/index2/">Health KPI</a></li>
                        <li><a class="dropdown-item nav-link" href="http://164.115.24.192/archives/">สารบรรณ'สาสุข</a></li>
                        <li><a class="dropdown-item nav-link" href="http://203.157.138.83/hrth/">HR Connect</a></li>
                        <li><a class="dropdown-item nav-link" href="https://ictprocure.moph.go.th/">ระบบจัดหาคอมพิวเตอร์</a></li>
                        <li><a class="dropdown-item nav-link" href="http://203.157.138.83/ita_trat/">ระบบจัดการ ITA จังหวัดตราด</a></li>
                        <li><a class="dropdown-item nav-link" href="http://203.157.138.83/kpi_trat/">ระบบ KPI</a></li>
                        <li><a class="dropdown-item nav-link" href="http://203.157.138.73/hosoffice-new/index.php?r=user/login">ระบบ HOSOffice</a></li>
                      </ul>
                       </div>
                       <div class="nav-item dropend">
                        <button class="nav-link btn-secondary dropdown-toggle  " type="button" data-bs-toggle="dropdown" aria-expanded="false" aria-current="page">
                        เอกสารต่างๆ
                        </button>
                        <ul class="dropdown-menu  "> 
                          <li><a class="dropdown-item nav-link" href="https://drive.google.com/drive/folders/1mcpgM5AZClv2zI8XPH_D63z12zegys4z">เเบบฟอร์มฝ่ายบริหาร</a></li>
                          <li><a class="dropdown-item nav-link" href="http://www.trathealth.com/accuont.php">งบทดลอง</a></li>
                          <li><a class="dropdown-item nav-link" href="https://drive.google.com/drive/folders/1gO30P2ftB36UFffYpzI5u4qa3HfRUEFU">งานสาธารณสุขพื้นที่พิเศษ</a></li>
                          <li><a class="dropdown-item nav-link" href="download.php">DOWNLOAD</a></li>
                        </ul>
                        </div>
                  </ul>
                  </div>

                  
                <div class="nav-item">
                    <button class="nav-link btn-secondary dropdown-toggle " type="button" data-bs-toggle="dropdown" aria-expanded="false" aria-current="page">
                      บริการ
                    </button>
                    <ul class="dropdown-menu ">
                      <li><a class="dropdown-item nav-link" href="medicine.php">การขออนุญาตด้านยา</a></li>
                      <li><a class="dropdown-item nav-link" href="#">Menu item</a></li>
                      <li><a class="dropdown-item nav-link" href="#">Menu item</a></li>

                      <div class="nav-item dropend">
                        <button class="nav-link btn-secondary dropdown-toggle  " type="button" data-bs-toggle="dropdown" aria-expanded="false" aria-current="page">
                        บริการภายนอก
                        </button>
                        <ul class="dropdown-menu  "> 
                         <li><a class="dropdown-item nav-link" href="https://www.trathospital.go.th/">โรงพยาบาลตราด</a></li>
                         <li><a class="dropdown-item nav-link" href="https://www.trathealthcoop.com/mainpage#">สหกรณ์ออมทรัพย์สาธารณสุขตราด จำกัด</a></li>
                         <li><a class="dropdown-item nav-link" href="https://damrongdham.moi.go.th/signin">ศูนย์ดํารงธรรม</a></li>
          
                        </ul>
                         </div>

                         
                    </ul>
                    </div>
                    <div class="nav-item">
                        <button class="nav-link btn-secondary dropdown-toggle active" type="button" data-bs-toggle="dropdown" aria-expanded="false" aria-current="page">
                          เกี่ยวกับหน่วยงาน
                        </button>
                        <ul class="dropdown-menu ">
                          <li><a class="dropdown-item nav-link nav-link active" href="history.php">เกี่ยวกับเรา</a></li>
                          <li><a class="dropdown-item nav-link" href="background.php">ประวัติความเป็นมา</a></li>
                          <?php
                      
                         if(isset($_SESSION["userid"]))
                         {
                          ?>
                          <li><a href="#"><?php echo $_SESSION["useruid"]; ?></a></li>
                          <li><a class="dropdown-item nav-link" href="register.php">สมัครสมาชิกใหม่ให้เจ้าหน้าที่</a></li>
                          <li><a class="dropdown-item nav-link" style="color: red;" href="includes/logout.inc.php">ออกจากระบบ</a></li>
                        <?php 
                         }
                         else
                        {
                        ?>
                        <li><a class="dropdown-item nav-link" href="login.php">เข้าสู่ระบบเจ้าหน้าที่</a></li>
                        <?php
                        }
                        ?>
                        </ul>
                        </div>
                        <li class="nav-item"><a href="communicate.php" class="nav-link "><font style="vertical-align: inherit;">ติดต่อ</font></a></li>
                    </ul>
                </header>
            </div>
        </div>

        <!--สิ้นสุดส่วนหัว-->
        

        <!--เริ่มต้นหัวเนื้อหาหลักเกี่ยวกับเรา-->

        <div class="px-4 py-5  text-center">
            <img class="d-block mx-auto mb-1" src="img/ตรากระทรวงสาธารณสุขใหม่.png" alt="" width="190" height="180">
            <h1 class="display-5 fw-bold">สาธารณสุข</h1>
            <div class="col-lg-6 mx-auto">
              <p class="lead mb-4">สาธารณสุขคือการร่วมมือร่วมแรงของชุมชนในการป้องกันโรค ส่งเสริมสุขภาพ และพัฒนาสังคมให้ทุกคนมีคุณภาพชีวิตที่ดีขึ้น ด้วยการให้บริการทางการแพทย์ สุขาภิบาล และการส่งเสริมการศึกษาเกี่ยวกับสุขภาพ ป้องกันโรคและส่งเสริมสุขภาพอย่างเหมาะสม เพื่อประโยชน์ของทั้งหมู่ชนและสังคมโดยรวม</p>
              <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <button type="button" class="btn btn-primary btn-lg px-4 gap-3" onclick="scrollToSection('เราทำอะไร')">เราทำอะไร</button>
                <button type="button" class="btn btn-outline-secondary btn-lg px-4"onclick="scrollToSection('ความดูเเลของเรา')">ความดูเเลของเรา</button>
              </div>
            </div>
          </div>

        <!--สิ้นสุดหัวหลักเกี่ยวกับเรา-->

        <!--เริ่มต้นเนื้อหาหลักเกี่ยวกับเรา-->

        <div class="container col-xxl-8 px-4 py-5" id="เราทำอะไร">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="img/ปฏิบัติงานร่วมกับหรือสนับสนุนการปฏิบัติงานของหน่วยงานอื่นที่เกี่ยวข้อง.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3" >เราทำอะไร</h1>
        <p class="lead">
            หน่วยงานสาธารณสุขในเขตพื้นที่จังหวัดรับผิดชอบในการจัดการทรัพยากรสุขภาพและให้บริการสุขภาพที่มีคุณภาพ ผ่านการจัดทำแผนยุทธศาสตร์ ดำเนินการและกำกับการปฏิบัติงานของหน่วยงานสาธารณสุข พัฒนาระบบสารสนเทศ และร่วมทำงานกับหน่วยงานอื่นเพื่อส่งเสริมสุขภาพในชุมชนท้องถิ่น.</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">มุ่งมั่น</button>
          <button type="button" class="btn btn-outline-secondary btn-lg px-4">พัฒนา</button>
        </div>
      </div>
    </div>
  </div>

        <!--สิ้นสุดเนื้อหาหลักเกี่ยวกับเรา-->

        <!--เริ่มต้นเนื้อหาสุดท้าย-->

        <div class="px-4 pt-5 my-5 text-center border-bottom">
            <h1 class="display-4 fw-bold" id="ความดูเเลของเรา" >ความดูเเลของเรา</h1>
            <div class="col-lg-6 mx-auto">
              <p class="lead mb-4">
                สาธารณสุขเกี่ยวข้องกับการรักษาโรค ป้องกันการเจ็บป่วย และส่งเสริมสุขภาพของประชาชนทั้งหมดในสังคม โดยการให้บริการทางการแพทย์ สุขภาพ และการป้องกันโรคให้กับประชาชนทุกคน.</p>
              <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
                <button type="button" class="btn btn-primary btn-lg px-4 me-sm-3">ใส่ใจ</button>
                <button type="button" class="btn btn-outline-secondary btn-lg px-4">ทุกคน</button>
              </div>
            </div>
            <div class="overflow-hidden" style="max-height: 70vh;">
              <div class="container px-5">
                <img src="img/vision.jpg" class="img-fluid border rounded-3 shadow-lg mb-4" alt="Example image" width="700" height="500" loading="lazy">
              </div>
            </div>
          </div>

        <!--สิ้นสุดเนื้อหาสุดท้าย-->
            
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>