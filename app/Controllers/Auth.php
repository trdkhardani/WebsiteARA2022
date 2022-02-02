<?php

namespace App\Controllers;

use App\Controllers;

class Auth extends BaseController
{
  public function registrasi_kti()
  {
    return view('auth/regist_kti');
  }

  public function registrasi_ctf()
  {
    return view('auth/regist_ctf');
  }

  public function registrasi_olim()
  {
    return view('auth/regist_olim');
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
    return view('auth/login');
  }

  public function finish_regist()
  {
    return view('auth/finish');
  }
}
