<?php

require_once __DIR__ . "/../interfaces/IUserRepository.php";
class UserRepository implements IUserRepository
{
    private IDatabase $database;

    public function __construct(IDatabase $database)
    {
        $this->database = $database;
    }

    public function getUser()
    {
        $connRead = $this->database->getReadConnection();

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
    }

}