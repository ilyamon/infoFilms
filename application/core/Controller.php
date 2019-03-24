<?php

class Controller
{
    public $model;
    public $view;

    function __construct()
    {
        $this->model = new ModelMain();
        $this->view = new View();
    }


}
