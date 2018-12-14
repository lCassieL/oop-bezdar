<?php
namespace models;
use core\models\Main;
class Articles extends Main {
    public function getAll(){
        return array(
            array(
                'title'=>'first',
                'text'=>'many text',
                'date'=>'13.11.18',
            ),
            array(
                'title'=>'second',
                'text'=>'many text',
                'date'=>'13.11.18',
            ),
            array(
                'title'=>'third',
                'text'=>'many text',
                'date'=>'13.11.18',
            ),
            array(
                'title'=>'fours',
                'text'=>'many text',
                'date'=>'13.11.18',
            ),
        );
    }
}
