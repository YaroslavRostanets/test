<?php

require_once(ROOT.'config/dbconnect.php');
require_once (ROOT.'templates/list.php');  //Шаблон

class createCtrl {

    public function __construct(){

    }

    public function create(){
        global $con;

        echo 'create';



    }
}



?>