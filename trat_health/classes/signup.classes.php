<?php
class Signup extends  Dbh {
    protected function setUser($firstName, $lastName, $username, $birthday, $phone, $email, $password) {
        $stmt = $this->connect()->prepare('INSERT INTO users (firstName, lastName, username, birthday, phone, email, passwords) VALUES (?, ?, ?,?, ?, ?,?)');

        // Check if the prepared statement is successful
        if (!$stmt) {
            header("location: ../index.php?error=stmtfailed");
            exit();
        }

        // Check if password hashing is successful
        $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
        if (!$hashedPwd) {
            header("location: ../index.php?error=hashingfailed");
            exit();
        }

        // Execute the prepared statement
        if (!$stmt->execute([$firstName, $lastName, $username, $birthday, $phone, $email, $hashedPwd])) {
            header("location: ../index.php?error=stmtfailed");
            exit();
        }
        // Close the statement
        $stmt = null;
    }

    protected function checkUser($username, $email) {
        $stmt = $this->connect()->prepare('SELECT * FROM users WHERE username = ? OR email = ?');

        // Check if the prepared statement is successful
        if (!$stmt) {
            header("location: ../index.php?error=stmtfailed");
            exit();
        }

        // Execute the prepared statement
        if (!$stmt->execute([$username, $email])) {
            header("location: ../index.php?error=stmtfailed");
            exit();
        }

        // Get the number of rows returned
        $rowCount = $stmt->rowCount();

        // Close the statement
        $stmt = null;

        // Check if there are any rows returned
        return $rowCount > 0 ? false : true;
    }
}
