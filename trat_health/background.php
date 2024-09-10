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
                          <li><a class="dropdown-item nav-link" href="history.php">เกี่ยวกับเรา</a></li>
                          <li><a class="dropdown-item nav-link nav-link active" href="background.php">ประวัติความเป็นมา</a></li>
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

        <!--เริ่มต้นส่วนเนื้อหา-->


        <main class="container py-5">
          <div class="p-4 p-md-5 mb-4 text-white rounded text-bg-primary">
            <div class="col-md-6 px-0">
              <h1 class="display-4 fst-italic">จุดเริ่มต้น</h1>
              <p class="lead my-3">วิวัฒนาการทางการแพทย์และการสาธารณสุขของประเทศไทย</p>
              <p class="lead mb-0"><a href="#" class="text-white fw-bold">Continue reading...</a></p>
            </div>
          </div>
        
          <div class="row mb-2">
            <div class="col-md-6">
              <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                  <strong class="d-inline-block mb-2 text-primary">การแพทย์</strong>
                  <h3 class="mb-0">การแพทย์ในยุคก่อนประวัติศาสตร์</h3>
                  <div class="mb-1 text-muted">24 พฤษภาคม 2567</div>
                  <p class="card-text mb-auto">ยุคก่อนประวัติศาสตร์เป็นเวลาที่เริ่มต้นของการแพทย์และการดูแลสุขภาพในประเทศไทย</p>
                  <a type="button" ondblclick="scrollToSection('การแพทย์ในยุคก่อนประวัติศาสตร์')" class="stretched-link">อ่านบทความ</a>
                </div>
                <div class="col-auto d-none d-lg-block">
                  <img class="bd-placeholder-img " src="img/ประวัติศาสตร์.jpg" width="200" height="250" style="object-fit: cover;" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect></img>
                  
        
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                  <strong class="d-inline-block mb-2 text-success">Design</strong>
                  <h3 class="mb-0">Post title</h3>
                  <div class="mb-1 text-muted">Nov 11</div>
                  <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="stretched-link">Continue reading</a>
                </div>
                <div class="col-auto d-none d-lg-block">
                  <img class="bd-placeholder-img " src="img/ประวัติศาสตร์2.jpg" width="200" height="250" style="object-fit: cover;" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect></img>
        
                </div>
              </div>
            </div>
          </div>
        
          <div class="row g-5">
            <div class="col-md-8">
              <h3 class="pb-4 mb-4 fst-italic border-bottom">
                วิวัฒนาการทางการแพทย์
              </h3>
        
              <article class="blog-post">
                <h2 class="blog-post-title">บทความโดย นายจักรกฤษดิ์ เซี่ยงม้า</h2>
                <p class="blog-post-meta">24 พฤษภาคม 2567 <a href="https://www.moph.go.th/index.php/about/history">อ้างอิง</a></p>
        
                <ol>
                <li id="การแพทย์ในยุคก่อนประวัติศาสตร์">การแพทย์ในยุคก่อนประวัติศาสตร์</li>
                  <li>การรับมือกับโรคระบาดในสมัยสุโขทัย
                  </li>
                  <li>การพัฒนาการแพทย์ในสมัยกรุงศรีอยุธยา
                  </li>
                </ol>
                <hr>
                <p>การแพทย์และสาธารณสุขในประเทศไทยมีการพัฒนาขึ้นเป็นอย่างมากตั้งแต่ยุคก่อนประวัติศาสตร์ โดยเฉพาะในสมัยสุโขทัยและกรุงศรีอยุธยา ซึ่งเป็นยุคที่มีการค้นพบและใช้สมุนไพรในการรักษาโรคอย่างแพร่หลาย และมีการจัดการกับโรคระบาดอย่างมีประสิทธิภาพ การรับมือกับโรคระบาดและการให้การรักษาทางการแพทย์ได้มีการพัฒนาขึ้นอย่างอย่างมากในยุคนั้น ซึ่งเป็นรากฐานที่สำคัญในการพัฒนาระบบสุขภาพของประเทศไทยในปัจจุบัน.</p>
                <h2>การแพทย์ในยุคก่อนประวัติศาสตร์</h2>
                <p>ยุคก่อนประวัติศาสตร์เป็นเวลาที่เริ่มต้นของการแพทย์และการดูแลสุขภาพในประเทศไทย ด้วยการใช้สมุนไพร <br><a href="https://www.moph.go.th/index.php/about/prehistoric">ประวัติกระทรวงสาธารณสุข</a></p>
                <blockquote class="blockquote">
                  <p>ความรู้ความเข้าใจในยุคนั้น.</p>
                </blockquote>
                <p>
                  การแพทย์ในยุคก่อนประวัติศาสตร์ของประเทศไทยเป็นช่วงเวลาที่มนุษย์เริ่มรู้จักการรักษาตนเองตั้งแต่ยังอยู่ในยุคก่อนและเริ่มมีการสร้างความรู้เกี่ยวกับการแพทย์และสาธารณสุขอย่างช้าๆ โดยมีความเชื่อที่โรคเกิดจากปรากฎการณ์ตามธรรมชาติและมีการรักษาโดยการเซ่นไหว้และการใช้สมุนไพรเป็นหลัก ในยุคนี้ สถานะของการแพทย์ยังคงเป็นที่เคารพนับถือในสังคม เนื่องจากมีบทบาทสำคัญในการรักษาโรคและความสุขของมนุษย์ โดยมีบุคคลสำคัญเช่น พระพุทธเจ้า และหมอชีวกโกมารภัจจ์ที่เป็นหมอสมุนไพรที่มีความสำคัญในการให้คำแนะนำเกี่ยวกับการรักษาโรคและการดูแลสุขภาพของประชาชนในสมัยนั้น การเชื่อในอำนาจของพระพุทธเจ้าในการรักษาโรคและการแสวงหาความเป็นสุขยังเป็นที่นับถืออย่างสูง และการใช้สมุนไพรเป็นวิธีการแพทย์ที่มีประสิทธิภาพและเป็นที่ยอมรับในสังคมของยุคนั้น ซึ่งเป็นเส้นทางแรกในการพัฒนาการแพทย์และสาธารณสุขของประเทศไทยในอดีตและปัจจุบัน.</p>
                <h3>สมัยสุโขทัย</h3>
                <p>ในยุคสมัยสุโขทัย เริ่มมีการค้นพบและใช้สมุนไพรในการรักษาโรคอย่างแพร่หลาย เช่นการค้นพบหินบดยาสมัยทวาราวดี ซึ่งเป็นเครื่องมือที่มีประสิทธิภาพในการรักษาโรคและบำบัดผู้ป่วยในยุคก่อนสมัยสุโขทัย นอกจากนี้ ยังมีศิลาจารึกของพ่อชุนรามคำแหงที่บันทึกถึงการสร้างสวนสมุนไพรขนาดใหญ่บนเขาหลวงในเขตอำเภอคีรีมาศ จังหวัดสุโขทัย เพื่อให้ราษฎรได้เก็บสมุนไพรไปใช้ในการรักษาโรคในเวลาที่เจ็บป่วย

                  ในขณะเดียวกัน ศิลาจารึกของพ่อขุนรามคำแหงได้เน้นความสำคัญของความสมบูรณ์ของอาหารท้องถิ่น ที่มีความหลากหลายและครบถ้วนเช่นเดียวกับธรรมชาติที่ร่วมมือในการรักษาโรค.</p>
                <ul>
                  <p>สรุปหัวข้อสำคัญ</p>
                  <li>ความสำคัญของการใช้สมุนไพรในการรักษาโรคในสมัยสุโขทัย</li>
                  <li>การค้นพบและการใช้หินบดยาสมัยทวาราวดีในการรักษาโรค</li>
                  <li>ศิลาจารึกของพ่อชุนรามคำแหง</li>
                </ul>
      
                <h2>สมัยกรุงศรีอยุธยา</h2>
                <p>การระบาดของโรคอหิวาตกโรคครั้งแรกในกรุงศรีอยุธยา <a href="https://www.hfocus.org/content/2013/09/4628">ย้อนรอยประวัติศาสตร์โรคระบาดประเทศไทย</a>.</p>
                <p>
                  สมัยกรุงศรีอยุธยาเป็นช่วงเวลาที่มีเหตุการณ์โรคภัยเกิดขึ้นอย่างรุนแรง โดยเริ่มต้นจากการเกิดโรคติดต่ออันตรายในเมืองอู่ทองซึ่งเป็นเมืองหลวงเดิม ทำให้ประชาชนต้องอพยพมาตั้งเมืองใหม่คือ กรุงศรีอยุธยาในระยะเวลาประมาณ 7-8 ปี เริ่มตั้งแต่ปีพุทธศักราช 1893 ถึง 1900 โรคขึ้นที่เมืองใหม่นี้ในปีพุทธศักราช 2077 ได้เป็นไข้ทรพิษระบาดทำให้มีการสวรรคตและประชวรพระบรมราชาที่ 4 ในกรุงศรีอยุธยา โรคภัยไข้เจ็บในสมัยนั้นมีความรุนแรงมาก โดยถ้าเป็นโรคติดต่ออันตรายเกิดขึ้นแต่ละครั้งจะมีการทำลายชีวิตมวนมากมาย เนื่องจากในยุคนั้นยังไม่มีการเข้าใจเกี่ยวกับสาเหตุและวิธีการกำจัดโรคอย่างชัดเจน และไม่มีแพทย์ที่มีความรู้เพียงพอเพื่อดูแลผู้ป่วย การแพทย์ในสมัยนั้นมีลักษณะการผสมผสานมาจากการแพทย์ของอินเดียและจีน รวมทั้งความเชื่อทางไสยศาสตร์และโหราศาสตร์เข้าด้วยกัน เพื่อให้สอดคล้องกับสภาพของชุมชน แนวคิดหลักของการแพทย์ไทยในสมัยนั้นเป็นแบบอายุรเวทซึ่งมุ่งเน้นไปที่สมดุลของธาตุ 4 องค์ประกอบของชีวิต การจัดหายาและสมุนไพรมีการรวบรวมตำรับยาต่าง ๆ ขึ้นเพื่อใช้ในการรักษาโรค ในสมัยนั้น ความกตัญญูและความรู้คุณครูบาอาจารย์มีความสำคัญเป็นอย่างมาก ซึ่งแพทย์ไทยเคยถือว่าครูดั้งเดิมคือพระฤาษีในสมัยสมเด็จพระนารายณ์มหาราช ผู้มีความรู้เรื่องการแพทย์และการใช้สมุนไพร สมัยกรุงศรีอยุธยาเป็นช่วงเวลาที่มีการพัฒนาทางการแพทย์และการดูแลสุขภาพของประชาชนอย่างมีนัยสำคัญในประวัติศาสตร์ของชาติไทย.</p>
                  <ul>
                    <p>สรุปหัวข้อสำคัญ</p>
                    <li>โรคภัยในสมัยกรุงศรีอยุธยา</li>
                    <li>ความเชื่อในสมัยกรุงศรีอยุธยา</li>
                    <li>การแพทย์ในสมัยอยุธยา</li>
                    <li>ผลกระทบของโรคภัย</li>
                  </ul>
              </article>
        
             
        
        
              <nav class="blog-pagination" aria-label="Pagination">
                <a class="btn btn-outline-primary" href="#">ข้างบน</a>
              </nav>
        
            </div>
        
            <div class="col-md-4">
              <div class="position-sticky" style="top: 2rem;">
                <div class="p-4 mb-3 bg-light rounded">
                  <h4 class="fst-italic">เกี่ยวกับ</h4>
                  <p class="mb-0">"บทความที่มีข้างต้นเป็นผลลัพธ์จากการศึกษาวิจัยและค้นคว้าที่หลากหลาย ผู้เขียนได้สรุปข้อมูลจากแหล่งต่าง ๆ ตามความเห็นของตนเองเท่านั้น อย่างไรก็ตาม ผู้อ่านควรใช้วิจารณญาณในการรับรู้สารนี้ และควรพิจารณาข้อมูลเสมอจากแหล่งที่น่าเชื่อถือเพิ่มเติม"</p>
                </div>
        
                <div class="p-4">
                  <h4 class="fst-italic">อ้างอิง</h4>
                  <ol class="list-unstyled mb-0">
                    <li><a href="https://www.moph.go.th/index.php/about/prehistoric">ประวัติกระทรวงสาธารณสุข</a></li>
                    <li><a href="https://www.hfocus.org/content/2013/09/4628">ย้อนรอยประวัติศาสตร์โรคระบาดประเทศไทย</a></li>
                  </ol>
                </div>
        
                <div class="p-4">
                  <h4 class="fst-italic">ภาพประกอบ</h4>
                  <ol class="list-unstyled">
                    <li><a href="https://www.moph.go.th/assets/images/history/yu1.jpg">ภาพปั้นหมอชีวกโกมารภัจจ์</a></li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
        </div>
      
        <div class="row g-5">
          <div class="col-md-8">
            <h3 class="pb-4 mb-4 fst-italic border-bottom">
             
            </h3>
      
            <article class="blog-post">
              <h2 class="blog-post-title">ประวัติสาธารณสุขจังหวัดตราด</h2>
              <p class="blog-post-meta">27 พฤษภาคม 2567 <a href="https://www.moph.go.th/index.php/about/history">อ้างอิง</a></p>
      
              <ol>
              <li id="การแพทย์ในยุคก่อนประวัติศาสตร์">การแพทย์ในยุคก่อนประวัติศาสตร์</li>
                <li>การรับมือกับโรคระบาดในสมัยสุโขทัย
                </li>
                <li>การพัฒนาการแพทย์ในสมัยกรุงศรีอยุธยา
                </li>
              </ol>
              <hr>
              <p>การแพทย์และสาธารณสุขในประเทศไทยมีการพัฒนาขึ้นเป็นอย่างมากตั้งแต่ยุคก่อนประวัติศาสตร์ โดยเฉพาะในสมัยสุโขทัยและกรุงศรีอยุธยา ซึ่งเป็นยุคที่มีการค้นพบและใช้สมุนไพรในการรักษาโรคอย่างแพร่หลาย และมีการจัดการกับโรคระบาดอย่างมีประสิทธิภาพ การรับมือกับโรคระบาดและการให้การรักษาทางการแพทย์ได้มีการพัฒนาขึ้นอย่างมีชีวิตชีวาอย่างมากในยุคนั้น ซึ่งเป็นรากฐานที่สำคัญในการพัฒนาระบบสุขภาพของประเทศไทยในปัจจุบัน.</p>
              <h2>การแพทย์ในยุคก่อนประวัติศาสตร์</h2>
              <p>ยุคก่อนประวัติศาสตร์เป็นเวลาที่เริ่มต้นของการแพทย์และการดูแลสุขภาพในประเทศไทย ด้วยการใช้สมุนไพร <br><a href="https://www.moph.go.th/index.php/about/prehistoric">ประวัติกระทรวงสาธารณสุข</a></p>
              <blockquote class="blockquote">
                <p>ความรู้ความเข้าใจในยุคนั้น.</p>
              </blockquote>
              <p>
                การแพทย์ในยุคก่อนประวัติศาสตร์ของประเทศไทยเป็นช่วงเวลาที่มนุษย์เริ่มรู้จักการรักษาตนเองตั้งแต่ยังอยู่ในยุคก่อนและเริ่มมีการสร้างความรู้เกี่ยวกับการแพทย์และสาธารณสุขอย่างช้าๆ โดยมีความเชื่อที่โรคเกิดจากปรากฎการณ์ตามธรรมชาติและมีการรักษาโดยการเซ่นไหว้และการใช้สมุนไพรเป็นหลัก ในยุคนี้ สถานะของการแพทย์ยังคงเป็นที่เคารพนับถือในสังคม เนื่องจากมีบทบาทสำคัญในการรักษาโรคและความสุขของมนุษย์ โดยมีบุคคลสำคัญเช่น พระพุทธเจ้า และหมอชีวกโกมารภัจจ์ที่เป็นหมอสมุนไพรที่มีความสำคัญในการให้คำแนะนำเกี่ยวกับการรักษาโรคและการดูแลสุขภาพของประชาชนในสมัยนั้น การเชื่อในอำนาจของพระพุทธเจ้าในการรักษาโรคและการแสวงหาความเป็นสุขยังเป็นที่นับถืออย่างสูง และการใช้สมุนไพรเป็นวิธีการแพทย์ที่มีประสิทธิภาพและเป็นที่ยอมรับในสังคมของยุคนั้น ซึ่งเป็นเส้นทางแรกในการพัฒนาการแพทย์และสาธารณสุขของประเทศไทยในอดีตและปัจจุบัน.</p>
              <h3>สมัยสุโขทัย</h3>
              <p>ในยุคสมัยสุโขทัย เริ่มมีการค้นพบและใช้สมุนไพรในการรักษาโรคอย่างแพร่หลาย เช่นการค้นพบหินบดยาสมัยทวาราวดี ซึ่งเป็นเครื่องมือที่มีประสิทธิภาพในการรักษาโรคและบำบัดผู้ป่วยในยุคก่อนสมัยสุโขทัย นอกจากนี้ ยังมีศิลาจารึกของพ่อชุนรามคำแหงที่บันทึกถึงการสร้างสวนสมุนไพรขนาดใหญ่บนเขาหลวงในเขตอำเภอคีรีมาศ จังหวัดสุโขทัย เพื่อให้ราษฎรได้เก็บสมุนไพรไปใช้ในการรักษาโรคในเวลาที่เจ็บป่วย

                ในขณะเดียวกัน ศิลาจารึกของพ่อชุนรามคำแหงได้เน้นความสำคัญของความสมบูรณ์ของอาหารท้องถิ่น ที่มีความหลากหลายและครบถ้วนเช่นเดียวกับธรรมชาติที่ร่วมมือในการรักษาโรค.</p>
              <ul>
                <p>สรุปหัวข้อสำคัญ</p>
                <li>ความสำคัญของการใช้สมุนไพรในการรักษาโรคในสมัยสุโขทัย</li>
                <li>การค้นพบและการใช้หินบดยาสมัยทวาราวดีในการรักษาโรค</li>
                <li>ศิลาจารึกของพ่อชุนรามคำแหง</li>
              </ul>
    
              <h2>สมัยกรุงศรีอยุธยา</h2>
              <p>การระบาดของโรคอหิวาตกโรคครั้งแรกในกรุงศรีอยุธยา <a href="https://www.hfocus.org/content/2013/09/4628">ย้อนรอยประวัติศาสตร์โรคระบาดประเทศไทย</a>.</p>
              <p>
                สมัยกรุงศรีอยุธยาเป็นช่วงเวลาที่มีเหตุการณ์โรคภัยเกิดขึ้นอย่างรุนแรง โดยเริ่มต้นจากการเกิดโรคติดต่ออันตรายในเมืองอู่ทองซึ่งเป็นเมืองหลวงเดิม ทำให้ประชาชนต้องอพยพมาตั้งเมืองใหม่คือ กรุงศรีอยุธยาในระยะเวลาประมาณ 7-8 ปี เริ่มตั้งแต่ปีพุทธศักราช 1893 ถึง 1900 โรคขึ้นที่เมืองใหม่นี้ในปีพุทธศักราช 2077 ได้เป็นไข้ทรพิษระบาดทำให้มีการสวรรคตและประชวรพระบรมราชาที่ 4 ในกรุงศรีอยุธยา โรคภัยไข้เจ็บในสมัยนั้นมีความรุนแรงมาก โดยถ้าเป็นโรคติดต่ออันตรายเกิดขึ้นแต่ละครั้งจะมีการทำลายชีวิตมวนมากมาย เนื่องจากในยุคนั้นยังไม่มีการเข้าใจเกี่ยวกับสาเหตุและวิธีการกำจัดโรคอย่างชัดเจน และไม่มีแพทย์ที่มีความรู้เพียงพอเพื่อดูแลผู้ป่วย การแพทย์ในสมัยนั้นมีลักษณะการผสมผสานมาจากการแพทย์ของอินเดียและจีน รวมทั้งความเชื่อทางไสยศาสตร์และโหราศาสตร์เข้าด้วยกัน เพื่อให้สอดคล้องกับสภาพของชุมชน แนวคิดหลักของการแพทย์ไทยในสมัยนั้นเป็นแบบอายุรเวทซึ่งมุ่งเน้นไปที่สมดุลของธาตุ 4 องค์ประกอบของชีวิต การจัดหายาและสมุนไพรมีการรวบรวมตำรับยาต่าง ๆ ขึ้นเพื่อใช้ในการรักษาโรค ในสมัยนั้น ความกตัญญูและความรู้คุณครูบาอาจารย์มีความสำคัญเป็นอย่างมาก ซึ่งแพทย์ไทยเคยถือว่าครูดั้งเดิมคือพระฤาษีในสมัยสมเด็จพระนารายณ์มหาราช ผู้มีความรู้เรื่องการแพทย์และการใช้สมุนไพร สมัยกรุงศรีอยุธยาเป็นช่วงเวลาที่มีการพัฒนาทางการแพทย์และการดูแลสุขภาพของประชาชนอย่างมีนัยสำคัญในประวัติศาสตร์ของไทย.</p>
                <ul>
                  <p>สรุปหัวข้อสำคัญ</p>
                  <li>โรคภัยในสมัยกรุงศรีอยุธยา</li>
                  <li>ความเชื่อในสมัยกรุงศรีอยุธยา</li>
                  <li>การแพทย์ในสมัยอยุธยา</li>
                  <li>ผลกระทบของโรคภัย</li>
                </ul>
            </article>
      
           
      
      
            <nav class="blog-pagination" aria-label="Pagination">
              <a class="btn btn-outline-primary" href="#">ข้างบน</a>
            </nav>
      
          </div>
      
       
        </div>
        </main>

        <!--สิ้นสุดส่วนของเนื้อหา-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>