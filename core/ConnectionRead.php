<?php

require_once "Connection.php";
require_once __DIR__ . "/helpers/config.php";

class ConnectionRead extends Connection
{
    private string $read;
    private string $readPassword;

    public function __construct()
    {
        parent::__construct(
            config("host"),
            config("db_name")
        );

        $this->read = config("read");
        $this->readPassword = config("read_pass");
    }

    public function connect(): mysqli
    {
        $conn = mysqli_connect(
            $this->host,
            $this->read,
            $this->readPassword,
            $this->databaseName
        );

        if (!$conn) {
            die("Database connection failed: " . mysqli_connect_error());
        }

        return $conn;
    }
}