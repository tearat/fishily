<?php

    $hash = hash('sha256', $_POST['pass']);
    if ( $hash == "6c64e411823e09ae7e1b0a79bda18a7e82b183bff0f763f8badad600d4ede554" )
    {
//        die('logged');
        setcookie("session","45358c9f9a8737442795e6544bd7748952d011da3d821b7126446952f31c6b7a",time()+3600,"/");
    }
    header("location: /");
?>