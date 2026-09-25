<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        return view('pages/home', [
            'title' => 'POS System',
            'heading' => 'Point of Sale System'
        ]);
    }

    public function about()
    {
        return view('pages/about', [
            'title' => 'About',
            'heading' => 'About Our POS System',
            'message' => 'This is our POS application.'
        ]);
    }
}