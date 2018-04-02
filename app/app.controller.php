<?php

require_once 'app.class.php';
$app = new App();

$action = $_GET["action"];



if ( $action == "load_all_posts" )
{
    $data = $app->load_all_posts();
    echo json_encode($data);
}

if ( $action == "create" )
{
    if ( !empty($_POST["tag"]) && !empty($_POST["title"]) && !empty($_POST["body"]) )
    {
        $app->create_post( $_POST["tag"], $_POST["title"], $_POST["body"] );
    }
    header("location: /");
}

if ( $action == "update" )
{
    if ( !empty($_POST["tag"]) && !empty($_POST["title"]) && !empty($_POST["body"]) )
    {
        $app->update_post( $_POST["id"], $_POST["tag"], $_POST["title"], $_POST["body"] );
    }
    header("location: /");
}

if ( $action == "delete" )
{
    $app->delete_post( $_POST["id"] );
    header("location: /");
}

?>