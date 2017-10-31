<?php

    if ( !empty($_POST["title"]) && !empty($_POST["text"]) )
    {
        include "database.php";
        $database = new DATABASE;
        $data = $database->new_term( $_POST["title"], $_POST["text"] );
    }
    header("location: /");

?>