<?php

class APP
{
    public function login( $hash )
    {
        if ( $hash == "6c64e411823e09ae7e1b0a79bda18a7e82b183bff0f763f8badad600d4ede554" )
        {
            setcookie( "session", "45358c9f9a8737442795e6544bd7748952d011da3d821b7126446952f31c6b7a", time()+3600, "/" );
        }
    }
    
    public function logout()
    {
        setcookie("session","admin",time()-1,"/");
    }
    
    public function check_admin()
    {
        if ( $_COOKIE['session'] == "45358c9f9a8737442795e6544bd7748952d011da3d821b7126446952f31c6b7a" )
        {
            global $admin;
            $admin = true;
        }
    }
    
    public function create_post( $tag, $title, $body )
    {
        include "database.class.php";
        $database = new Database();
        $database->create_post( $tag, $title, $body );
    }
    
    public function load_all_posts()
    {
        include "database.class.php";
        $database = new Database();
        return $database->load_all_posts();
    }
    
    public function delete_post( $id )
    {
        include "database.class.php";
        $database = new Database();
        $database->delete_post( $id );
    }
}

?>