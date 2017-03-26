<?php

require_once(ROOT.'config/dbconnect.php');

class updateCtrl {

    public function __construct(){

    }

    public function update(){
        global $con;

        $str = implode(", ",$_GET['quantity']);

        $query = "UPDATE  `u539267858_anma`.`entity` SET `first_name`='$_GET[first_name]',`last_name`='$_GET[last_name]',`birthdate`='$_GET[birthdate]',"
                ."`description`='$_GET[description]',`marital_status`='$_GET[marital_status]',`language`='$_GET[language]',`quantity`='$str'"
                ."WHERE `entity`.`id`='$_GET[id]';";

        $answer = mysqli_query($con,$query);
        echo $answer;
    }

}


?>