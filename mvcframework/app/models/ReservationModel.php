<?php 

class ReservationModel {

  private $db;

  public function __construct()
  {

    $this->db = new Database();

  }

  public function findAllReservation()
  {

    // $this->db->query('SELECT * FROM reservation');
    $this->db->query('SELECT * FROM passenger');
    
    $results = $this->db->resultSet();

    return $results;

  }
  public function findReservationById()
  {

    $this->db->query('SELECT * FROM passenger ');

    $results = $this->db->resultSet();

    return $results;

  }

  public function save($data){

   // die($this->id_fly);
    $this->db->query("INSERT INTO reservation (id_fly, prenom, nom, nbr_place ) VALUES (:id,:prenom ,:nom , :nbr_place)");
    $this->db->bind(':id',$data['id_fly']);
    $this->db->bind(':prenom',$data['prenom']);
    $this->db->bind(':nom',$data['nom']);
    $this->db->bind(':nbr_place',$data['nbr_place']);
    

    if($this->db->execute()){
      $this->db->query("SELECT MAX(id_res) as id FROM reservation ");
      $this->db->execute();

      $id = $this->db->single();
      return $id;

    }


    //die($results);

  }

  public function deleteReservation($id) {

    $this->db->query('DELETE FROM reservation WHERE id_res = :id_res');

    $this->db->bind(':id_res', $id);

    $results = $this->db->execute(); 
  }
  
  
  
}

?>