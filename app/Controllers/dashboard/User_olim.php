<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;

class User_olim extends BaseController
{
  public function __construct()
  {
    $this->session = session();
  }
  public function home()
  {
    $data["lomba"] = "Olimpiade";
    $data["nama"] = "Tim IT'03";
    return view('dashboard/user/olimpiade/home', $data);
  }

  public function team()
  {
    $data["lomba"] = "Olimpiade";
    $data["nama"] = "Tim IT'03";
    return view('dashboard/user/olimpiade/team', $data);
  }
}
