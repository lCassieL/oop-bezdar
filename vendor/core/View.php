<?php
namespace core;

class View {
    public $page;
    public function render(){
        include_once 'vendor/views/templates/main.php';
    }
}
