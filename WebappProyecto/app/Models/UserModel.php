<?php
namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true; # db takes care of it
    protected $returnType = 'object'; # 'object' or 'array'
    protected $useSoftDeletes = false; # true if you expect to recover data
    # Fields that can be set during save, insert, or update methods
    protected $allowedFields = ['nombre', 'email', 'password'];
    protected $useTimestamps = false; # no timestamps on inserts and updates
    # Do not use validations rules (for the time being...)
    protected $validationRules = [
        'nombre' => 'required|max_length[20]',
        'email' => 'required|valid_email|is_unique[user.email]',
        'password' => 'required|min_length[4]'
    ];
    protected $validationMessages = [];
    protected $skipValidation = false;


    public function authenticate($email,$pass){
        $user = $this->select('*, rol as role')->where('email', $email)->first();
        if($user && password_verify($pass,$user->password))
            return $user;
        return false;
    }

    public function findUserByEmail($email) {
        return $user = $this->select('*, rol as role')->where('email', $email)->first();
    }
}
