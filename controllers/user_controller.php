<?php

require_once __DIR__ . "/core/base_controller.php";
require_once __DIR__ . "/core/view.php";

require_once __DIR__ . "/../db/db_connection.php";
require_once __DIR__ . "/../models/City.php";
require_once __DIR__ . "/../models/User.php";

require_once __DIR__ . "/../models/Menu/Menu.php";
require_once __DIR__ . "/../models/Menu/Home.php";
require_once __DIR__ . "/../models/Menu/Summary.php";
require_once __DIR__ . "/../models/Menu/Personal.php";
require_once __DIR__ . "/../models/Menu/PersonalSubmenu.php";
require_once __DIR__ . "/../models/Menu/Academic.php";
require_once __DIR__ . "/../models/Menu/AcademicSubmenu.php";

require_once __DIR__ . "/../core/repositories/user_repository.php";
class UserController extends BaseController
{
                //private $user;
    //private $menu;
    /*private Database $database;*/
    //private $userService;
    public function __construct(/*Database*/IDatabase  $database)
    {
            //$row = Database::getUser($GLOBALS["connRead"]);
            // $menuItems = Database::getMenu($GLOBALS["connRead"]);
        parent::__construct($database);

            /*$this->database = new Database();*/

        // $row = $this->database->getUser();
        // if (!$row) {
        //     die("No personal information found.");
        // }
        //$this->userService = new UserService($this->database);
        //$this->userService = $userService;

        // $this->user = new User($row);
                    /*$this->user = $this->userService->getCurrentUser();*/

            //$this->menu = $menuItems;
    }

    // public function home()
    // {
    //     $user = $this->user;

    //     $title = "Начало";
    //     $style = "styles/main_style.css";
    //     $style_sidebar = "styles/sidebar_style.css";
    //     $style_table = "styles/table_style.css";

    //     require_once("pages/home.php");
    // }

    function getCurrentUser(): User
    {
        $userRepository = new UserRepository($this->database);

        $row = $userRepository->getUser();

        if (!$row) {
            die("No personal information found.");
        }

        return new User($row);
    }

      public function home()
    {
        /*$user = $this->user;*/
        //$user = $this->userService->getCurrentUser();
        $user = $this->getCurrentUser();
        
        //$menu = $this->menu;
        
        //$homeRow = Database::getHome($GLOBALS["connRead"]);
        $menuRepository = new MenuRepository($this->database);
        //$homeRow = $this->database->getHome();
        $homeRow = $menuRepository->getHome();
        $home = new Home($homeRow);

        return $this->view("home", [
            "user" => $user,
            //"menuItems" => $menu,
            "home" => $home,
            "title" => "Начало",
            "style" => "assets/styles/main_style.css",
            "style_sidebar" => "assets/styles/sidebar_style.css",
            "style_table" => "assets/styles/table_style.css"
        ]);
    }

    public function personal()
    {
        /*$user = $this->user;*/
        //$user = $this->userService->getCurrentUser();
        $user = $this->getCurrentUser();
        //$menu = $this->menu;


        //$personalRow = Database::getPersonal($GLOBALS["connRead"]);
        $menuRepository = new MenuRepository($this->database);
        $personalRow = $menuRepository->getPersonal();
        $personal = new Personal($personalRow);

        //$personalSubmenus = Database::getPersonalSubmenu($GLOBALS["connRead"]);
        //$personalSubmenus = $this->database->getPersonalSubmenu();
        $personalSubmenus = $menuRepository->getPersonalSubmenu();

        foreach ($personalSubmenus as $submenu) {
            $personal->addSubmenu($submenu);
        }

        return $this->view("personal", [
            "user" => $user,
            //"menuItems" => $this->menu,
            "personal" => $personal,
            "title" => "Начало",
            "style" => "assets/styles/main_style.css",
            "style_sidebar" => "assets/styles/sidebar_style.css",
            "style_image" => "assets/styles/image_style.css"
        ]);
    }

    public function academic()
    {
        /*$user = $this->user;*/
        //$user = $this->userService->getCurrentUser();
        //$userService = new UserService($this->database);
        $user = $this->getCurrentUser();
        //$menu = $this->menu;

        //$academicRow = Database::getAcademic($GLOBALS["connRead"]);
        //$academicRow = $this->database->getAcademic();
        $menuRepository = new MenuRepository($this->database);

        $academicRow = $menuRepository->getAcademic();
        $academic = new Academic($academicRow);

        //$academicSubmenus = $this->database->getAcademicSubmenu();
        $academicSubmenus = $menuRepository->getAcademicSubmenu();
        //$academicSubmenus = Database::getAcademicSubmenu($GLOBALS["connRead"]);

        foreach ($academicSubmenus as $submenu) {
            $academic->addSubmenu($submenu);
        }

        return $this->view("academic", [
            "user" => $user,
            //"menuItems" => $this->menu,
            "academic" => $academic,
            "title" => "Начало",
            "style" => "assets/styles/main_style.css",
            "style_sidebar" => "assets/styles/sidebar_style.css",
            "style_image" => "assets/styles/image_style.css"
        ]);
    }

    public function summary()
    {
        /*$user = $this->user;*/
        //$user = $this->userService->getCurrentUser();
        $user = $this->getCurrentUser();
        //$menu = $this->menu;

        //$summaryRow = Database::getSummary($GLOBALS["connRead"]);
        $menuRepository = new MenuRepository($this->database);
        //$summaryRow = $this->database->getSummary();
        $summaryRow = $menuRepository->getSummary();
        $summary = new Summary($summaryRow);

        return $this->view("summary", [
            "user" => $user,
            //"menuItems" => $this->menu,
            "summary" => $summary,
            "title" => "Начало",
            "style" => "assets/styles/main_style.css",
            "style_sidebar" => "assets/styles/sidebar_style.css",
            "style_image" => "assets/styles/image_style.css",
            "style_video" => "assets/styles/video_style.css"
        ]);
    }
}