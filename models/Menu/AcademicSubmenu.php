<?php

class AcademicSubmenu
{
    private int $id;
    private string $title;

    public function __construct($row)
    {
        $this->id = $row["id"];
        $this->title = $row["title"];
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getAnchor(): string
    {
        $anchors = [
            "Образование" => "education",
            "Технически умения" => "skills",
            "Професионални интереси" => "experience",
            "Проекти" => "projects",
            "Сертификати" => "documents"
        ];

        return $anchors[$this->title] ?? "";
    }
}