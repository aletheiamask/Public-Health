<?php

class Dbh {
   
    // ฟังก์ชั่นสำหรับเชื่อมต่อฐานข้อมูล
    public function connect() {
        // ข้อมูลเข้าในฐานข้อมูล
        $host = 'localhost';
        $dbName = 'ooplogin';
        $username = 'root';
        $password = '';

        try {
            // สร้างการเชื่อมต่อ PDO
            $dbh = new PDO("mysql:host=$host;dbname=$dbName", $username, $password);
            
            // ตั้งค่าให้ PDO รายงานข้อผิดพลาดด้วยการเข้าถึงฐานข้อมูลเป็น Exception
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            return $dbh;
        } catch (PDOException $e) {
            header('Location: ../error.php');
            die();
        }
    }
}
