<?php
class Admins extends Controller{


  public function __construct(){

    
    // $this->userModel=$this->model('Admin');


  }

  public function loginPage(){
    $this->View('login');
 
}
  public function login(){
    
     $admin = $this->model('Admin')->login($_POST['username'],$_POST['password']);
     
     if($admin){

      $flights = $this->model('FlightModel')->findAllFlights();
      $data = [
            'title' => 'Admin page',
            'flights' => $flights
        ];


        $_SESSION['admin_id'] = $admin->admin_id;
        $_SESSION['logged'] = true;  

        

        header('Location: /brief05/mvcframework/dashboard/index');
      // $this->View('',$data);

     }else{
       

      

     $this->View('login');
     }

     
  }
  public function logout(){
    session_destroy();

      header('Location:/brief05/mvcframework/Admins/loginPage');
  }
  
} 