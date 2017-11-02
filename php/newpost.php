<?php

    if ( !empty($_POST["tag"]) && !empty($_POST["title"]) && !empty($_POST["text"]) )
    {
        include "database.php";
        $database = new DATABASE;
        $data = $database->new_post( $_POST["tag"], $_POST["title"], $_POST["text"] );
    }
    header("location: /");

?>