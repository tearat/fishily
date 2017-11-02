<?php

    $hash = hash('sha256', $_POST['pass']);
    if ( $hash == "6c64e411823e09ae7e1b0a79bda18a7e82b183bff0f763f8badad600d4ede554" )
    {
        setcookie("session","admin",time()+3600,"/");
    }
    header("location: /");
?>