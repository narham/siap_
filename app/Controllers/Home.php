<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('layout/blank', [
            'title' => 'Home',
            'content' => 'Welcome to the Home Page!'
        ]);
    }
}