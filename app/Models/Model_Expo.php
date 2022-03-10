<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_Expo extends Model
{
    // ...
    protected $table = 'expo';
    protected $primaryKey = 'expo_id';
    protected $allowedFields = [
        'expo_nama', 
        'expo_email', 
        'expo_contact', 
        'expo_institusi', 
        'expo_status', 
        'expo_twibbon', 
        'expo_poster', 
        'expo_ig_hmit', 
        'expo_ig_ara', 
        'expo_day',
        'expo_sponsor'
    ];
    protected $useTimestamps = true;
    protected $createdField = 'expo_date_created';
    protected $updatedField = 'expo_date_updated';
}