<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected
        $title = '',
        $longtitle = '',
        $view = '',
        $data = [];

    protected function render()
    {
        $merge['title'] = $this->title ? $this->title : '';
        $merge['longtitle'] = $this->longtitle ? $this->longtitle : '';

        return view($this->view, $this->data, $merge);
    }
}


