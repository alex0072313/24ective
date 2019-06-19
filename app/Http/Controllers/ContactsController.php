<?php

namespace App\Http\Controllers;

class ContactsController extends Controller
{

    public function index()
    {
        $this->view = 'site.contacts';
        $this->title = 'Контакты';

        return $this->render();
    }
}
