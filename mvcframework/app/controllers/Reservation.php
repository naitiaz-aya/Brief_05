<?php


class Reservation extends Controller {

    // public function __construct()
    // {
    //    $this->reservationModel = $this->model('Reservation');
    // }

    public function __construct()
    {
      if(!$_SESSION['logged']) {
        header('Location: /brief05/mvcframework/Users/loginPage');

    }
    }

    public function reservation() {
      //  echo 'here';
      $flights = $this->model('FlightModel')->findAllFlights();
      // var_dump($flights);
      $data = [
          'title' => 'Resesrvation page',
          'flights' => $flights
      ];

      $this->view('reservation',$data);
    }
    public function resrv() {
      //  echo 'here';
      $resrv = $this->model('ReservationModel')->findAllReservation();
      // var_dump($resrv);
      $data = [
          'title' => 'Resesrvation page',
          'resrv' => $resrv
      ];
      // print_r($data['resrv']);

      $this->view('reservation_suivi',$data);
    }

    public function suivi(){
        // echo'here';
        $suivi = $this->model('ReservationModel')->findReservationById();

        $data = [
          'title' => 'Your reservation',
          'suivi' => $suivi
        ];
        //  print_r($data['suivi']);

        $this->view('suivi',$data);

    }

    public function create($id){
      // echo $id ;
      $user = $this->model('UserModel')->getUser($_SESSION['user_id']);
      $data = [
        'id' => $id,
        "user"=>$user
      ];
      $this->view('create_reservation', $data);

    
    }


    public function store($request){



      $reservation = $this->model('ReservationModel');
      $passengerModel = $this->model('PassengerModel');

      $data = [
        "id_fly" => $_POST['id_fly'],
        "prenom" => $_POST['cinUser'],
        "nom" => $_POST['NomUser'],
        "nbr_place" => $_POST['nbr_place']
      ];

      $id_res = $reservation->save($data);

     
      for ($i=0; $i < $_POST['nbr_place']; $i++) { 
        
        $passenger = [
          "id_res" => $id_res->id,
          "nom" => $_POST['nom'][$i],
          "cin" => $_POST['cin'][$i],
          "birthday" => $_POST['birthday'][$i]
        ];

        $passengerModel->save($passenger);
        
      }
      // echo'here';
      $suivi = $this->model('ReservationModel')->findReservationById();

      $data = [
      'title' => 'Your reservation',
      'suivi' => $suivi
      ];
      //  print_r($data['suivi']);

      $this->view('suivi',$data);

    }

    public function delete($id) {

      $reservation = $this->model('ReservationModel');
      $reservation->deleteReservation($id['submit']);
      header("Location:" .URLROOT."/reservation/reservation");
      
    }



}

?>