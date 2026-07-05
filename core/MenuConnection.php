<?php
require_once __DIR__ . "/repositories/menu_repository.php";


class MenuConnection
{
    private static MenuItems $menu;

    public static function init(IDatabase $database): void
    {
        $menuRepository = new MenuRepository($database);
        self::$menu = new MenuItems($menuRepository);
    }

    public static function get(): MenuItems
    {
        return self::$menu;
    }
}