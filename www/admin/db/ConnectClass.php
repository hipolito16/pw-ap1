<?php

class ConnectClass
{

    var $conn;

    public function openConnect()
    {
        $serverName = "db:3306"; // localhost:3306
        $userName = "root";
        $password = "1q2w3e4r5t";
        $dbName = "pw_exemple";

        $this->conn = new mysqli($serverName, $userName, $password, $dbName);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function getConn()
    {
        return $this->conn;
    }
}
