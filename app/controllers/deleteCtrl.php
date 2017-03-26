<?php

require_once(ROOT.'config/dbconnect.php');

class deleteCtrl {

    public function __construct(){

    }

    public function delete(){
        global $con;
        $query = "DELETE FROM `u539267858_anma`.`entity` WHERE `entity`.`id` = '$_GET[id]'";
        $answer = mysqli_query($con,$query);
        echo $answer;
    }


}



?>