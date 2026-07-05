<?php

class MenuItems
{
    private array $menuItems;
    private array $personalSubmenuItems;
    private array $academicSubmenuItems;

    public function __construct(/*$connRead*/ /*Database $database*/$menuRepository)
    {
        // $this->menuItems = Database::getMenu($connRead);
        // $this->personalSubmenuItems = Database::getPersonalSubmenu($connRead);
        // $this->academicSubmenuItems = Database::getAcademicSubmenu($connRead);
        
        // $this->menuItems = $database->getMenu();
        // $this->personalSubmenuItems = $database->getPersonalSubmenu();
        // $this->academicSubmenuItems = $database->getAcademicSubmenu();

        $this->menuItems = $menuRepository->getMenu();
        $this->personalSubmenuItems = $menuRepository->getPersonalSubmenu();
        $this->academicSubmenuItems = $menuRepository->getAcademicSubmenu();
    }

    public function getMenuItems(): array
    {
        return $this->menuItems;
    }

    public function getPersonalSubmenuItems(): array
    {
        return $this->personalSubmenuItems;
    }

    public function getAcademicSubmenuItems(): array
    {
        return $this->academicSubmenuItems;
    }
}