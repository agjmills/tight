<?php

namespace App\Http\Controllers;

class ErrorController
{
    public function pageNotFound()
    {
        echo view('errors/404.twig');
    }
}