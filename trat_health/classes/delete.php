<?php
// ข้อมูลสำหรับเชื่อมต่อฐานข้อมูล
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ooplogin";

// สร้างการเชื่อมต่อ
$conn = new mysqli($servername, $username, $password, $dbname);

// ตรวจสอบการเชื่อมต่อ
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// ตรวจสอบว่ามีข้อมูล id ที่ส่งมาจาก URL หรือไม่
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // คำสั่ง SQL เพื่อลบข้อมูล
    $sql = "DELETE FROM posts_forum WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    // ปิดการเชื่อมต่อฐานข้อมูล
    $conn->close();

    // รีเฟรชหน้าเว็บ
    header("Location: ../a_announce.php");
    exit();
} else {
    echo "Invalid request";
}
?>
