<?php

class View
{
    private $viewName;
    private $data;

    public function __construct($viewName, $data = [])
    {
        $this->viewName = $viewName;
        $this->data = $data;
    }

    public function render()
    {
        extract($this->data);

        require_once("pages/" . $this->viewName . ".php");
    }
}