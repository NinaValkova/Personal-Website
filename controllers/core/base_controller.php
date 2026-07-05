<?php

require_once __DIR__ . "/menu_items.php";

class BaseController
{
    // protected $menuItems;
    // protected $personalSubmenuItems;
    // protected $academicSubmenuItems;
    //protected Database $database;
    protected IDatabase $database;

    private MenuItems $menu;


    public function __construct(/*Database*/IDatabase $database)
    {
        // $this->menuItems = Database::getMenu($GLOBALS["connRead"]);
        // $this->personalSubmenuItems = Database::getPersonalSubmenu($GLOBALS["connRead"]);
        // $this->academicSubmenuItems = Database::getAcademicSubmenu($GLOBALS["connRead"]);
            //$this->database = new Database();
             $this->database = $database;
        
         //$this->menu = new MenuItems($GLOBALS["connRead"]);
         //$this->menu = new MenuItems($this->database);
        $this->menu = MenuConnection::get();
    }

    protected function view($viewName, $data = [])
    {
        $data["menuItems"] = $this->menu->getMenuItems();
        $data["personalSubmenuItems"] = $this->menu->getPersonalSubmenuItems();
        $data["academicSubmenuItems"] = $this->menu->getAcademicSubmenuItems();

        return new View($viewName, $data);
    }
}