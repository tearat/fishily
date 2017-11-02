<?php

    if( $_COOKIE['session'] == "45358c9f9a8737442795e6544bd7748952d011da3d821b7126446952f31c6b7a" )
    {
        include "database.php";
        $database = new DATABASE;
        $data = $database->del_post( $_GET["post"] );
    }
    header("location: /");

?>