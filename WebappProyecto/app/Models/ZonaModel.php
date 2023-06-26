<?php
namespace App\Models;
use CodeIgniter\Model;

class ZonaModel extends Model {
    protected $table = 'zona';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true; # db takes care of it
    protected $returnType = 'object'; # 'object' or 'array'
    protected $useSoftDeletes = false; # true if you expect to recover data

    # Fields that can be set during save, insert, or update methods
    protected $allowedFields = ['zona'];
    protected $useTimestamps = false; # no timestamps on inserts and updates

    # Do not use validations rules (for the time being...)
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;

    public function busquedaPorVivienda($vivienda) {
        $builder = $this->db->table($this->table);
    
        if (!empty($vivienda)) {
            $builder->where('id', $vivienda);
        }
    
        $query = $builder->get();
        return $query->getResult();
    }
}