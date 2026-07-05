<?php

require_once "City.php";

class User
{
    private int $id;

    private string $name;

    private int $age;

    private string $imageUrl;

    private City $city;

    public function __construct($row)
    {
        $this->id = $row["id"];
        $this->name = $row["name"];
        $this->age = $row["age"];
        $this->imageUrl = $row["image_url"];

        $this->city = new City(
            $row["home_city"],
            $row["study_city"],
            $row["current_city"]
        );
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function getImageUrl(): string
    {
        return $this->imageUrl;
    }

    public function getUserHomeCity(): string
    {
        return $this->city->getHomeCity();
    }

    public function getUserStudyCity(): string
    {
        return $this->city->getStudyCity();
    }

    public function getUserCurrentCity(): string
    {
        return $this->city->getCurrentCity();
    }
}