<?php
    namespace App\Controllers;

    use CodeIgniter\CLI\Console;
    use CodeIgniter\Exceptions\PageNotFoundException; // Add this line
    class Vivienda extends BaseController {
        
    public function list() {
        $viviendaModel = new \App\Models\ViviendaModel();
        $data['viviendas'] = $viviendaModel->findAll();

        echo view('templates/header')
        .view('vivienda/list', $data)
        .view('templates/footer');

    }

    public function viewInicio() {
        $viviendaModel = new \App\Models\ViviendaModel();
        $userModel = new \App\Models\UserModel();
        $zonaModel = new \App\Models\ZonaModel();

        $dataVivienda['viviendas'] = $viviendaModel->findAll();
        $dataUser['user'] = $userModel->findAll();
        $dataZona['zona'] = $zonaModel->findAll();
    
        return view('templates/header')
        .view('pages/inicio', array_merge($dataVivienda, $dataUser, $dataZona))
        .view('templates/footer');
    }

    public function viewOfertas() {
        $viviendaModel = new \App\Models\ViviendaModel();
        $userModel = new \App\Models\UserModel();
        $zonaModel = new \App\Models\ZonaModel();

        $dataVivienda['viviendas'] = $viviendaModel->findAll();
        $dataUser['user'] = $userModel->findAll();
        $dataZona['zona'] = $zonaModel->findAll();

        return view('templates/header')
        .view('pages/ofertas', array_merge($dataVivienda, $dataUser, $dataZona))
        .view('templates/footer');
    }
    
    public function viewNovedades() {
        $viviendaModel = new \App\Models\ViviendaModel();
        $userModel = new \App\Models\UserModel();
        $zonaModel = new \App\Models\ZonaModel();

        $dataVivienda['viviendas'] = $viviendaModel->findAll();
        $dataUser['user'] = $userModel->findAll();
        $dataZona['zona'] = $zonaModel->findAll();

        return view('templates/header')
        .view('pages/novedades', array_merge($dataVivienda, $dataUser, $dataZona))
        .view('templates/footer');
    }

    public function viewAlta(){
        $viviendaModel = new \App\Models\ViviendaModel();
        $data['viviendas']=$viviendaModel->findAll();

        return view('templates/header') 
        .view('vivienda/upload',$data);
    }

    public function darDeAlta(){
        $session = session();

        if($this->request->getMethod() == "post") {
            $image = $this->request->getFile('imagen');
            if ($image->isValid() && !$image->hasMoved()) {
                $newName = $image->getRandomName();
                $image->move('./img/viviendas', $newName);
            }

            $dataPost = [
                'metros_cuadrados' => $this->request->getPost('metros_cuadrados'),
                'num_habitaciones' => $this->request->getPost('num_habitaciones'),
                'num_baños' => $this->request->getPost('num_banos'),
                'num_garajes' => $this->request->getPost('num_garages'),
                'precio_venta' => $this->request->getPost('precio_venta'),
                'precio_alquiler' => $this->request->getPost('precio_alquiler'),
                'telefono' => $this->request->getPost('telefono'),
                'certificado_energetico' => $this->request->getPost('certificado_energetico'),
                'zona' => $this->request->getPost('zona'),
                'direccion' => $this->request->getPost('direccion'),
                'imagen' => $newName,
                'fecha' => date("Y-m-d"),
                'propietario' => $session->get('user')->id,
            ];

            $viviendaModel = new \App\Models\ViviendaModel();
            $viviendaModel->insert($dataPost);

            return redirect()->to(base_url('/inicio'));
        }

        return redirect()->to(base_url('/alta'));
    }
    
    public function buscar() {
        $dataPost = [
            'selectZona' => $this->request->getPost('selectZona'),
            'opcionSeleccionada' => $this->request->getPost('opcionSeleccionada'),
            'minPrecioCompra' => $this->request->getPost('minPrecioCompra'),
            'maxPrecioCompra' => $this->request->getPost('maxPrecioCompra'),
            'minPrecioAlquiler' => $this->request->getPost('minPrecioAlquiler'),
            'maxPrecioAlquiler' => $this->request->getPost('maxPrecioAlquiler'),
            'minTamano' => $this->request->getPost('minTamano'),
            'maxTamano' => $this->request->getPost('maxTamano'),
            'minHabitaciones' => $this->request->getPost('minHabitaciones'),
            'maxHabitaciones' => $this->request->getPost('maxHabitaciones'),
            'minBanos' => $this->request->getPost('minBanos'),
            'maxBanos' => $this->request->getPost('maxBanos'),
            'minGarages' => $this->request->getPost('minGarages'),
            'maxGarages' => $this->request->getPost('maxGarages'),
            'selectCertificado' => $this->request->getPost('selectCertificado')
        ];

        $viviendaModel = new \App\Models\ViviendaModel();
        $dataVivienda = $viviendaModel->busquedaVivienda($dataPost);

        echo json_encode(['data' => $dataVivienda]);
    }

    public function comprar() {
        if($this->request->getMethod() == "post") {
            $transaccionModel = new \App\Models\TransaccionModel();
            $viviendaModel = new \App\Models\ViviendaModel();
            $session = session();
            $user = $session->get('user');

            $vivienda_id = $this->request->getPost('id');

            $dataPost = [
                'cliente' => $user->id,
                'vivienda' => $this->request->getPost('id'),
                'fecha' => date("Y-m-d"),
                'tipo' => 1
            ];

            $transaccionModel->insert($dataPost);
            $viviendaModel->update($vivienda_id, ['disponible' => 0]);

            echo json_encode(['data' => $dataPost]);
        }
    }

    public function alquilar() {
        if($this->request->getMethod() == "post") {
            $transaccionModel = new \App\Models\TransaccionModel();
            $viviendaModel = new \App\Models\ViviendaModel();

            $session = session();
            $user = $session->get('user');

            $vivienda_id = $this->request->getPost('id');

            $dataPost = [
                'cliente' => $user->id,
                'vivienda' => $this->request->getPost('id'),
                'fecha' => date("Y-m-d"),
                'tipo' => 2
            ];

            $transaccionModel->insert($dataPost);
            $viviendaModel->update($vivienda_id, ['disponible' => 0]);

            echo json_encode(['data' => $dataPost]);
        }
    }

    public function viewEditar() {
        $viviendaModel = new \App\Models\ViviendaModel();

        $id = $this->request->getPost('id');

        $dataVivienda['vivienda'] = $viviendaModel->find($id);

        return view('templates/header') 
        .view('vivienda/editar', $dataVivienda);
    }

    public function editar(){
        $session = session();

        if($this->request->getMethod() == "post") {
            $viviendaModel = new \App\Models\ViviendaModel();

            $id = $this->request->getPost('id');
            $dataVivienda = $viviendaModel->find($id);

            $image = $this->request->getFile('imagen');
            $newName = $dataVivienda->imagen;

            if ($image->isValid() && !$image->hasMoved()) {
                $newName = $image->getRandomName();
                $image->move('./img/viviendas', $newName);

                if ($dataVivienda->imagen != $newName) 
                    unlink('./img/viviendas/' . $dataVivienda->imagen);
            }

            $dataPost = [
                'metros_cuadrados' => $this->request->getPost('metros_cuadrados'),
                'num_habitaciones' => $this->request->getPost('num_habitaciones'),
                'num_baños' => $this->request->getPost('num_banos'),
                'num_garajes' => $this->request->getPost('num_garages'),
                'precio_venta' => $this->request->getPost('precio_venta'),
                'precio_alquiler' => $this->request->getPost('precio_alquiler'),
                'telefono' => $this->request->getPost('telefono'),
                'certificado_energetico' => $this->request->getPost('certificado_energetico'),
                'zona' => $this->request->getPost('zona'),
                'direccion' => $this->request->getPost('direccion'),
                'imagen' => $newName,
                'fecha' => date("Y-m-d"),
                'propietario' => $session->get('user')->id,
            ];

            $viviendaModel->update($id, $dataPost);

            return redirect()->to(base_url('/mis-propiedades'));
        }

        return redirect()->to(base_url('/editarVivienda'));
    }

    public function eliminar() {
        if($this->request->getMethod() == "post") {
            $viviendaModel = new \App\Models\ViviendaModel();

            $id = $this->request->getPost('id');
            $viviendaModel->delete($id);

            return redirect()->to(base_url('/mis-propiedades'));
        }
    }
}