<?php

require_once __DIR__ . "/core/base_controller.php";
require_once __DIR__ . "/core/view.php";

require_once __DIR__ . "/../db/db_connection.php";
require_once __DIR__ . "/../models/City.php";
require_once __DIR__ . "/../models/User.php";

require_once __DIR__ . "/../models/Menu/ContactMenu.php";

require_once __DIR__ . "/../core/repositories/user_repository.php";
require_once __DIR__ . "/../core/repositories/contact_repository.php";

require_once __DIR__ . "/viewmodels/ContactViewModel.php";
class ContactController extends BaseController
{
    public function __construct(IDatabase $database)
    {
        parent::__construct($database);
    }
    function getCurrentUser(): User
    {
        $userRepository = new UserRepository($this->database);

        $row = $userRepository->getUser();

        if (!$row) {
            die("No personal information found.");
        }

        return new User($row);
    }


    public function index()
    {
        //$contactMenuRow = Database::getContactMenu($GLOBALS["connRead"]);
        //$contactMenuRow = $this->database->getContactMenu();
        $menuRepository = new MenuRepository($this->database);
        $contactMenuRow = $menuRepository->getContactMenu();
        $contactMenu = new ContactMenu($contactMenuRow);

        //$user = $this->userService->getCurrentUser();
        //$userService = new UserService($this->database);
        $user = $this->getCurrentUser();
        /*if (isset($_POST["add_contact"])) {
            // $personalInfoId = $user->getId();
            // $fullName = trim($_POST["fullName"]);
            // $email = trim($_POST["email"]);
            // $date = $_POST["meetingDate"];
            // $message = trim($_POST["message"]);

            // if ($fullName == "" || $email == "") {
            //     die("Name and email are required. <a href='index.php?page=contacts'>Back</a>");
            // }

            $contactRequest = new ContactViewModel($user, $_POST);
            if (!$contactRequest->isValid()) {
                    die("Name and email are required. <a href='index.php?page=contacts'>Back</a>");
            }   
            

            // Database::addContact(
            //     $GLOBALS["connWrite"],
            //     $personalInfoId,
            //     $fullName,
            //     $email,
            //     $date,
            //     $message
            // );

            $contactRepository = new ContactRepository($this->database);

            $contactRepository->addContact(
                $contactRequest->personalInfoId,
                $contactRequest->fullName,
                $contactRequest->email,
                $contactRequest->date,
                $contactRequest->message
            );

            header("Location: index.php?page=contacts");
            exit;
        }
        */    

        return $this->view("contacts", [
            "user" => $user,
            "contactMenu" => $contactMenu,
            "title" => "Контакти",
            "style" => "assets/styles/main_style.css",
            "style_map" => "assets/styles/map_style.css",
            "style_contactForm" => "assets/styles/contact_style.css"
        ]);
    }

    public function store()
    {
        $user = $this->getCurrentUser();

        $contactRequest = new ContactViewModel($user, $_POST);

        if (!$contactRequest->isValid()) {
            die("Name and email are required. <a href='index.php?page=contacts'>Back</a>");
        }

        $contactRepository = new ContactRepository($this->database);

        $contactRepository->addContact(
            $contactRequest->personalInfoId,
            $contactRequest->fullName,
            $contactRequest->email,
            $contactRequest->date,
            $contactRequest->message
        );

        header("Location: index.php?page=contacts&success=1");
        exit;
    }
}