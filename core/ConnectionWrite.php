<?php

require_once "Connection.php";
require_once __DIR__ . "/helpers/config.php";

class ConnectionWrite extends Connection
{
    private string $write;
    private string $writePassword;

    public function __construct()
    {
        parent::__construct(
            config("host"),
            config("db_name")
        );

        $this->write = config("write");
        $this->writePassword = config("write_pass");
    }

    public function connect(): mysqli
    {
        $conn = mysqli_connect(
            $this->host,
            $this->write,
            $this->writePassword,
            $this->databaseName
        );

        if (!$conn) {
            die("Database connection failed: " . mysqli_connect_error());
        }

        return $conn;
    }
}