<?php

namespace App\Controllers;

class Home extends BaseController
{
  public function index()
  {
    $data['title'] = 'Home';
    return view('landing_page/pages/information/home', $data);
  }

  public function registrasi()
  {
    $data['title'] = 'Pilih Registrasi';
    return view('landing_page/pages/auth/registration', $data);
  }

  public function ctf()
  {
    $data['title'] = 'Capture The Flag';
    return view('landing_page/pages/information/ctf', $data);
  }

  public function olimpiade()
  {
    $data['title'] = 'Olimpiade';
    return view('landing_page/pages/information/olimpiade', $data);
  }

  public function iot()
  {
    $data['title'] = 'Internet of Things';
    return view('landing_page/pages/information/iot', $data);
  }

  public function webinar()
  {
    $data['title'] = 'Webinar';
    return view('landing_page/pages/information/webinar', $data);
  }

  public function expo()
  {
    $data['title'] = 'ExpoIT';
    return view('landing_page/pages/information/expo', $data);
  }

  public function tentang_ara()
  {
    return view('landing_page/pages/information/tentang_ara');
  }

  public function logout()
  {
    session()->destroy();
    return redirect()->to('Auth/login');
  }
}
