<?php
namespace controllers;
use core\controllers\Main as BaseController;
class Main extends BaseController{
    public function __construct() {
        parent::__construct();
        $this->model = new Articles();
    }
    public function index(){
        $this->view->articles = $this->model->getAll();
        $this->view->render();
    }
}
