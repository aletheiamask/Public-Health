<?php
class Login extends  Dbh {
    protected function getUser($password, $email) {
        $stmt = $this->connect()->prepare('SELECT passwords FROM users WHERE email = ?');

        if (!$stmt->execute(array($email))) {
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }

        if ($stmt->rowCount() == 0) {
            $stmt = null;
            header("location: ../index.php?error=notfound");
            exit();
        }

        $pwdHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $checkPwd = password_verify($password, $pwdHashed[0]["passwords"]);

        if ($checkPwd == false) {
            $stmt = null;
            header("location: ../index.php?error=wrongpassword");
            exit();
        }
        elseif ($checkPwd == true) {
            $stmt = $this->connect()->prepare('SELECT * FROM users WHERE email = ? AND passwords = ?');

            if (!$stmt->execute(array($email, $pwdHashed[0]["passwords"]))) {
                $stmt = null;
                header("location: ../index.php?error=stmtfailed");
                exit();
            }

            if ($stmt->rowCount() == 0) {
                $stmt = null;
                header("location: ../index.php?error=notfound");
                exit();
            }

            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

            session_start();
            $_SESSION["userid"] = $user[0]["id"];
            $_SESSION["useruid"] = $user[0]["users_uid"];
        }

        $stmt = null;
    }
}


//class Login extends  Dbh {
   // protected function getUser($password, $email) {
        //$stmt = $this->connect()->prepare('SELECT passwords FROM users 
       // WHERE email = ? OR username = ?; ');

       
       // if (!$stmt->execute(array($email,$password))) {
          //  $stmt = null;
           // header("location: ../index.php?error=stmtfailed");
           // exit();
       // }

        //if (!$stmt->rowCount() == 0) 
       // {
           // $stmt = null;
           // header("location: ../index.php?error=notfound");
           // exit();
       // }

       // $pwdHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
       // $checkPwd = password_verify($password,$pwdHashed[0]["passwords"]);
         
       // if ($checkPwd == false) 
        //{
           // $stmt = null;
           // header("location: ../index.php?error=worngpassword");
            //exit();
       // }
       // elseif ($checkPwd == true){
           // $stmt = $this->connect()->prepare('SELECT * FROM users 
           // WHERE id = ? OR email = ? AND passwords = ?; ');

           // if (!$stmt->execute(array($email,$password))) {
           // $stmt = null;
           // header("location: ../index.php?error=stmtfailed");
           // exit();
       // }

        //if (!$stmt->rowCount() == 0) 
       // {
           // $stmt = null;
           // header("location: ../index.php?error=notfound");
           // exit();
       // }

         //$user = $stmt->fetchAll(PDO::FETCH_ASSOC);

         //session_start();

         //$_SESSION["userid"] = $user[0]["id"];
        // $_SESSION["usersuid"] = $user[0]["users_uid"];

       // }

     //$stmt = null;
    //}

//} 

