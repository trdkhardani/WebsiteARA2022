<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class filter_user implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        if(session()->is_admin != false || session()->role == "")
        {
            return redirect()->to('/Auth/login');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        $nocek = strtolower($request->uri->getSegment(2));
        //echo json_encode($nocek);
        if(session()->role == 'ctf' && $nocek != 'user_ctf')
        {
            return redirect()->to('/dashboard/User_ctf/home');
        }
        elseif(session()->role == 'expo' && $nocek != 'user_expo')
        {
            return redirect()->to('/dashboard/User_expo/home');
        }
        elseif(session()->role == 'webinar' && $nocek != 'user_webinar')
        {
            return redirect()->to('/dashboard/User_webinar/home');
        }
        elseif(session()->role == 'kti_iot' && $nocek != 'user_kti_iot')
        {
            return redirect()->to('/dashboard/User_kti_iot/home');
        }
        elseif(session()->role == 'olim' && $nocek != 'user_olim')
        {
            return redirect()->to('/dashboard/User_olim/home');
        }
    }
}