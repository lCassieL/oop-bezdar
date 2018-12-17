<?php
namespace controllers;
use core\controllers\Main;
use models\Users;
use core\View;

class Login extends Main {
    public function __construct(){
        $this->model = new Users();
    }
    public function index(){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $login = filter_input(INPUT_POST, 'login');
            $password = filter_input(INPUT_POST, 'pass');
            $users = $this->model->getUsers();
            foreach($users as $user){
                if($user['login'] === $login && $user['password'] === $password){
                    $_SESSION['login'] = $user['login'];
                    header('Location: '.$_SERVER["HTTP_ORIGIN"].'/main/index');
                    break;
                }else{
                    header('Location: ' . $_SERVER['REQUEST_URI']);
                }
            }

        }else{
            $this->view = new View();
            $this->view->page = 'login_form';
            $this->view->render();
        }
    }
}