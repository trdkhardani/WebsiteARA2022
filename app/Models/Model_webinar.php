<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_webinar extends Model
{
    // ...
    protected $table = 'webinar';
    protected $primaryKey = 'webinar_id';
    protected $allowedFields = [
        'webinar_event',
        'webinar_nama', 
        'webinar_email', 
        'webinar_contact', 
        'webinar_instansi', 
        'webinar_status', 
        'webinar_post_iot',
        'webinar_post_ctf', 
        'webinar_ig_ara', 
        'webinar_ig_hmit', 
        'webinar_subscribe', 
        'webinar_sponsor', 
        'webinar_share_1', 
        'webinar_share_2', 
        'webinar_twibbon'
    ];
    protected $useTimestamps = true;
    protected $createdField = 'webinar_data_created';
    protected $updatedField = 'webinar_data_updated';
}