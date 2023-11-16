<?php

namespace App\controllers;

use Ryxo\Controller;

class SiteController extends Controller
{
    public function home()
    {
        $data = [
            'message' => 'Hello, World!'
        ];
        $this->render("home", $data);
    }
}
