<?php

require_once __DIR__ . "/db/db_connection.php";

return [
    "database" => function () {
        return new Database();
    }
];