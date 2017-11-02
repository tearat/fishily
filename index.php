<?php

    if ( $_GET["page"] == "new" )
    {
        if ( !empty($_COOKIE['session']) )
        {
            include "./pages/_head.html";
            include "./pages/new.html";
        }
        else { 
            header("location: /"); 
        }
    }
    else if ( $_GET["page"] == "term" )
    {
        include "./php/database.php";
        $database = new DATABASE;
        $data = $database->load_term($_GET["id"]);
        include "./pages/_head.html";
        include "./pages/post.html";
    }
    else if ( $_GET["page"] == "bytag" )
    {
        include "./php/database.php";
        $database = new DATABASE;
        $data = $database->load_by_tag($_GET['tag']);
        include "./pages/_head.html";
        include "./pages/index.html";
    }
    else
    {
        include "./php/database.php";
        $database = new DATABASE;
        $data = $database->load_all();
        include "./pages/_head.html";
        include "./pages/index.html";
    }

?>