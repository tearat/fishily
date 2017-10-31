<?php

    if ( $_GET["page"] == "term" )
    {
        include "./php/database.php";
        $database = new DATABASE;
        $data = $database->load_term($_GET["term"]);
        include "./pages/_head.html";
        include "./pages/term.html";
    }
    else
    {
        include "./php/database.php";
        $database = new DATABASE;
        $data = $database->load_all();
        include "./pages/_head.html";
        include "./pages/glossary.html";
    }

?>