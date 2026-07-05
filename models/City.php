<?php

class City
{
    private string $homeCity;

    private string $studyCity;

    private string $currentCity;

    public function __construct(
        string $homeCity,
        string $studyCity,
        string $currentCity
    ) {
        $this->homeCity = $homeCity;
        $this->studyCity = $studyCity;
        $this->currentCity = $currentCity;
    }

    public function getHomeCity(): string
    {
        return $this->homeCity;
    }

    public function getStudyCity(): string
    {
        return $this->studyCity;
    }

    public function getCurrentCity(): string
    {
        return $this->currentCity;
    }

}