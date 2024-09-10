<?php 
    session_start();
    ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="index.css">
    <title>เว็บไซต์สาธารณสุขจังหวัดตราด</title>
    <link rel="icon" href="img/ตรากระทรวงสาธารณสุขใหม่.png" type="image/png">
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
        
            <li class="nav-item"><a href="index.php" class="nav-link  "><font style="vertical-align: inherit;">หน้าหลัก</font></a></li>
            
            <div class="nav-item"><button class="nav-link btn-secondary dropdown-toggle active " type="button" data-bs-toggle="dropdown" aria-expanded="false" aria-current="page">
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
                     <div class="nav-item dropend ">
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
                  <li><a class="dropdown-item nav-link" href="/เว็บสาธารณสุข/classes/dbh.classes.php">Menu item</a></li>
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
                    <button class="nav-link btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" aria-current="page">
                      เกี่ยวกับหน่วยงาน
                    </button>
                    <ul class="dropdown-menu ">
                      <li><a class="dropdown-item nav-link" href="history.php">เกี่ยวกับเรา</a></li>
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
                    <li class="nav-item"><a href="communicate.php" class="nav-link"><font style="vertical-align: inherit;">ติดต่อ</font></a></li>
                </ul>
            </header>
        </div>
    </div>

<!--สิ้นสุดส่วนหัว-->
  
<!--เริ่มส่วนกรอบดาวน์โหลด-->

  <div class="row mb-3 container bg-light p-1 mt-3 m-auto rounded border">
    <div class="col-md-10 themed-grid-col d-flex " style="margin-top: 5px;"><h3>แบบฟอร์มขอข้อมูลข่าวสาร</h3> </div>
    <div class="col-md-2 themed-grid-col text-center" ><a class="btn btn-lg btn-primary" download="แบบฟอร์มขอข้อมูลข่าวสาร" href="img/formnews.pdf" role="button">โหลดเอกสาร</a></div>
  </div>

  <div class="row mb-3 container bg-light p-1 mt-3 m-auto rounded border">
    <div class="col-md-10 themed-grid-col d-flex" style="margin-top: 5px;"><h3>คู่มือการตรวจสอบการบันทึกข้อมูลเวชระเบียน</h3> </div>
    <div class="col-md-2 themed-grid-col text-center" ><a class="btn btn-lg btn-primary"  href="http://www.thcc.or.th/ebook.html" role="button">โหลดเอกสาร</a></div>
  </div>

  <div class="row mb-3 container bg-light p-1 mt-3 m-auto rounded border" style="color: red;">
    <div class="col-md-10 themed-grid-col d-flex" style="margin-top: 5px;"><h3>คำสั่งตรวจสอบความผิดพลาดการให้รหัส ICD-10 ในโปรแกรม Qlikview</h3> </div>
    <div class="col-md-2 themed-grid-col text-center" ><a class="btn btn-lg btn-primary" download="คำสั่งตรวจสอบความผิดพลาดการให้รหัส ICD-10 ในโปรแกรม Qlikview" href="none" role="button">โหลดเอกสาร</a></div>
  </div>
  
  <div class="row mb-3 container bg-light p-1 mt-3 m-auto rounded border">
    <div class="col-md-10 themed-grid-col d-flex" style="margin-top: 5px;"><h3>หนังสือและเอกสารขั้นตอนรายงานการจัดหาระบบคอมพิวเตอร์</h3> </div>
    <div class="col-md-2 themed-grid-col text-center" ><a class="btn btn-lg btn-primary" download="หนังสือและเอกสารขั้นตอนรายงานการจัดหาระบบคอมพิวเตอร์" href="img/newsdata1_1547604878.zip" role="button">โหลดเอกสาร</a></div>
  </div>

  <div class="row mb-3 container bg-light p-1 mt-3 m-auto rounded border" style="color: red;">
    <div class="col-md-10 themed-grid-col d-flex" style="margin-top: 5px;"><h3>แบบฟอร์มใบลาประเภทต่างๆ</h3> </div>
    <div class="col-md-2 themed-grid-col text-center" ><a class="btn btn-lg btn-primary" download="แบบฟอร์มใบลาประเภทต่างๆ" href="none" role="button">โหลดเอกสาร</a></div>
  </div>

  <div class="row mb-3 container bg-light p-1 mt-3 m-auto rounded border">
    <div class="col-md-10 themed-grid-col d-flex" style="margin-top: 5px;"><h3>คำสั่งประเภทต่างๆ</h3> </div>
    <div class="col-md-2 themed-grid-col text-center" ><a class="btn btn-lg btn-primary" download="คำสั่งประเภทต่างๆ" href="img/คำสั่งต่างๆ-20240627T074630Z-001.zip" role="button">โหลดเอกสาร</a></div>
  </div>


<!--สิ้นสุดส่วนดาวน์โหลด-->


    



     <!-- FC Privacy Matters / zSecurity / NetworkChuck -->

     
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>