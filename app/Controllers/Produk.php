<?php

namespace App\Controllers;

class Produk extends BaseController
{
    public function index(): string
    {
        return view('Produk/index');
    }
}
