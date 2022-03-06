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
    session();
    $data = [
      'validation' => \Config\Services::validation()
    ];
    return view('auth/regist_ctf', $data);
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
    session();
    $data = [
      'validation' => \Config\Services::validation(),
      'event' => 'Expo IT',
      'waktu' => '20 Maret - 20 April'
    ];
    return view('auth/regist_expo', $data);
    // return view('auth/notyet', $data);
  }

  public function registrasi_webinar()
  {
    session();
    $data = [
      'validation' => \Config\Services::validation(),
      'event' => 'Webinar',
      'waktu' => '16 Maret - 8 April'
    ];
    return view('auth/regist_webinar', $data);
    // return view('auth/notyet', $data);
  }

  public function login()
  {
    session();
    $data = [
      'validation' => \Config\Services::validation(),
    ];
    return view('auth/login');
  }

  public function finish_regist()
  {
    return view('auth/finish');
  }
}
