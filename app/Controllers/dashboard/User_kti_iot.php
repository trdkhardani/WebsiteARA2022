<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;

class User_kti_iot extends BaseController
{
  public function home()
  {
    $data["lomba"] = "KTI Internet of Things";
    $data["nama"] = "Tim IT'03";
    return view('dashboard/user/kti_iot/home', $data);
  }

  public function abstrak()
  {
    $data["lomba"] = "KTI Internet of Things";
    $data["nama"] = "Tim IT'03";
    return view('dashboard/user/kti_iot/abstrak', $data);
  }

  // filter dan return ke view yg sesuai
  public function full_paper()
  {
    $data["lomba"] = "KTI Internet of Things";
    $data["nama"] = "Tim IT'03";
    // return view('dashboard/user/kti_iot/belum_full_paper', $data);
    // return view('dashboard/user/kti_iot/bayar_full_paper', $data);
    return view('dashboard/user/kti_iot/full_paper', $data);
  }

  public function final()
  {
    $data["lomba"] = "KTI Internet of Things";
    $data["nama"] = "Tim IT'03";
    // return view('dashboard/user/kti_iot/belum_final', $data);
    // return view('dashboard/user/kti_iot/bayar_final', $data);
    return view('dashboard/user/kti_iot/final', $data);
  }
}
