<?php

class APP
{
    public function load_all_posts()
    {
        include "database.class.php";
        $database = new Database();
        return $database->load_all_posts();
    }
    
    public function create_post( $tag, $title, $body )
    {
        include "database.class.php";
        $database = new Database();
        $database->create_post( $tag, $title, $body );
    }
    
    public function update_post( $id, $tag, $title, $body )
    {
        include "database.class.php";
        $database = new Database();
        $database->update_post( $id, $tag, $title, $body );
    }
    
    public function delete_post( $id )
    {
        include "database.class.php";
        $database = new Database();
        $database->delete_post( $id );
    }
}

?>