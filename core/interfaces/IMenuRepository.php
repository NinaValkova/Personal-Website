<?php

interface IMenuRepository
{
    public function getMenu();

    public function getHome();

    public function getPersonal();

    public function getPersonalSubmenu();

    public function getAcademic();

    public function getAcademicSubmenu();

    public function getSummary();

    public function getContactMenu();
}