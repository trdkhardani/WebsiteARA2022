<?php

namespace App\Validation;

use CodeIgniter\HTTP\RequestInterface;
use Config\Mimes;
use Config\Services;

class CustomRules
{
    protected $request;

    public function __construct(?RequestInterface $request = null)
    {
        if ($request === null) {
            $request = Services::request();
        }

        $this->request = $request;
    }
    
    function count_image_4(?string $blank, string $params): bool
    {

        //$param  = explode(',', $params);
        //$name   = array_shift($params);
        $name = $params;

        if (! ($files = $this->request->getFileMultiple($name))) 
        {
            //$files = [$this->request->getFile($name)];
            return false;
        }
        $jml = count($files);

        if($jml == 4)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}


?>