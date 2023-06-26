<?php
namespace App\Controllers;
class User extends BaseController
{
    public function list()
    {
        $userModel = new \App\Models\UserModel();
        $data['users'] = $userModel->findAll();

        return view('templates/header')
        .view('user/admin_list', $data)
        .view('templates/footer');

    }

    public function admin_list() {
        $userModel = new \App\Models\UserModel();
        $data['users'] = $userModel->findAll();

        return view('templates/header')
        .view('user/admin_list', $data)
        .view('template/footer');
    }

    public function login(){
        $validation= \Config\Services::validation();
        $rules = [
            "email" => [
                "label" => "Email",
                "rules" => "required|min_Length[6]"
            ],
            "password" => [
                "label" => "Password",
                "rules" => "required|min_Length[4]"
            ]
        ];

            $data=[
                "logged_in" => false,
                "user" => null,
                "errors" => null,
            ];
            $session = session();

            if($this->request->getMethod() == "post"){
                if($this->validate($rules)){
                    $email=$this->request->getVar('email');
                    $password=$this->request->getVar('password');
                    $user=model('UserModel')->authenticate($email,$password);

                    if($user && password_verify($password, $user->password)){
                        $session->set('logged_in',TRUE);
                        $session->set('user',$user);

                        $data['logged_in'] = $session->get('logged_in');
                        $data['user'] = $session->get('user');
                        $session->setFlashdata('msg','Usuario correcto');
                        return redirect()->to(base_url('/logged'));
                    }else{
                        
                        $session->setFlashdata('msg-bad','Credenciales Login Incorrectas');
                    }
                }else{
                    $data["errors"]=$validation->getErrors();
                }
                $session->setFlashdata('msg-bad','Credenciales Login Incorrectas');
            }

           return redirect()->to(base_url('/login'));
    }

    public function register(){
        $validation= \Config\Services::validation();
        $data=[
        ];
        $session = session();
    
        if($this->request->getMethod() == "post"){
            $rules = [
                "nombre" => [
                    "label" => "Nombre",
                    "rules" => "required|max_length[20]"
                ],
                "email" => [
                    "label" => "Email",
                    "rules" => "required|min_length[6]"
                ],
                "password" => [
                    "label" => "Password",
                    "rules" => "required|min_length[4]"
                ]
            ];
            if($this->validate($rules)){
                $email=$this->request->getVar('email');
                $password=$this->request->getVar('password');
                $username=$this->request->getVar('nombre');
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT); // Hash the password
                $user_data = [
                    'nombre' => $username,
                    'email' => $email,
                    'password' => $hashedPassword
                ];
                
                model('UserModel')->insert($user_data); // Insert the user into the database
               
                $session->setFlashdata('msg','Usuario registrado correctamente');
                return redirect()->to(base_url('/login'));
            } else {
                /*echo "<script>alert('Datos Incorrectos, el email o la contraseña son incorrectos');</script>";*/
                $data["errors"]=$validation->getErrors();
            }
            $session->setFlashdata('msg-bad','Credenciales de Registro Incorrectas');
            
        }
    
        return redirect()->to(base_url('/signup'));
    }

    public function user_ok(){

        return view('templates/header')
        .view('user/user_ok')
        .view('templates/footer');
        
    }
    
    public function logout(){

        session()->destroy();
        return redirect()->to(base_url('/inicio'));

    }

    public function unauthorized(){
        return view('templates/header')
        .view('user/unauthorized');
    }

    public function misPropiedades(){
        $zonaModel = new \App\Models\ZonaModel();
        $dataZona['zona'] = $zonaModel->findAll();

        return view('templates/header')
        .view('user/mispropiedades', $dataZona);
    }

    public function propiedadesUsuario(){
        $session = session();
        $usuario = $session->get('user')->id;

        $viviendaModel = new \App\Models\ViviendaModel();
        $dataVivienda = $viviendaModel->busquedaPorUsuario($usuario);

        echo json_encode(['data' => $dataVivienda, 'tipo' => 3]);
    }

    public function propiedadesCompradas(){
        $session = session();
        $usuario = $session->get('user')->id;

        $transaccioModel = new \App\Models\TransaccionModel();
        $dataTransaccion = $transaccioModel->busquedaPorUsuario($usuario);

        $viviendaModel = new \App\Models\ViviendaModel();
        $dataVivienda = [];

        foreach ($dataTransaccion as $transaccion) {
            if ($transaccion->tipo == 1) {
                $vivienda = $viviendaModel->find($transaccion->vivienda);
                if ($vivienda) {
                    $dataVivienda[] = $vivienda;
                }
            }
        }

        echo json_encode(['data' => $dataVivienda, 'tipo' => 1]);
    }

    public function propiedadesAlquiladas(){
        $session = session();
        $usuario = $session->get('user')->id;

        $transaccioModel = new \App\Models\TransaccionModel();
        $dataTransaccion = $transaccioModel->busquedaPorUsuario($usuario);

        $viviendaModel = new \App\Models\ViviendaModel();
        $dataVivienda = [];

        foreach ($dataTransaccion as $transaccion) {
            if ($transaccion->tipo == 2) {
                $vivienda = $viviendaModel->find($transaccion->vivienda);
                if ($vivienda) {
                    $dataVivienda[] = $vivienda;
                }
            }
        }

        echo json_encode(['data' => $dataVivienda, 'tipo' => 2]);
    }
}
