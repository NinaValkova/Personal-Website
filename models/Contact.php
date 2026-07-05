<?php

class Contact
{
    private int $id;

    private int $personalInfoId;

    private string $fullName;

    private string $email;

    private string $date;

    private string $message;

    public function __construct($row)
    {
        $this->id = $row["id"];
        $this->personalInfoId = $row["personal_info_id"];
        $this->fullName = $row["full_name"];
        $this->email = $row["email"];
        $this->date = $row["date"];
        $this->message = $row["message"];
    }
}