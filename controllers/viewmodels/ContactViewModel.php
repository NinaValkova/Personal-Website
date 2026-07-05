<?php

class ContactViewModel
{
    public int $personalInfoId;
    public string $fullName;
    public string $email;
    public string $date;
    public string $message;

    public function __construct(User $user, array $post)
    {
        $this->personalInfoId = $user->getId();
        $this->fullName = trim($post["fullName"] ?? "");
        $this->email = trim($post["email"] ?? "");
        $this->date = $post["meetingDate"] ?? "";
        $this->message = trim($post["message"] ?? "");
    }

    public function isValid(): bool
    {
        return $this->fullName !== "" && $this->email !== "";
    }
}