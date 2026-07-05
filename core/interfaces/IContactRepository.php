<?php

interface IContactRepository
{
    public function addContact($personalInfoId, $name, $email, $date, $message): void;
}