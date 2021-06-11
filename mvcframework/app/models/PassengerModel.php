
<?php 


class PassengerModel {

    private $db;

    public function __construct(){

      $this-> db= new Database;

    }
    
    public function getPassenger(){

        $this->db->query("SELECT * FROM passenger");
       
        $results = $this->db->resultSet();

        return $results;
    }

    public function save($passenger){

      // die($this->id_fly);
       $this->db->query("INSERT INTO passenger (nom, cin, birthday, id_res ) VALUES (:nom, :cin, :birthday ,:id_res)");
       $this->db->bind(':id_res', $passenger['id_res']);
       $this->db->bind(':nom', $passenger['nom']);
       $this->db->bind(':cin', $passenger['cin']);
       $this->db->bind(':birthday', $passenger['birthday']);
      // print_r($this->id_pass);

       // $_SESSION["user_ id"]
   
       $results = $this->db->execute();
       //die($results);
   
     }

     public function deletePassenger($id) {

      $this->db->query('DELETE FROM passenger WHERE id_pass = :id_pass');

      $this->db->bind(':id_pass', $id);
      // die(print_r($id));
      $results = $this->db->execute();
     
    }
     
    
    

  


}


?>