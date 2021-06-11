<?php
class Dashboard extends Controller {

    public function __construct() {

        $this->userModel = $this->model('Admin');
        if(!$_SESSION['admin_id']) {
            header('Location: /brief05/mvcframework/Admins/loginPage');
        }

    }

    public function index() {
      $users = $this->userModel->getAdmin();
      $flights = $this->model('FlightModel')->findAllFlights();
      $data = [
            'title' => 'Admin page',
            'users' => $users,
            'flights' => $flights
        ];

        $this->View('dashboard', $data);
    }
    public function table() {
      $users = $this->userModel->getAdmin();
      $resrv = $this->model('ReservationModel')->findAllReservation();
      $data = [
            'title' => 'Admin page',
            'users' => $users,
            'resrv' => $resrv
        ];

        $this->View('dashboard', $data);
    }
    
}