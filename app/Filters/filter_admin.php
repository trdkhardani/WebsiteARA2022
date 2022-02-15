<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class filter_admin implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        if(session()->is_admin != true)
        {
            return redirect()->to('/Auth/login');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        $nocek = strtolower($request->uri->getSegment(2));
        if(session()->username == 'Admin ctf' && $nocek != 'admin_ctf')
        {
            return redirect()->to('/dashboard/Admin_ctf/list_team');
        }
        elseif(session()->username == 'Admin expo' && $nocek != 'admin_ctf')
        {
            return redirect()->to('/dashboard/Admin_expo/list');
        }
        elseif(session()->username == 'Admin webinar' && $nocek != 'admin_ctf')
        {
            return redirect()->to('/dashboard/Admin_webinar/list');
        }
        elseif(session()->username == 'Admin kti iot' && $nocek != 'admin_ctf')
        {
            return redirect()->to('/dashboard/Admin_kti_iot/list_abstrak');
        }
        elseif(session()->username == 'Admin olim' && $nocek != 'admin_ctf')
        {
            return redirect()->to('/dashboard/Admin_olim/list_team');
        }
    }
}