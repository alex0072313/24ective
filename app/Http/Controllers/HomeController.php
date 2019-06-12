<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{

    public function index()
    {
        $this->view = 'site.home';
        $this->title = 'Главная';

        return $this->render();
    }
}
