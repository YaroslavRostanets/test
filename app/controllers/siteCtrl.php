<?php

require_once (ROOT.'config/var.php'); //Константы
require_once(ROOT.'config/dbconnect.php');

class siteCtrl {

    public function __construct(){

    }

    public function index(){
        global $con;
        $query = "SELECT * FROM entity;";
        $answer = mysqli_query($con,$query);

        while($row = mysqli_fetch_array($answer,MYSQLI_ASSOC)){
            $resultArr[] = $row;
        }

        require_once (ROOT.'templates/list.php');  //Шаблон

    }
}



?>