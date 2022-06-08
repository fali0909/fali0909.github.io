<?php

class Connect{
    public $host = "localhost";
    public $user = "u-210029006";
    public $password = "mLLkh3hzu81BYyM";
    public $db_name = "u_210029006_db";
    public $conn;

    public function __construct() {
        $this->conn = mysqli_connect($this->host, $this->user, $this-password, $this->db_name);
    }
}

class Register extends Connection{
    public function registration($name, $email, $password, $confirmpassword) {
        $duplicate = mysqli_query($this->conn, "SELECT * FROM cvs WHERE name = '$name'");
        if (mysqli_num_rows($duplicate) > 0) {
            return 10;
            // Username taken
        } else {
            if ($password == $confirmpassword) {
                $query = "INSERT INTO cvs VALUES('', '$name', '$email', '$password', '$keyprogramming', '$profile', '$education', '$URLlinks')";
                mysqli_query($this->conn, $query);
                return 1;
                // Register successful
            } else {
                return 100;
                // Password not match
            }
        }
    }
}

class astoncv extends Connection {
    public function login($usernameemail, $password) {
        $result = mysqli_query($this->conn, "SELECT * FROM cvs WHERE name = '$usernameemail'");
        $row = mysqli_fetch_assoc($result);

        if (mysqli_num_rows($result) > 0) {
            if ($password == $row["password"]) {
               // $this->id = $row["id"];
                return 1; // Login successful
            } else {
                return 10;
                // Wrong password
            }
        } else {
            return 100; // User not registered
        }
    }

   // public function idUser() {
     //   return $this->id;
   // }
}

class Select extends Connection{
    public function selectUserById($id){
      $result = mysqli_query($this->conn, "SELECT * FROM cvs WHERE id = $id");
      return mysqli_fetch_assoc($result);
    }
  }

?>