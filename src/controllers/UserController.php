<?php


namespace src\controllers;


use core\Controller;

class UserController extends Controller
{
    public function add()
    {
        $this->render('adicionar');

    }
}