<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_Account extends Model
{
    // ...
    protected $table = 'account';
    protected $primaryKey = 'account_id';
    protected $allowedFields  = [
        'account_username', 
        'account_table', 
        'account_keterangan', 
        'account_password'
    ];
    protected $account_username = 'account_username';
    protected $account_table = 'account_table';
    protected $account_keterangan = 'account_keterangan';
    protected $account_password = 'account_password';
    
    protected $useTimestamps = true;
    protected $createdField;// = 'iot_date_created';
    protected $updatedField;// = 'iot_date_updated';
    public function getAccount($username, $password)
    {
        if ($query = $this->where($this->account_username, $username)->first()) {
            // Cek password dgn hashed password di db
            if (password_verify($password, $query[$this->account_password])) {
                return $query;
            }
        }
        return false;
    }
}
