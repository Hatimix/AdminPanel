<?php


class Database
{
    private $dsn = "mysql:host=localhost;dbname=AdminPanel";
    private $user = "root";
    private $pass = "";
    private $cnx;

    private function getPDO()
    {
        if ($this->cnx ==  null)
        {
            $this->cnx = new PDO($this->dsn,$this->user,$this->pass);
            $this->cnx->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }
        return $this->cnx;
    }
}