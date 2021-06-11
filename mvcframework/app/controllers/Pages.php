<?php
class Pages extends Controller {

    public function __construct() {

        // $this->userModel = $this->model('User');
        // if(isset($_SESSION["logged"]) && $_SESSION["logged"] == 1){
        //     header('Location: /brief05/mvcframework/Users/loginPage');
        // }
        print_r($_SESSION['logged']);
        if(!$_SESSION['logged']) {
            header('Location: /brief05/mvcframework/Users/loginPage');

        }

    }

    public function index() {
        
        //  $users = $this->userModel->getUsers();
         $data = [
             'title' => 'Home page',
            //  'users' => $users 
         ];

       $this->view('index',$data);
       
    }
    
}
