<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<?php 
session_start();   
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ooplogin";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    header('Location: error.php');
  die(); // หยุดการทำงานของสคริปต์หลังจากแสดงข้อความ
}

// Check if there's a new category from the GET request
if (isset($_GET['category'])) {
    // If the category is empty, set it to an empty string
    $_SESSION['selectedCategory'] = $_GET['category'] === '' ? '' : $_GET['category'];
} elseif (!isset($_SESSION['selectedCategory'])) {
    $_SESSION['selectedCategory'] = ''; // Default value if session is not set
}

$selectedCategory = $_SESSION['selectedCategory'];
$searchQuery = isset($_GET['search']) ? $_GET['search'] : '';

// Create SQL statement with conditions based on category and search query
$sql = "SELECT * FROM posts_forum WHERE main_category = 'ประชาสัมพันธ์'";
$conditions = [];

// Only add conditions based on selected category and search query
if ($selectedCategory !== '') {
    $conditions[] = "category = ?";
}

if ($searchQuery) {
    $conditions[] = "main_topic LIKE ?";
}

// Append additional conditions to the SQL query
if (count($conditions) > 0) {
    $sql .= " AND " . implode(' AND ', $conditions);
}

$stmt = $conn->prepare($sql);

if ($stmt === false) {
    die('Failed to prepare SQL statement: ' . $conn->error);
}

// Bind parameters if present
$types = '';
$params = [];

// Bind the selected category if it's not empty
if ($selectedCategory !== '') {
    $types .= 's';
    $params[] = $selectedCategory;
}

// Bind the search query if it's not empty
if ($searchQuery) {
    $types .= 's';
    // Add wildcards for LIKE search
    $params[] = '%' . $searchQuery . '%';
}

if ($types) {
    $stmt->bind_param($types, ...$params);
}

// Execute statement
if (!$stmt->execute()) {
    die('Failed to execute SQL statement: ' . $stmt->error);
}

$result = $stmt->get_result();
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
                
                <div class="nav-item"><button class="nav-link btn-secondary dropdown-toggle  active" type="button" data-bs-toggle="dropdown" aria-expanded="false" aria-current="page">
                  ข่าวสาร
                  </button>
                  <ul class="dropdown-menu  "> 
                    <li><a class="dropdown-item nav-link " href="a_announce.php">ประกาศ</a></li>
                    <li><a class="dropdown-item nav-link active" href="a_relations.php">ประชาสัมพันธ์</a></li>
                    <li><a class="dropdown-item nav-link " href="a_tender.php">ประกวดราคา</a></li>
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

        

