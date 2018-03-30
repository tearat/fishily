<?php

//Загрузка класса приложения
require_once 'app.class.php';
$app = new App();

$action = $_GET["action"];

if ( $action == "login" )
{
    $hash = hash('sha256', $_POST['pass']);
    $app->login( $hash );
    header("location: /");
}

if ( $action == "logout" )
{
    $app->logout( $hash );
    header("location: /");
}

if ( $action == "create" )
{
    if ( !empty($_POST["tag"]) && !empty($_POST["title"]) && !empty($_POST["body"]) && $_COOKIE['session'] == "45358c9f9a8737442795e6544bd7748952d011da3d821b7126446952f31c6b7a" )
    {
        $app->create_post( $_POST["tag"], $_POST["title"], $_POST["body"] );
    }
    header("location: /");
}

if ( $action == "load_all_posts" )
{
    $data = $app->load_all_posts();
    echo json_encode($data);
}

if ( $action == "delete" )
{
    if( $_COOKIE['session'] == "45358c9f9a8737442795e6544bd7748952d011da3d821b7126446952f31c6b7a" )
    {
        $app->delete_post( $_POST["id"] );
    }
    header("location: /");
}

?>