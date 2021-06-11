<?php


  class Flights extends Controller{


    public function __construct()
    {
      if(!$_SESSION['logged']) {
        header('Location: /brief05/mvcframework/Users/loginPage');

    }
    }
    
      public function create(){
        // echo $id ;

        $this->view('create_flights');

      }


      public function store($request){

        //print_r ($request);
        $fly = $this->model('FlightModel');
        $fly->dateDerpart= $request['dateDerpart'];
        $fly->dateArrivee= $request['dateArrivee'];
        $fly->lieuDepart= $request['lieuDepart'];
        $fly->lieuArriver= $request['lieuArriver'];
        $fly->prix= $request['prix'];
        $fly->save();
        print_r ($fly);

        header("Location:" .URLROOT."/dashboard/index");


      }


      public function delete($id) {

        $fly = $this->model('FlightModel');
        $fly->deleteFlight($id['submit']);
        header("Location:" .URLROOT."/dashboard/index");
        
      }



  }

?>