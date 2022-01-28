<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;

class User_kti_iot extends BaseController
{
  public function home()
  {
    return view('dashboard/user/kti_iot/home');
  }

  public function abstrak()
  {
    return view('dashboard/user/kti_iot/abstrak');
  }

  // filter dan return ke view yg sesuai
  public function full_paper()
  {
    // return view('dashboard/user/kti_iot/belum_full_paper');
    return view('dashboard/user/kti_iot/bayar_full_paper');
    // return view('dashboard/user/kti_iot/full_paper');
  }

  public function final()
  {
    // return view('dashboard/user/kti_iot/belum_final');
    // return view('dashboard/user/kti_iot/bayar_final');
    return view('dashboard/user/kti_iot/final');
  }
}
