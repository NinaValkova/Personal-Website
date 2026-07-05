<?php

class PersonalSubmenu
{
    private int $id;
    private string $title;

    public function __construct($row)
    {
        $this->id = $row["id"];
        $this->title = $row["title"];
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getAnchor(): string
    {
        $anchors = [
            "Информация" => "personal-data",
            "Любима храна" => "food",
            "Домашни любимци" => "pets",
            "Хобита" => "hobbies",
            "Градове" => "cities"
        ];

        return $anchors[$this->title] ?? "";
    }
}