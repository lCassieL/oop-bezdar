<?php
namespace core\controllers;
use core\View;
class Main {
    public $view;
    public $model;
    public function __construct() {
        $this->view = new View();
    }
    
}
