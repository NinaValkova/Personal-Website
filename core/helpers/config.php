<?php

function config($key)
{
    $config = require __DIR__ . "/../../config.php";

    return $config[$key];
}