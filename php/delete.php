<?php

    include "database.php";
    $database = new DATABASE;
    $data = $database->del_term( $_GET["term"] );
    header("location: /");

?>