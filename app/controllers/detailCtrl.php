<?php
require_once (ROOT.'config/var.php');
require_once(ROOT.'config/dbconnect.php');


class detailCtrl {

    public function __construct(){

    }

    public function detail(){
        global $con;
        $det_num = explode("/",$_SERVER[REDIRECT_URL]);
        $det_num = end( $det_num );

        $query = "SELECT * FROM  `entity` WHERE id='$det_num';";

        echo $query;

        $answer = mysqli_query($con,$query);


        $resultArr = mysqli_fetch_array($answer,MYSQLI_ASSOC);


        echo '<pre>';
        print_r($resultArr);
        echo '</pre>';

        echo '<pre>';

        echo '</pre>';

        require_once (ROOT.'templates/detail.php');  //Шаблон




    }

}


?>