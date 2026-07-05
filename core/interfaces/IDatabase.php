<?php

interface IDatabase
{
    public function getReadConnection();

    public function getWriteConnection();
}