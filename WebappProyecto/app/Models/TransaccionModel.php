<?php
namespace App\Models;
use CodeIgniter\Model;

class TransaccionModel extends Model
{
    protected $table = 'transaccion';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true; # db takes care of it
    protected $returnType = 'object'; # 'object' or 'array'
    protected $useSoftDeletes = false; # true if you expect to recover data

    # Fields that can be set during save, insert, or update methods
    protected $allowedFields = ['cliente', 'vivienda', 'fecha', 'tipo'];
    protected $useTimestamps = false; # no timestamps on inserts and updates

    # Do not use validations rules (for the time being...)
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;

    public function busquedaPorUsuario($usuario) {
        $builder = $this->db->table($this->table);
    
        if (!empty($usuario)) {
            $builder->where('cliente', $usuario);
        }
    
        $query = $builder->get();
        return $query->getResult();
    }
}