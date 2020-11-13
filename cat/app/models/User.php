<?php

  class User {
    private $db;

    public function __construct(){
      $this->db = new Database;
    }

    // Add User / Register
    public function register($data){
      // Prepare Query
      $this->db->query('INSERT INTO users (name, email,password) 
      VALUES (:name, :email, :password)');

      // Bind Values
      $this->db->bind(':name', $data['name']);
      $this->db->bind(':email', $data['email']);
      $this->db->bind(':password', $data['password']);
      
      //Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }

    // Find USer BY Email
    public function findUserByEmail($email){
      $this->db->query("SELECT * FROM users WHERE email = :email");
      $this->db->bind(':email', $email);

      $row = $this->db->single();

      //Check Rows
      if($this->db->rowCount() > 0){
        return true;
      } else {
        return false;
      }
    }

    // Login / Authenticate User
    public function login($email, $password){
      $this->db->query("SELECT * FROM users WHERE email = :email");
      $this->db->bind(':email', $email);

      $row = $this->db->single();
      
      $hashed_password = $row->password;
      if(password_verify($password, $hashed_password)){
        return $row;
      } else {
        return false;
      }
    }

    // Find User By ID
    public function getUserById($id){
      $this->db->query("SELECT * FROM users WHERE id = :id");
      $this->db->bind(':id', $id);

      $row = $this->db->single();

      return $row;
    }
    public function findUserRequest($email){
      $this->db->query("SELECT * FROM users WHERE email = :email");
      $this->db->bind(':email', $email);

      $row = $this->db->single();

      //Check Rows
      if($this->db->rowCount() > 0){
        return true;
      } else {
        return false;
      }
    }
    
    // Add User / Register
    public function request($data){
      // Prepare Query
     // $code = uniqid(true);
      $this->db->query('INSERT INTO pwd_Resset (email)
      VALUES (:email)');

      // Bind Values
      $this->db->bind(':email', $data['email']);
     // $this->db->bind(':code', $code);
     
      //Execute
      if($this->db->execute()){
        return true;
        
      } else {
        return false;
      }
    }
    public function findUserResset($email){
      $this->db->query("SELECT * FROM pwd_Resset WHERE email = :email");
      $this->db->bind(':email', $email);

      $row = $this->db->single();

      //Check Rows
      if($this->db->rowCount() > 0){
        return true;
      } else {
        return false;
      }
    }

    // Add User / Register
    public function ressetpass($data){
      // Prepare Query
    
     // $code = uniqid(true);
      $this->db->query('UPDATE users SET password= :password WHERE email= :email');


      // Bind Values
      $this->db->bind(':email', $data['email']);
      $this->db->bind(':password', $data['password']);
      
      //Execute
      if($this->db->execute()){
        return true;
        
      } else {
        return false;
      }
  }
}