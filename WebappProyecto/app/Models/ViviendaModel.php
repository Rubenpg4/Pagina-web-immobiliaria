<?php
namespace App\Models;
use CodeIgniter\Model;

class ViviendaModel extends Model {
    protected $table = 'vivienda';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true; # db takes care of it
    protected $returnType = 'object'; # 'object' or 'array'
    protected $useSoftDeletes = false; # true if you expect to recover data

    # Fields that can be set during save, insert, or update methods
    protected $allowedFields = ['propietario', 'zona', 'disponible', 'imagen', 'direccion', 'fecha', 'metros_cuadrados', 'num_habitaciones', 
                                'num_baños', 'num_garajes', 'precio_venta', 'precio_alquiler', 'telefono', 'certificado_energetico', 
                                'novedades', 'ofertas'];
    protected $useTimestamps = false; # no timestamps on inserts and updates

    # Do not use validations rules (for the time being...)
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;

    public function busquedaVivienda($dataPost) {
        $builder = $this->db->table($this->table);
    
        if (!empty($dataPost['selectZona'])) {
            $builder->where('zona', $dataPost['selectZona']);
        }

        if (!empty($dataPost['opcionSeleccionada'])) {
            switch($dataPost['opcionSeleccionada']) {
                case 'ambos':
                    $builder->groupStart()
                            ->where('precio_venta >', 0)
                            ->orWhere('precio_alquiler >', 0)
                            ->groupEnd();
                    break;
                case 'comprar':
                    $builder->where('precio_venta >', 0);
                    break;
                case 'alquilar':
                    $builder->where('precio_alquiler >', 0);
                    break;
            }
        }
        
        if (!empty($dataPost['minPrecioCompra'])) {
            $builder->groupStart()
                    ->where('precio_venta >=', $dataPost['minPrecioCompra'])
                    ->orWhere('precio_venta', 0)
                    ->orWhere('precio_venta IS NULL')
                    ->groupEnd();
        }
    
        if (!empty($dataPost['maxPrecioCompra'])) {
            $builder->groupStart()
                    ->where('precio_venta <=', $dataPost['maxPrecioCompra'])
                    ->orWhere('precio_venta', 0)
                    ->orWhere('precio_venta IS NULL')
                    ->groupEnd();
        }
        
        if (!empty($dataPost['minPrecioAlquiler'])) {
            $builder->groupStart()
                    ->where('precio_alquiler >=', $dataPost['minPrecioAlquiler'])
                    ->orWhere('precio_alquiler', 0)
                    ->orWhere('precio_alquiler IS NULL')
                    ->groupEnd();
        }
        
        if (!empty($dataPost['maxPrecioAlquiler'])) {
            $builder->groupStart()
                    ->where('precio_alquiler <=', $dataPost['maxPrecioAlquiler'])
                    ->orWhere('precio_alquiler', 0)
                    ->orWhere('precio_alquiler IS NULL')
                    ->groupEnd();
        }

        if (!empty($dataPost['minTamano'])) {
            $builder->where('metros_cuadrados >=', $dataPost['minTamano']);
        }
        
        if (!empty($dataPost['maxTamano'])) {
            $builder->where('metros_cuadrados <=', $dataPost['maxTamano']);
        }

        if (!empty($dataPost['minHabitaciones'])) {
            $builder->where('num_habitaciones >=', $dataPost['minHabitaciones']);
        }
        
        if (!empty($dataPost['maxHabitaciones'])) {
            $builder->where('num_habitaciones <=', $dataPost['maxHabitaciones']);
        }

        if (!empty($dataPost['minBanos'])) {
            $builder->where('num_baños >=', $dataPost['minBanos']);
        }
        
        if (!empty($dataPost['maxBanos'])) {
            $builder->where('num_baños <=', $dataPost['maxBanos']);
        }

        if (!empty($dataPost['minGarages'])) {
            $builder->where('num_garajes >=', $dataPost['minGarages']);
        }
        
        if (!empty($dataPost['maxGarages'])) {
            $builder->where('num_garajes <=', $dataPost['maxGarages']);
        }

        if (!empty($dataPost['selectCertificado'])) {
            $builder->where('certificado_energetico', $dataPost['selectCertificado']);
        }
    
        $query = $builder->get();
        return $query->getResult();
    }

    public function busquedaPorUsuario($usuario) {
        $builder = $this->db->table($this->table);
    
        if (!empty($usuario)) {
            $builder->where('propietario', $usuario);
        }
    
        $query = $builder->get();
        return $query->getResult();
    }

}