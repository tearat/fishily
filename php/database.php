<?php
class DATABASE
{
    private $mysql;
    private $sql;
    private $host = 'localhost';
    private $user = 'root';
    private $password = '';
    private $db_name = 'glossary';
    
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
    
    // Загрузить юзверей
    public function load_term($name)
    {
    $sql = "SELECT * FROM terms WHERE title = '$name'";
    $result = mysqli_query($this->mysql, $sql);
    $data = mysqli_fetch_assoc($result);
//    while ($row = mysqli_fetch_assoc($result))
//    {
//        $data[] = $row;
//    }
    return $data;
    }
}
?>