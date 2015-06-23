<?php

Class Login_Database extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

// Insert registration data in database
    public function registration_insert($data) {

// Query to check whether username already exist or not

        $u_name = $data['user_name'];
        $u_password = $data['user_password'];
        $u_email = $data['user_email'];

        $sql = "SELECT * FROM users WHERE user_name = ? ";
        $stmt = $this->db->conn_id->prepare($sql);
        $stmt->bindParam(1, $u_name);
        $stmt->execute();



        if ($stmt->rowCount() == 0) {

            if($this->insert($data)){
                return true;
            }else{
                return false;
            }
            
            
            
        } else {
            return false;
        }

    }

    public function insert($data) {
        
       

        $u_name = $data['user_name'];
        $u_password = $data['user_password'];
        $u_email = $data['user_email'];

        $sql1 = "INSERT INTO `users` (`user_name` , user_password  ,`user_email` ) VALUES (?,?,?);";
        $stmt1 = $this->db->conn_id->prepare($sql1);
        $stmt1->bindParam(1, $u_name);
        $stmt1->bindParam(2, $u_password);
        $stmt1->bindParam(3, $u_email);
        
        if ($stmt1->execute()) {
            return true;
        } else {
            return false;
        }
    }
     public function add_data($data) {
        
       
        $u_firstname=$data['first_name'];
        $u_lastname=$data['last_name'];
        $u_name = $data['user_name'];
        $u_phnno=$data['user_phoneno'];
        $u_bday=$data['user_birthday'];
       // $u_password = $data['user_password'];
        $u_email = $data['user_email'];
        

        $sqladd = "INSERT INTO `users`  (`user_name`,`user_email`,first_name,last_name,user_phoneno,user_birthday ) VALUES (?,?,?,?,?,?) WHERE user_name = ? ";
        $stmtadd = $this->db->conn_id->prepare($sqladd);
        $stmtadd->bindParam(1, $u_name);
       // $stmtadd->bindParam(2, $u_password);
        $stmtadd->bindParam(2, $u_email);
        
        $stmtadd->bindParam(3, $u_firstname);
        $stmtadd->bindParam(4, $u_lastname);
        $stmtadd->bindParam(5, $u_phnno);
        $stmtadd->bindParam(6, $u_bday);
        $stmtadd->bindParam(7, $u_name);
        
       if ($stmtadd->execute()) {
            return true;
        } else {
            return false;
        }
    }

// Read data using username and password
    public function login($data) {

        $u_name = $data['username'];
        $u_password = $data['password'];

        $sql3 = "SELECT * FROM users where user_name = ? AND user_password = ?";

        $stmt3 = $this->db->conn_id->prepare($sql3);
        $stmt3->bindParam(1, $u_name);
        $stmt3->bindParam(2, $u_password);
        $stmt3->execute();



        if ($stmt3->rowCount() == 1) {
            return $stmt3->fetchAll();
        } else {
            return false;
        }
    }

// Read data from database to show data in admin page
    public function read_user_information($data) {
        
        //var_dump($data);
        //die();
        
      $u_name = $data['username'];  
        
        $sql2 = "SELECT * FROM users where user_name = ? ";

        $stmt2 = $this->db->conn_id->prepare($sql2);
        $stmt2->bindParam(1, $u_name);
        if ($stmt2->execute()) {
           // return $stmt2->fetch(PDO::FETCH_ASSOC);
            return $stmt2->fetchAll();
        } else {
            return false;
        }
    }
    
    
  // checkemail
   
  public function check_email($data) {
      
        $u_email = $data['user_email'];
      $sql4 = "SELECT * FROM users where user_email = ? ";

        $stmt4 = $this->db->conn_id->prepare($sql4);
        $stmt4->bindParam(1, $u_email);
        $stmt4->execute();
        if ($stmt4->rowCount() == 1) {
            return true;
        } else {
            return false;
        }
      
  }

}

?>