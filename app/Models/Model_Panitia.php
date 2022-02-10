<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_Panitia extends Model
{
    // ...
    protected $table = 'panitia_login';
    protected $primaryKey = 'panitia_login_id';
    // protected $allowedFields;
    protected $useTimestamps = true;
    protected $panitia_username = 'panitia_login_username';
    protected $panitia_password = 'panitia_login_password';
    // protected $createdField = 'iot_date_created';
    // protected $updatedField = 'iot_date_updated';
    public function getPanitia($username, $password)
    {
        if ($query = $this->where($this->panitia_username, $username)->first()) {
            if (password_verify($password, $query[$this->panitia_password])) {
                return $query;
            }
        }
        return false;
    }
}
