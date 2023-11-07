<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('login/index');
    }

    public function register() {
        return view('register/index');
    }

    public function ganti() {
        return view('ganti/index');
    }
}
