<?php 
    session_start();
    ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="ดูรายละเอียดport" content="width=device-width, initial-scale=1">
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
            
                <li class="nav-item"><a href="index.php" class="nav-link  "><font style="vertical-align: inherit;">หน้าหลัก</font></a></li>
                
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
<div style="display: flex;">

    <!--หน้าตัวเลือกสไลด์-->

    <div class="d-flex flex-column flex-shrink-0 p-3  border-end" style="width: 250px; max-height: fit-content;">
        <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
          <svg class="bi me-2" width="25" height="32"><use xlink:href="#bootstrap"></use></svg>
          <span class="fs-4 fw-bold" style="margin-left: 35px;">โพสต์</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
          <li class="nav-item">
            <a href="#" class="nav-link active" aria-current="page">
              <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
              ทั้งหมด
            </a>
          </li>
          <li>
            <a href="#" class="nav-link text-primary">
              <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
              หมวดหมู่1
            </a>
          </li>
          <li>
            <a href="#" class="nav-link  text-primary">
              <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
              หมวดหมู่2
            </a>
          </li>
          <li>
            <a href="#" class="nav-link  text-primary">
              <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
              หมวดหมู่3
            </a>
          </li>
          <li>
            <a href="#" class="nav-link  text-primary">
              <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
              หมวดหมู่4
            </a>
          </li>
        </ul>
      </div>

       <!--สิ้นสุดหน้าตัวเลือกสไลด์-->

       <!--เริ่มเนื้อหาข่าวสาร  ตัวอักษรเนื้อหา 127 ตัว-->

       <div class="album py-3 " style="margin-left: 30px;">
        <div class="container">
    
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <div class="col">
              <div class="card shadow-sm ">
                <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: ตัวอย่าง" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="40%" y="50%" fill="#eceeef" dy=".3em">ตัวอย่าง</text></svg>
    
                <div class="card-body ">
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-primary">ดูรายละเอียด</button>
                    </div>
                    <small class="text-primary">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card shadow-sm">
                <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: ตัวอย่าง" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="40%" y="50%" fill="#eceeef" dy=".3em">ตัวอย่าง</text></svg>
    
                <div class="card-body">
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-primary">ดูรายละเอียด</button>
                    </div>
                    <small class="text-primary">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card shadow-sm">
                <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: ตัวอย่าง" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="40%" y="50%" fill="#eceeef" dy=".3em">ตัวอย่าง</text></svg>
    
                <div class="card-body">
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-primary">ดูรายละเอียด</button>
                    </div>
                    <small class="text-primary">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
    
            <div class="col">
              <div class="card shadow-sm">
                <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: ตัวอย่าง" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="40%" y="50%" fill="#eceeef" dy=".3em">ตัวอย่าง</text></svg>
    
                <div class="card-body">
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-primary">ดูรายละเอียด</button>
                    </div>
                    <small class="text-primary">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card shadow-sm">
                <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: ตัวอย่าง" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="40%" y="50%" fill="#eceeef" dy=".3em">ตัวอย่าง</text></svg>
    
                <div class="card-body">
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-primary">ดูรายละเอียด</button>
                    </div>
                    <small class="text-primary">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card shadow-sm">
                <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: ตัวอย่าง" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="40%" y="50%" fill="#eceeef" dy=".3em">ตัวอย่าง</text></svg>
    
                <div class="card-body">
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-primary">ดูรายละเอียด</button>
                    </div>
                    <small class="text-primary">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
    
            <div class="col">
              <div class="card shadow-sm">
                <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: ตัวอย่าง" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="40%" y="50%" fill="#eceeef" dy=".3em">ตัวอย่าง</text></svg>
    
                <div class="card-body">
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-primary">ดูรายละเอียด</button>
                    </div>
                    <small class="text-primary">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card shadow-sm">
                <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: ตัวอย่าง" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="40%" y="50%" fill="#eceeef" dy=".3em">ตัวอย่าง</text></svg>
    
                <div class="card-body">
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-primary">ดูรายละเอียด</button>
                    </div>
                    <small class="text-primary">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card shadow-sm">
                <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: ตัวอย่าง" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="40%" y="50%" fill="#eceeef" dy=".3em">ตัวอย่าง</text></svg>
    
                <div class="card-body">
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-primary">ดูรายละเอียด</button>
                    </div>
                    <small class="text-primary">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!--สิ้นสุดเนื้อหาข่าวสาร-->

</div>
        
 


  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>