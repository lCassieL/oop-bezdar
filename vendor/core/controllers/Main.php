<?php
namespace core\controllers;

class Main {
    public $view;
    public $model;
    public function __construct() {
        $this->view = new View();
    }
    
}
