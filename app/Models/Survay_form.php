<?php
namespace App\Models;
use CodeIgniter\Model;

define('BASEPATH', true) OR EXIT('No direct script access allowed');

class Survay_form extends Model{



    protected $table      = 'survay_data';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['name', 'email', 'Fcolor'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;


    public function _construct()
    {
        parent::__construnct();

        $db = \Config\Database::connect();
    }


    public function InserServeryForm($values)
    {
        // $result = $db->select('*')
        // ->from('survay_data');\
        $this->db->table($this->table)->insert($values);
        // $db->insert('survay_data', $values);
        return true;
    }
}