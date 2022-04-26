<?php

namespace Controllers;

use Core\View;
class index
{
    protected $view;

    public function __construct()
    {
        $this->view = new View();
    }

    public function index()
    {
//        $this->view->render('default');
    }
    public function singIn()
    {
        $this->view->render('singin');
    }
}