<!--เริ่มเนื้อหาข่าวสาร-->
<div style="display: flex;">
       <div class="album  " style="margin: auto;">
       <nav class="navbar navbar-expand-lg  rounded" aria-label="Eleventh navbar example">
      <div class="container-fluid" >
      <form role="search" method="GET" action="a_relations.php" style="display: flex;">
    <div class="input-group mb-3">
        <div class="row">
            <div class="col">
                <input class="form-control" type="search" name="search" placeholder="Search" aria-label="Search" value="<?= htmlspecialchars($searchQuery) ?>">
            </div>
            <div class="col">
                <select class="form-select" name="category">
                    <option value="" <?= $selectedCategory === '' ? 'selected' : '' ?>>ทั้งหมด</option>
                    <option value="กลุ่มงานนิติการ" <?= $selectedCategory === 'กลุ่มงานนิติการ' ? 'selected' : '' ?>>กลุ่มงานนิติการ</option>
                    <option value="กลุ่มงานควบคุมโรคติดต่อ" <?= $selectedCategory === 'กลุ่มงานควบคุมโรคติดต่อ' ? 'selected' : '' ?>>กลุ่มงานควบคุมโรคติดต่อ</option>
                    <option value="กลุ่มงานประกันสุขภาพ" <?= $selectedCategory === 'กลุ่มงานประกันสุขภาพ' ? 'selected' : '' ?>>กลุ่มงานประกันสุขภาพ</option>
                    <option value="กลุ่มงานควบคุมโรคไม่ติดต่อสุขภาพจิตเเละยาเสพติด" <?= $selectedCategory === 'กลุ่มงานควบคุมโรคไม่ติดต่อสุขภาพจิตเเละยาเสพติด' ? 'selected' : '' ?>>กลุ่มงานควบคุมโรคไม่ติดต่อสุขภาพจิตเเละยาเสพติด</option>
                    <option value="กลุ่มงานพัฒนายุทธศาสตร์สาธารณสุข" <?= $selectedCategory === 'กลุ่มงานพัฒนายุทธศาสตร์สาธารณสุข' ? 'selected' : '' ?>>กลุ่มงานพัฒนายุทธศาสตร์สาธารณสุข</option>
                    <option value="กลุ่มงานบริหารทรัพยากรบุคคล" <?= $selectedCategory === 'กลุ่มงานบริหารทรัพยากรบุคคล' ? 'selected' : '' ?>>กลุ่มงานบริหารทรัพยากรบุคคล</option>
                    <option value="กลุ่มงานคุ้มครองผู้บริโภคเเละเภสัชสาธารณสุข" <?= $selectedCategory === 'กลุ่มงานคุ้มครองผู้บริโภคเเละเภสัชสาธารณสุข' ? 'selected' : '' ?>>กลุ่มงานคุ้มครองผู้บริโภคเเละเภสัชสาธารณสุข</option>
                    <option value="กลุ่มงานทันตสาธารณสุข" <?= $selectedCategory === 'กลุ่มงานทันตสาธารณสุข' ? 'selected' : '' ?>>กลุ่มงานทันตสาธารณสุข</option>
                    <option value="กลุ่มงานส่งเสริมสุขภาพ" <?= $selectedCategory === 'กลุ่มงานส่งเสริมสุขภาพ' ? 'selected' : '' ?>>กลุ่มงานส่งเสริมสุขภาพ</option>
                    <option value="กลุ่มงานพัฒนาคุณภาพรูปเเบบบริการ" <?= $selectedCategory === 'กลุ่มงานพัฒนาคุณภาพรูปเเบบบริการ' ? 'selected' : '' ?>>กลุ่มงานพัฒนาคุณภาพรูปเเบบบริการ</option>
                    <option value="กลุ่มงานเเพทย์เเผนไทยเเละเเพทย์ทางเลือก" <?= $selectedCategory === 'กลุ่มงานเเพทย์เเผนไทยเเละเเพทย์ทางเลือก' ? 'selected' : '' ?>>กลุ่มงานเเพทย์เเผนไทยเเละเเพทย์ทางเลือก</option>
                    <option value="กลุ่มงานบริหารทั่วไป" <?= $selectedCategory === 'กลุ่มงานบริหารทั่วไป' ? 'selected' : '' ?>>กลุ่มงานบริหารทั่วไป</option>
                    <option value="กลุ่มงานอนามัยสิ่งเเวดล้อมเเละอาชีวอนามัย" <?= $selectedCategory === 'กลุ่มงานอนามัยสิ่งเเวดล้อมเเละอาชีวอนามัย' ? 'selected' : '' ?>>กลุ่มงานอนามัยสิ่งเเวดล้อมเเละอาชีวอนามัย</option>
                    <!-- เพิ่มตัวเลือกอื่นๆ ตามที่ต้องการ -->
                </select>
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</form>


   </nav>


        

        <div class="container">
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3">
          <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $imageName = $row["id"];
                    $main_topic = $row["main_topic"];
                    $publishing_time = $row["publishing_time"];
                    $details = $row["details"];
                    $imageData = $row["file_img"];
                    $category = $row["category"];

                    $base64Image = base64_encode($imageData);
                    ?>
                    <div class="col">
                        <div class="card shadow-sm" style="min-height: 350px;">
                            <img class="bd-placeholder-img card-img-top" src="data:image/jpeg;base64,<?php echo $base64Image; ?>" alt="<?php echo htmlspecialchars($imageName); ?>" style="width: 310px; object-fit: cover; height: 206px;">
                            <div class="card-body">
                                <p class="card-text" style="display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 3; overflow: hidden;"><?php echo htmlspecialchars($main_topic); ?> <br> <?php echo htmlspecialchars($details); ?></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-primary"><a style="text-decoration: none;" href="new.php?id=<?php echo htmlspecialchars($imageName); ?>">ดูรายละเอียด</a></button>
                                    </div>
                                    <small class="text-primary date-display" data-publishing-time="<?php echo htmlspecialchars($publishing_time); ?>"></small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            } else {
                echo '<p>ไม่มีข่าวสาร.</p>';
            }

            $stmt->close();
            $conn->close();
            ?>
           
           
          </div>
        </div>
      </div>
    </div>
    <!--สิ้นสุดเนื้อหาข่าวสาร-->
    <script>
        // ฟังก์ชันเพื่อแปลงวันที่เป็นรูปแบบพุทธศักราช
        function formatDate(publishingTime) {
            const dateObj = new Date(publishingTime);

            // ตัวเลือกการตั้งค่าวันที่และเวลา
            const options = { day: 'numeric', month: 'long' };
            const formatter = new Intl.DateTimeFormat('th-TH', options);
            const thaiDate = formatter.format(dateObj);

            // แปลงปีเป็นปีพุทธศักราช
            const year = dateObj.getFullYear();
            const thaiYear = year + 543;

            // สร้างข้อความวันที่
            return `${thaiDate} ${thaiYear}`;
        }

        // หาอิลิเมนต์ทั้งหมดที่มีคลาส 'date-display'
        const dateDisplays = document.querySelectorAll('.date-display');
        dateDisplays.forEach(el => {
            // ดึงข้อมูลวันที่จาก attribute 'data-publishing-time'
            const publishingTime = el.getAttribute('data-publishing-time');
            // ตั้งค่าเนื้อหาให้เป็นวันที่ที่แปลงแล้ว
            el.textContent = `${formatDate(publishingTime)}`;
        });
    </script>
    <script>
function selectCategory(category) {
    document.getElementById('selectedCategory').value = category;
    document.forms[0].submit(); // ส่งฟอร์มทันทีเมื่อเลือกหมวดหมู่
}
</script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>