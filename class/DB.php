<?php

namespace classes;

class DB{
    /**
     * @var string
     */
    private $host = "localhost";
    /**
     * @var string
     */
    private $username = "root";
    /**
     * @var string
     */
    private $password = "";
    /**
     * @var string
     */
    private $dbName = "";
    /**
     * @var int
     */
    private $port;
    /**
     * @var \PDO
     */
    private $connection;

    /**
     * DB constructor.
     * @param $host
     * @param $username
     * @param $password
     * @param $dbName
     * @param int $port
     */
    public function __construct($host, $username, $password, $dbName, $port = 3306){
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->dbName = $dbName;
        $this->port = $port;

        try {
            $connection = new \PDO("mysql:host=".$this->host.";dbname=".$this->dbName.";port=".$this->port, $this->username, $this->password);
            $connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $this->connection = $connection;
        } catch (\PDOException $exception) {
            echo "Error while database connect " . $exception->getMessage();
        }
    }

    /**
     * @return \PDO
     */
    public function getConnection(){
        return $this->connection;
    }

    /**
     * @param $connectio
     */
    public function setConnection($connectio){
        if($connectio instanceof \PDO) {
            $this->connection = $connectio;
        }
    }

    /**
     * @return array
     */
    public function getMenuItems(){
        $sql = "SELECT * FROM menu ORDER BY id";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    /**
     * @return array
     */
    public function getTrainers(){
        $sql = "SELECT * FROM trainers ORDER BY id";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    /**
     * @return array
     */
    public function getBlogEntry(){
        $sql = "SELECT * FROM `blog_prispevok` INNER JOIN `user` ON blog_prispevok.id_user=user.iduser";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    /**
     * @param $id
     * @return array
     */
    public function editBlogEntry($id){
        $sql = "SELECT * FROM `blog_prispevok` INNER JOIN `user` ON blog_prispevok.id_user=user.iduser WHERE id=$id";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    /**
     * @param $id
     */
    public function deleteBlogEntry($id){
        $sql = "DELETE FROM `blog_prispevok` WHERE id =$id";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
    }

}