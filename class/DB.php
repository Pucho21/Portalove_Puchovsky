<?php

namespace classses;

class DB
{
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
     * @var
     */
    private $port;

    /**
     * @var
     */
    private $connection;

    /**
     * @param $host
     * @param $username
     * @param $password
     * @param $dbName
     * @param int $port
     */
    public function __contruct($host, $username, $password, $dbName, $port = 3306)
    {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->dbName = $dbName;
        $this->port = $port;

        try {
            $connection = new \PDO("mysql:host=".$this->host.";dbname=".$this->dbName.";port=".$this->port, $this->username, $this->password);
            $connection->setAttribute(\POD::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $this->connection = $connection;
        } catch (\PDOException $exception){
            echo "Error while database connect" . $exception->getMessage();
        }
    }

    /**
     * @return mixed
     */
    public function getConnection(){
        return $this->connection;
    }

    /**
     * @param $connection
     */
    public function setConnection($connection){
        if($connection instanceof \PDO){
            $this->connection = $connection;
        }
    }

    public function getMenuItems(){
        $sql = "SELECT * FROM menu ORDER BY id";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

}