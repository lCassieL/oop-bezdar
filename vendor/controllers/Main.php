<?php
namespace controllers;
use core\controllers\Main as BaseController;
use models\Articles;
class Main extends BaseController{
    public function __construct() {
        parent::__construct();
        $this->model = new Articles();
    }
    public function index(){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            session_destroy();
            header('Location: ' . $_SERVER['REQUEST_URI']);
        }
        if($_SESSION['login'] !== null){
            $this->view->page = 'index';
            $this->view->articles = $this->model->getAll();
            $this->view->render();    
        }else{
            header('Location: '.$_SERVER["HTTP_ORIGIN"].'/login/index');
        }
    }
}
