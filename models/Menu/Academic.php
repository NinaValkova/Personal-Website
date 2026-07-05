<?php

require_once "Menu.php";

class Academic extends Menu
{
    private string $heading;
    private array $submenus = [];

    public function __construct($row)
    {
        parent::__construct($row);

        $this->heading = $row["heading"];
    }

    public function addSubmenu(AcademicSubmenu $submenu): void
    {
        // array_push($this->submenus, $submenu);
        $this->submenus[] = $submenu;
    }

    public function getSubmenus(): array
    {
        return $this->submenus;
    }

    public function getHeading(): string
    {
        return $this->heading;
    }
}