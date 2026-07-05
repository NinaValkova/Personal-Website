<?php

require_once __DIR__ . "/../interfaces/IMenuRepository.php";
require_once __DIR__ . "/../../models/Menu/Menu.php";
require_once __DIR__ . "/../../models/Menu/PersonalSubmenu.php";
require_once __DIR__ . "/../../models/Menu/AcademicSubmenu.php";

class MenuRepository implements IMenuRepository
{
    private IDatabase $database;

    public function __construct(IDatabase $database)
    {
        $this->database = $database;
    }

    public function getMenu()
    {
        $connRead = $this->database->getReadConnection();

        $sql = "SELECT * FROM menu ORDER BY id ASC";
        $result = mysqli_query($connRead, $sql);

        if (!$result) {
            die(mysqli_error($connRead));
        }

        $menuItems = [];

        while ($row = mysqli_fetch_assoc($result)) {
            $menuItems[] = new Menu($row);
        }

        return $menuItems;
    }

    public function getHome()
    {
        $connRead = $this->database->getReadConnection();

        $sql = "
            SELECT m.id, m.title, m.url, m.has_submenu, h.heading
            FROM home h
            JOIN menu m ON h.menu_id = m.id
            WHERE h.menu_id = 1
            LIMIT 1
        ";

        $result = mysqli_query($connRead, $sql);

        if (!$result) {
            die(mysqli_error($connRead));
        }

        return mysqli_fetch_assoc($result);
    }

    public function getPersonal()
    {
        $connRead = $this->database->getReadConnection();

        $sql = "
            SELECT m.id, m.title, m.url, m.has_submenu, p.heading
            FROM personal_menu p
            JOIN menu m ON p.menu_id = m.id
            WHERE p.menu_id = 2
            LIMIT 1
        ";

        $result = mysqli_query($connRead, $sql);

        if (!$result) {
            die(mysqli_error($connRead));
        }

        return mysqli_fetch_assoc($result);
    }

    public function getPersonalSubmenu()
    {
        $connRead = $this->database->getReadConnection();

        $sql = "SELECT * FROM personal_submenu ORDER BY id ASC";
        $result = mysqli_query($connRead, $sql);

        if (!$result) {
            die(mysqli_error($connRead));
        }

        $submenus = [];

        while ($row = mysqli_fetch_assoc($result)) {
            $submenus[] = new PersonalSubmenu($row);
        }

        return $submenus;
    }

    public function getAcademic()
    {
        $connRead = $this->database->getReadConnection();

        $sql = "
            SELECT m.id, m.title, m.url, m.has_submenu, a.heading
            FROM academic_menu a
            JOIN menu m ON a.menu_id = m.id
            WHERE a.menu_id = 3
            LIMIT 1
        ";

        $result = mysqli_query($connRead, $sql);

        if (!$result) {
            die(mysqli_error($connRead));
        }

        return mysqli_fetch_assoc($result);
    }

    public function getAcademicSubmenu()
    {
        $connRead = $this->database->getReadConnection();

        $sql = "SELECT * FROM academic_submenu ORDER BY id ASC";
        $result = mysqli_query($connRead, $sql);

        if (!$result) {
            die(mysqli_error($connRead));
        }

        $items = [];

        while ($row = mysqli_fetch_assoc($result)) {
            $items[] = new AcademicSubmenu($row);
        }

        return $items;
    }

    public function getSummary()
    {
        $connRead = $this->database->getReadConnection();

        $sql = "
            SELECT m.id, m.title, m.url, m.has_submenu, s.heading
            FROM summary s
            JOIN menu m ON s.menu_id = m.id
            WHERE s.menu_id = 4
            LIMIT 1
        ";

        $result = mysqli_query($connRead, $sql);

        if (!$result) {
            die(mysqli_error($connRead));
        }

        return mysqli_fetch_assoc($result);
    }

    public function getContactMenu()
    {
        $connRead = $this->database->getReadConnection();

        $sql = "
            SELECT m.id, m.title, m.url, m.has_submenu, c.heading
            FROM contact_menu c
            JOIN menu m ON c.menu_id = m.id
            WHERE c.menu_id = 5
            LIMIT 1
        ";

        $result = mysqli_query($connRead, $sql);

        if (!$result) {
            die(mysqli_error($connRead));
        }

        return mysqli_fetch_assoc($result);
    }
}