<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('index');
    }

    public function view($page = 'index') {
        if (! is_file(APPPATH . 'Views/home/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new PageNotFoundException($page);
        }
            return view('home/' . $page);
            
        }
}
