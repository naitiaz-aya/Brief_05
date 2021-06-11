<?php 

class FlightModel {

  private $db;

  public function __construct()
  {

    $this->db = new Database;

  }

  public function findAllFlights()
  {

    $this->db->query('SELECT * FROM flights');

    $results = $this->db->resultSet();

    return $results;

  }

  public function findFlyById($id) {

    $this->db->query('SELECT * FROM flights WHERE id_fly = :id_fly');

    $this->db->bind(':id_fly', $id);

    $row = $this->db->single();

    return $row;

  }
  public function save(){
    // die($this->id_fly);
        $this->db->query("INSERT INTO flights (dateDerpart, dateArrivee, lieuDepart,lieuArriver,prix ) VALUES (:dateDerpart,:dateArrivee ,:lieuDepart , :lieuArriver, :prix)");
        $this->db->bind(':dateDerpart',$this->dateDerpart);
        $this->db->bind(':dateArrivee',$this->dateArrivee);
        $this->db->bind(':lieuDepart',$this->lieuDepart);
        $this->db->bind(':lieuArriver',$this->lieuArriver);
        $this->db->bind(':prix',$this->prix);
        
         $results = $this->db->execute();
        //  die($results);
    
  }
  public function deleteFlight($id) {

        $this->db->query('DELETE FROM flights WHERE id_fly = :id_fly');

        $this->db->bind(':id_fly', $id);

        $results = $this->db->execute();
  }

 
}