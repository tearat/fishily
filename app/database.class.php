<?php
class DATABASE
{
    private $mysql;
    private $sql;
    private $host = 'localhost';
    private $user = 'root';
    private $password = '';
    private $db_name = 'fishily';
    
    function __construct()
    {
        $this->mysql = mysqli_connect($this->host, $this->user, $this->password, $this->db_name) or die('Database connection error');
        mysqli_set_charset($this->mysql, 'utf8');
    }
    
    public function load_all_posts()
    {
        $sql = "SELECT * FROM `posts`";
        $result = mysqli_query($this->mysql, $sql);
        while ($row = mysqli_fetch_assoc($result))
        {
            $data[] = $row;
        }
        return $data;
    }
    
    public function load_by_tag($tag)
    {
        $sql = "SELECT * FROM `posts` WHERE `tag` = '$tag'";
        $result = mysqli_query($this->mysql, $sql);
        while ($row = mysqli_fetch_assoc($result))
        {
            $data[] = $row;
        }
        return $data;
    }
    
    public function load_post( $id )
    {
        $sql = "SELECT * FROM `posts` WHERE id = '$id'";
        $result = mysqli_query($this->mysql, $sql);
        $data = mysqli_fetch_assoc($result);
        return $data;
    }
    
    public function create_post( $tag, $title, $body )
    {
        $date = date("d.m.Y");
        $sql = "INSERT INTO `posts` (`tag`, `title`, `body`, `date`) VALUES ('$tag', '$title', '$body', '$date')";
        $result = mysqli_query($this->mysql, $sql);
    }
    
    public function update_post( $id, $tag, $title, $body )
    {
        $sql = "UPDATE `posts` SET tag = '$tag', title = '$title', body = '$body' WHERE `id`='$id'";
        $result = mysqli_query($this->mysql, $sql);
    }
    
    public function delete_post( $id )
    {
        $sql = "DELETE FROM `posts` WHERE `id` = '$id';";
        $result = mysqli_query($this->mysql, $sql);
    }
}
?>