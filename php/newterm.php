<?php

    include "database.php";
    $database = new DATABASE;
    $data = $database->new_term( $_POST["title"], $_POST["text"] );
    header("location: /");

?>