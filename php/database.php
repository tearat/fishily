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
    
    static function getInstance()
    {
        if (self::$_instance === null)
        {
            self::$_instance = new self();
        }
        return self::$_instance;
    }
    
    public function load_all()
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
    
    public function load_term($id)
    {
        $sql = "SELECT * FROM `posts` WHERE id = '$id'";
        $result = mysqli_query($this->mysql, $sql);
        $data = mysqli_fetch_assoc($result);
        return $data;
    }
    
    public function new_term($title, $text)
    {
        $sql = "INSERT INTO `posts` (`title`, `text`) VALUES ('$title', '$text');";
        $result = mysqli_query($this->mysql, $sql);
        return $result;
    }
    
    public function del_term($term)
    {
        $sql = "DELETE FROM `posts` WHERE `id` = '$term';";
        $result = mysqli_query($this->mysql, $sql);
        return $result;
    }
}
?>