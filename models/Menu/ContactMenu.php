<?php

require_once "Menu.php";

class ContactMenu extends Menu
{
    private string $heading;

    public function __construct($row)
    {
        parent::__construct($row);

        $this->heading = $row["heading"];
    }

    public function getHeading(): string
    {
        return $this->heading;
    }
}