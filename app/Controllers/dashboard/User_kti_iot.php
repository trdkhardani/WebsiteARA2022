<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;

class User_kti_iot extends BaseController
{
  public function index()
  {
    return view('dashboard/user/kti_iot/home');
  }
}
