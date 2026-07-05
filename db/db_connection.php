<?php
require_once __DIR__ . "/../core/ConnectionRead.php";
require_once __DIR__ . "/../core/ConnectionWrite.php";

require_once __DIR__ . "/../models/Menu/Menu.php";
require_once __DIR__ . "/../models/Menu/PersonalSubmenu.php";
require_once __DIR__ . "/../models/Menu/AcademicSubmenu.php";

require_once __DIR__ . "/../core/interfaces/IDatabase.php";


class Database implements IDatabase
{
    private ConnectionRead $connectionRead;
    private ConnectionWrite $connectionWrite;

    public function __construct()
    {
        $this->connectionRead = new ConnectionRead();
        $this->connectionWrite = new ConnectionWrite();
    }
    
    public function getReadConnection()
    {
        return $this->connectionRead->connect();
    }

    public function getWriteConnection()
    {
        return $this->connectionWrite->connect();
    }
    //public static function getUser($connRead)
    /*public  function getUser()
    {
        $connRead = $this->connectionRead->connect();

        $sql = "
            SELECT *
            FROM personal_info
            LIMIT 1
        ";

        $result = mysqli_query($connRead, $sql);

        if (!$result) {
            die(mysqli_error($connRead));
        }

        return mysqli_fetch_assoc($result);
    }*/

   /*
    public function addContact(
        //$connWrite,
        $personalInfoId,
        $name,
        $email,
        $date,
        $message
    ) {

       $connWrite = $this->connectionWrite->connect();

        $stmt = mysqli_prepare(
            $connWrite,
            "INSERT INTO contact
            (personal_info_id,full_name,email,date,message)
            VALUES (?,?,?,?,?)"
        );

        mysqli_stmt_bind_param(
            $stmt,
            "issss",
            $personalInfoId,
            $name,
            $email,
            $date,
            $message
        );

        mysqli_stmt_execute($stmt);
    }
    */

    // public /*static*/ function getMenu(/*$connRead*/)
    // {
    //     $connRead = $this->connectionRead->connect();

    //     $sql = "SELECT * FROM menu ORDER BY id ASC";

    //     $result = mysqli_query($connRead, $sql);

    //     if (!$result) {
    //         die(mysqli_error($connRead));
    //     }

    //     $menuItems = [];

    //     while ($row = mysqli_fetch_assoc($result)) {
    //         $menuItems[] = new Menu($row);
    //     }

    //     return $menuItems;
    // }

    // public /*static*/ function getHome(/*$connRead*/)
    // {
    //     $connRead = $this->connectionRead->connect();

    //     $sql = "
    //     SELECT
    //         m.id,
    //         m.title,
    //         m.url,
    //         m.has_submenu,
    //         h.heading
    //     FROM home h
    //     JOIN menu m ON h.menu_id = m.id
    //     WHERE h.menu_id = 1
    //     LIMIT 1
    // ";

    //     $result = mysqli_query($connRead, $sql);

    //     if (!$result) {
    //         die(mysqli_error($connRead));
    //     }

    //     return mysqli_fetch_assoc($result);
    // }

    // public /*static*/ function getSummary(/*$connRead*/)
    // {
    //     $connRead = $this->connectionRead->connect();

    //     $sql = "
    //     SELECT
    //         m.id,
    //         m.title,
    //         m.url,
    //         m.has_submenu,
    //         s.heading
    //     FROM summary s
    //     JOIN menu m ON s.menu_id = m.id
    //     WHERE s.menu_id = 4
    //     LIMIT 1
    // ";

    //     $result = mysqli_query($connRead, $sql);

    //     if (!$result) {
    //         die(mysqli_error($connRead));
    //     }

    //     return mysqli_fetch_assoc($result);
    // }

    // public /*static*/ function getContactMenu(/*$connRead*/)
    // {
    //     $connRead = $this->connectionRead->connect();

    //     $sql = "
    //     SELECT
    //         m.id,
    //         m.title,
    //         m.url,
    //         m.has_submenu,
    //         c.heading
    //     FROM contact_menu c
    //     JOIN menu m ON c.menu_id = m.id
    //     WHERE c.menu_id = 5
    //     LIMIT 1
    // ";

    //     $result = mysqli_query($connRead, $sql);

    //     if (!$result) {
    //         die(mysqli_error($connRead));
    //     }

    //     return mysqli_fetch_assoc($result);
    // }

    // public /*static*/ function getPersonal(/*$connRead*/)
    // {
    //     $connRead = $this->connectionRead->connect();

    //     $sql = "
    //     SELECT
    //         m.id,
    //         m.title,
    //         m.url,
    //         m.has_submenu,
    //         p.heading
    //     FROM personal_menu p
    //     JOIN menu m ON p.menu_id = m.id
    //     WHERE p.menu_id = 2
    //     LIMIT 1
    // ";

    //     $result = mysqli_query($connRead, $sql);

    //     if (!$result) {
    //         die(mysqli_error($connRead));
    //     }

    //     return mysqli_fetch_assoc($result);
    // }

    // public /*static*/ function getPersonalSubmenu(/*$connRead*/)
    // {
    //     $connRead = $this->connectionRead->connect();

    //     $sql = "SELECT * FROM personal_submenu ORDER BY id ASC";

    //     $result = mysqli_query($connRead, $sql);

    //     if (!$result) {
    //         die(mysqli_error($connRead));
    //     }

    //     $submenus = [];

    //     while ($row = mysqli_fetch_assoc($result)) {
    //         $submenus[] = new PersonalSubmenu($row);
    //     }

    //     return $submenus;
    // }

    // public /*static*/ function getAcademic(/*$connRead*/)
    // {
    //     $connRead = $this->connectionRead->connect();

    //     $sql = "
    //     SELECT
    //         m.id,
    //         m.title,
    //         m.url,
    //         m.has_submenu,
    //         a.heading
    //     FROM academic_menu a
    //     JOIN menu m ON a.menu_id = m.id
    //     WHERE a.menu_id = 3
    //     LIMIT 1
    // ";

    //     $result = mysqli_query($connRead, $sql);

    //     if (!$result) {
    //         die(mysqli_error($connRead));
    //     }

    //     return mysqli_fetch_assoc($result);
    // }

    // public /*static*/ function getAcademicSubmenu(/*$connRead*/)
    // {
    //     $connRead = $this->connectionRead->connect();

    //     $sql = "SELECT * FROM academic_submenu ORDER BY id ASC";

    //     $result = mysqli_query($connRead, $sql);

    //     if (!$result) {
    //         die(mysqli_error($connRead));
    //     }

    //     $items = [];

    //     while ($row = mysqli_fetch_assoc($result)) {
    //         $items[] = new AcademicSubmenu($row);
    //     }

    //     return $items;
    // }

}