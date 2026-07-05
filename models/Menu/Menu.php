<?php

class Menu
{
    private int $id;
    private string $title;
    private string $url;
    private bool $hasSubmenu;

    public function __construct($row)
    {
        $this->id = $row["id"];
        $this->title = $row["title"];
        $this->url = $row["url"];
        $this->hasSubmenu = (bool)$row["has_submenu"];
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function hasSubmenu(): bool
    {
        return $this->hasSubmenu;
    }
}