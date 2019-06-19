<?php

namespace App\Http\Controllers;

use App\Zk;

class ZkController extends Controller
{

    public function index(Zk $zk)
    {
        $this->view = 'site.zk';
        $this->title = 'Жилой комплекс';

        return $this->render();
    }

}
