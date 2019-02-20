<?php

namespace App\Http\Controllers;

class HomeController
{
    public function index()
    {
        echo view('index.twig');
    }
}
