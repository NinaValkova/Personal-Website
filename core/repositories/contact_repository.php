<?php

require_once __DIR__ . "/../interfaces/IContactRepository.php";

class ContactRepository implements IContactRepository
{
    private IDatabase $database;

    public function __construct(IDatabase $database)
    {
        $this->database = $database;
    }

    // public function addContact($personalInfoId, $name, $email, $date, $message): void
    // {
    //     $this->database->addContact(
    //         $personalInfoId,
    //         $name,
    //         $email,
    //         $date,
    //         $message
    //     );
    // }
    public function addContact(
        $personalInfoId,
        $name,
        $email,
        $date,
        $message
    ): void {

        $connWrite = $this->database->getWriteConnection();

        $stmt = mysqli_prepare(
            $connWrite,
            "INSERT INTO contact
            (personal_info_id, full_name, email, date, message)
            VALUES (?, ?, ?, ?, ?)"
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
}
