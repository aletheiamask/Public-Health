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
                    <div class="nav-item ">
                        <button class="nav-link btn-secondary dropdown-toggle " type="button" data-bs-toggle="dropdown" aria-expanded="false" aria-current="page">
                          เกี่ยวกับหน่วยงาน
                        </button>
                        <ul class="dropdown-menu ">
                          <li ><a class="dropdown-item nav-link " href="history.php">เกี่ยวกับเรา</a></li>
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
                        <li class="nav-item"><a href="#" class="nav-link active "><font style="vertical-align: inherit;">ติดต่อ</font></a></li>
                    </ul>
                </header>
            </div>
        </div>

        <!--สิ้นสุดส่วนหัว-->

        <!--เริ่มต้นส่วนของแผนที่-->

        <div class="bd-example">
            <div class=" text-white " style="width: 70%; margin: auto; margin-top: 20px; ">
                <iframe class="rounded-3 border border-dark" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d104879.96993041296!2d102.48160354952796!3d12.34099458719816!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310443fce7fa6b05%3A0x1452e345e154fcf6!2z4Liq4Liz4LiZ4Lix4LiB4LiH4Liy4LiZ4Liq4Liy4LiY4Liy4Lij4LiT4Liq4Li44LiCIOC4iC7guJXguKPguLLguJQ!5e0!3m2!1sth!2sth!4v1716280986291!5m2!1sth!2sth" width="100%" height="500" style="border: 0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            </div>

            <!--สิ้นสุดส่วนของแผนที่-->

            <!--เริ่มต้นคอลัมติดต่อข้อมูล-->

            <div class="container px-4 py-5" id="hanging-icons">
              <h2 class="pb-2 border-bottom">ติดต่อเกี่ยวกับเรา</h2>
              <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
                <div class="col d-flex align-items-start">
                  <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
                    <svg class="bi" width="1em" height="1em"><use xlink:href="#toggles2"></use></svg>
                  </div>
                  <div>
                    <h2>สาธารณสุขตราด</h2>
                    <p>ที่อยู่ : เลขที่ 6 ช.ชัยมงคล 1 ต.บางพระ อ.เมืองจ.ตราด 23000
                      <br>โทรศัพท์ : 0 3951 1011 
                      <br>อีเมล : trat23moph.mail.go.th</p>
                  </div>
                </div>
                <div class="col d-flex align-items-start">
                  <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
                    <svg class="bi" width="1em" height="1em"><use xlink:href="#cpu-fill"></use></svg>
                  </div>
                  <div>
                    <h2>สายด่วน</h2>
                    <p>สายด่วน อย. : 1556
                      <br>สายด่วนสุขภาพจิต : 1667
                      <br>ปรึษาด้านสุขภาพจิต : 1323 </p>
                  </div>
                </div>
                <div class="col d-flex align-items-start">
                  <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
                    <svg class="bi" width="1em" height="1em"><use xlink:href="#tools"></use></svg>
                  </div>
                  <div>
                    <h2>โซเชียลมีเดีย</h2>
                    <a href="https://www.facebook.com/healthtrat/?locale=th_TH" class="btn btn-primary">
                      Facebook
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <!--สิ้นสุดคอลัมติดต่อข้อมูล-->

            

            
    

  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>