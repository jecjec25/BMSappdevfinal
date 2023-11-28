<?php

namespace App\Models;

use CodeIgniter\Model;

class ResidentModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'residents';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['kind_of_id', 'idNo', 'citizenship', 'picture', 'firstname', 'middlename', 'lastname', 'alias', 'birthplace', 'birthdate', 'age', 'civilstatus', 'gender', 'sitio', 'phone', 'email', 'occupation', 'address', 'is_4ps', 'is_pwd', 'is_senior'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}
