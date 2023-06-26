<?php
namespace App\Filters;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;
class UserAuth implements FilterInterface{

public function before(RequestInterface $request, $arguments = null){

if (!session('logged_in'))
    return redirect()->to(site_url('/login'));
elseif ((session('user')->role & 1 || 2) == 0)
    return redirect()->to(site_url('/unauthorized'));
}

public function after(RequestInterface $request, ResponseInterface $response, $arguments = null) {}
}
