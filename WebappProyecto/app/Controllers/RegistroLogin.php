<?php
    namespace App\Controllers;
    use CodeIgniter\Controller;
    use CodeIgniter\Exceptions\PageNotFoundException; // Add this line

class RegistroLogin extends BaseController{

    public function index() {
        return view('index');
    }

    public function viewLogIn($page = 'inicioSesion') {
    if (! is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
        // Whoops, we don't have a page for that!
        throw new PageNotFoundException($page);
    }
        return view('pages/' . $page);
    }

    public function viewSignUp($page = 'registro') {
        if (! is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new PageNotFoundException($page);
        }
            return view('pages/' . $page);
        }
}