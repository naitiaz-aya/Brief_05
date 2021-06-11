<?php


  class Passengers extends Controller{


    public function __construct()
    {
      if(!$_SESSION['logged']) {
        header('Location: /brief05/mvcframework/Users/loginPage');

    }
    }
    public function create($id){
      // echo $id ;
      $passenger = $this->model('PassengerModel')->getPassenger();
      $data = [
        'id' => $id,
        "passenger"=>$passenger
      ];
      $this->view('create_reservation', $data);

    
    }
     
    
   
    public function delete($id) {

      $passenger = $this->model('PassengerModel');
      $passenger->deletePassenger($id['submit']);
      header("Location:" .URLROOT."/reservation/reservation");
      
    }



  }

?>