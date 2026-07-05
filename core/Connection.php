<?php

class Connection
{
    protected string $host;
    protected string $databaseName;

    public function __construct(string $host, string $databaseName)
    {
        $this->host = $host;
        $this->databaseName = $databaseName;
    }

    public function getHost(): string
    {
        return $this->host;
    }

    public function getDatabaseName(): string
    {
        return $this->databaseName;
    }
}