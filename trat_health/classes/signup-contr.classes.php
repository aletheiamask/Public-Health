<!--ตัวควบคุมการลงทะเบียน-->

<?php



class SignupContr extends Signup{
    private $firstName;
    private $lastName;
    private $username;
    private $birthday;
    private $phone;
    private $email;
    private $password;
    private $confirmPassword;
    
    //ตัวแปลคุณสมบัติไม่เกี่ยวข้องกับตัวด้านบน
    public function __construct($firstName, $lastName, $username, $birthday, $phone, $email, $password, $confirmPassword) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->username = $username;
        $this->birthday = $birthday;
        $this->phone = $phone;
        $this->email = $email;
        $this->password = $password;
        $this->confirmPassword = $confirmPassword;
        
    }

    //ตรวจสอบฟังชั่นว่าใช้ได้ไหม
    public function signupUser() {
        if($this->emptyInput() == false) {
            header("location: ../index.php?error=emptyinput");
            exit();
        }
        if($this->invalidEmail() == false) {
            header("location: ../index.php?error=email");
            exit();
        }
        if($this->pwdMatch() == false) {
            header("location: ../index.php?error=passwordmatch");
            exit();
        }
        if($this->uidTakenCheck() == false) {
            header("location: ../index.php?error=useroremailtaken");
            exit();
        }
        $this->setUser($this->firstName,$this->lastName,$this->username,$this->birthday,$this->phone,$this->email,$this->password);
   
}

    //ตรวจสอบว่าฟอร์มที่ส่งมมาเป็นค่าว่างหรือไม่
    private function emptyInput() {
        $result = false;
        if(!empty($this->firstName) || !empty($this->lastName) || !empty($this->username) || !empty($this->birthday) || !empty($this->phone) || !empty($this->email) || !empty($this->password) || !empty($this->confirmPassword)) {
            $result = true;
        }
        return $result;
    }

     //ตรวจสอบว่าอีเมลถูกต้องหรือไม่
     private function invalidEmail() {
        $result = false;
        if(filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $result = true;
        }
        return $result;
    }
      //ตรวจสอบว่ารหัสผ่านทั้งสองเหมือนกันหรือไม่
      private function pwdMatch() {
        $result = false;
        if($this->password == $this->confirmPassword) {
            $result = true;
        }
        return $result;
    }
    
    private function uidTakenCheck() {
        $result = false;
        if($this->checkUser($this->username,$this->email)) {
            $result = true;
        }
        return $result;
    }

}