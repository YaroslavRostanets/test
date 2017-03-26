<?php

require_once(ROOT.'config/dbconnect.php');

class createCtrl {

    public function __construct(){

    }

    public function create(){
        global $con;

        $str = implode(", ",$_GET['quantity']);

        $query = "INSERT INTO `u539267858_anma`.`entity` (`id`,`first_name`,`last_name`,`birthdate`,`description`,`marital_status`,`language`,`quantity`)".
            " VALUES (NULL,'$_GET[first_name]','$_GET[last_name]','$_GET[birthdate]','$_GET[description]','$_GET[marital_status]','$_GET[lang]',".
            "'$str');";

        $answer = mysqli_query($con,$query);

        echo $answer;
    }


}



?>