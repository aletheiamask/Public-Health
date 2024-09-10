<!--ตัวควบคุมการเข้าสู่ระบบ-->

<?php



class LoginContr extends Login{

    private $email;
    private $password;
    
    //ตัวแปลคุณสมบัติไม่เกี่ยวข้องกับตัวด้านบน
    public function __construct( $email, $password) {
        
        $this->email = $email;
        $this->password = $password;
        
    }

    public function LoginUser() {
        if($this->emptyInput() == false) {
            header("location: ../index.php?error=emptyinput");
            exit();
        }

        $this->getUser($this->password,$this->email);
    }
    //ตรวจสอบว่าฟอร์มที่ส่งมมาเป็นค่าว่างหรือไม่
    private function emptyInput() {
        $result = false;
        if(!empty($this->email) || !empty($this->password)) {
            $result = true;
        }
        return $result;
    }

    
}