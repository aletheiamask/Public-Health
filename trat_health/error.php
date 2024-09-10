<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข้อผิดพลาดการเชื่อมต่อฐานข้อมูล</title>
    <link rel="icon" href="img/ตรากระทรวงสาธารณสุขใหม่.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        .container {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .waiting-message {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="waiting-message">
            <h1>เกิดข้อผิดพลาด</h1>
            <p>ไม่สามารถเชื่อมต่อฐานข้อมูล โปรดกลับมาใหม่อีกครั้งในภายหลัง</p>
            <p>กำลังพยายามเชื่อมต่อใหม่...</p>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // แสดง SweetAlert2 ด้วยการหมุนโหลด
            Swal.fire({
                icon: 'warning',
                title: 'เกิดข้อผิดพลาด',
                text: 'ไม่สามารถเชื่อมต่อฐานข้อมูลได้ในขณะนี้ กรุณากลับมาที่นี่ในภายหลัง หากมีคำถามเพิ่มเติม โปรดติดต่อผู้ดูแลระบบ',
                showCancelButton: true, // แสดงปุ่มยกเลิก
                confirmButtonText: 'ลองเชื่อมต่ออีกครั้ง', // ข้อความปุ่ม
                cancelButtonText: 'ติดต่อผู้ดูแลระบบ', // ข้อความปุ่มยกเลิก
                confirmButtonColor: '#3085d6', // สีของปุ่มยืนยัน
                cancelButtonColor: '#d33', // สีของปุ่มยกเลิก
                showConfirmButton: false, // ซ่อนปุ่มยืนยันในระหว่างที่รอ
                showCancelButton: false, // ซ่อนปุ่มยกเลิกในระหว่างที่รอ
                didOpen: () => {
                    Swal.showLoading(); // แสดงโหลดไว้
                },
                customClass: {
                    popup: 'swal2-popup',
                    title: 'swal2-title',
                    content: 'swal2-content',
                    closeButton: 'swal2-close'
                }
            });

            // รอ 20 วินาทีแล้วแสดงปุ่ม
            setTimeout(() => {
                Swal.fire({
                    icon: 'warning',
                    title: 'เกิดข้อผิดพลาด',
                    text: 'ไม่สามารถเชื่อมต่อฐานข้อมูลได้ในขณะนี้ กรุณากลับมาที่นี่ในภายหลัง หากมีคำถามเพิ่มเติม โปรดติดต่อผู้ดูแลระบบ',
                    showCancelButton: true, // แสดงปุ่มยกเลิก
                    confirmButtonText: 'ลองเชื่อมต่ออีกครั้ง', // ข้อความปุ่ม
                    cancelButtonText: 'ติดต่อผู้ดูแลระบบ', // ข้อความปุ่มยกเลิก
                    confirmButtonColor: '#3085d6', // สีของปุ่มยืนยัน
                    cancelButtonColor: '#d33', // สีของปุ่มยกเลิก
                    customClass: {
                        popup: 'swal2-popup',
                        title: 'swal2-title',
                        content: 'swal2-content',
                        closeButton: 'swal2-close'
                    }
                }).then((result) => {
                    if (result.isConfirmed) {
                        // หากผู้ใช้คลิกปุ่ม "ลองเชื่อมต่ออีกครั้ง"
                        window.location.href = 'index.php'; // เปลี่ยนเส้นทางไปยังหน้าแรก
                    } else if (result.dismiss === Swal.DismissReason.cancel) {
                        // หากผู้ใช้คลิกปุ่ม "ติดต่อผู้ดูแลระบบ"
                        window.location.href = 'mailto:admin@example.com'; // เปลี่ยนเป็นอีเมลของผู้ดูแลระบบ
                    }
                });
            }, 20000); // 20,000 มิลลิวินาที = 20 วินาที
        });
    </script>
</body>
</html>
