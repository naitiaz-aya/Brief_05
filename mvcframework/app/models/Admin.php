<?php
    class Admin {

        private $db;
        public function __construct() {
            // parent::__construct();
            $this->db = new Database;

        }

        public function getAdmin(){

            $this->db->query("SELECT * FROM admin");
            $result = $this->db->resultSet();

            return $result;
        }

        public function login($username , $password ){
            
            $this->db->query(' SELECT * FROM admin WHERE username = :username');
            
            $this->db->bind(':username',$username);

            //   $results = $this->db->execute();

            $row = $this->db->single();
            
            $hashedPassword = $row->password;
            
            if ($password === $hashedPassword) {
                
                return $row;

            } else {

                return false;

            }

        }

    }
