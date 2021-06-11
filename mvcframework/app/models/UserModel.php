
<?php 


    class UserModel {

        private $db;

        public function __construct(){

          $this-> db= new Database;

        }
        
        public function getUser($id){

            $this->db->query("SELECT * FROM users WHERE id_vist=:id");
            $this->db->bind(':id',$id);
            $result = $this->db->single();

            return $result;
        }

        
         
        
        public function login($email,$password){
       
          $this->db->query("SELECT * FROM users WHERE email= :email ");

          $this->db->bind(':email',$email);

          $row=$this->db->single();

          $hashedPassword = $row->password;
            
            if ($password === $hashedPassword) {
                
                return $row;

            } else {

                return false;

            }

      }

    
    }
    
    
?>