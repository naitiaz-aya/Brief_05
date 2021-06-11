<?php 

class Users extends Controller{


  public function __construct(){


    // $this->userModel=$this->model('User');


  }


 
  public function loginPage(){
      $this->View('loginuser');
   
  }
  public function login(){
    
    $user = $this->model('UserModel')->login($_POST['email'],$_POST['password']);
    
    if($user){

    
      $data=[
  
        'title'=>'login Page' ,
        // 'user' => $user

      ];

      $_SESSION['user_id'] = $user->id_vist;
      $_SESSION['logged'] = true;


      header('Location: /brief05/mvcframework/index');

    }else{
      


      $this->View('loginuser');
    }
 }

 public function logout(){

    session_destroy();

    header('Location:/brief05/mvcframework/Users/loginPage');
 }

  
}