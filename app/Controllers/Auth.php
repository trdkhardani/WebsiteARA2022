<?php

namespace App\Controllers;

use App\Controllers;

class Auth extends BaseController
{
  public function registrasi_kti()
  {
    session();
    $data = [
      'validation' => \Config\Services::validation()
    ];
    return view('auth/regist_kti', $data);
  }

  public function registrasi_ctf()
  {
    return view('auth/regist_ctf');
  }

  public function registrasi_olim()
  {
    session();
    $data = [
      'validation' => \Config\Services::validation()
    ];
    return view('auth/regist_olim', $data);
  }

  public function registrasi_expo()
  {
    return view('auth/regist_expo');
  }

  public function registrasi_webinar()
  {
    return view('auth/regist_webinar');
  }

  public function login()
  {
    session();
    $data = [
      'validation' => \Config\Services::validation()
    ];
    return view('auth/login');
  }

  public function finish_regist()
  {
    return view('auth/finish');
  }
}
