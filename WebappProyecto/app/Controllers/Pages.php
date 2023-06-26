<?php
    namespace App\Controllers;
    use CodeIgniter\Controller;
    use CodeIgniter\Exceptions\PageNotFoundException; // Add this line

class Pages extends BaseController{

    public function index() {
        return view('index');
    }

    public function viewMasInformacion($page = 'mas-informacion') {
        if (! is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new PageNotFoundException($page);
        }
        $data['title'] = ucfirst($page); // Capitalize the first letter
        return view('templates/header', $data)
        .view('pages/' . $page)
        .view('templates/footer');
    }

}