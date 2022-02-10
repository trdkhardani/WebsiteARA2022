<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;

class Admin_olim extends BaseController
{
  public function __construct()
  {
    $this->session = session();
  }
  public function list_team()
  {
    $data["lomba"] = "Olimpiade";
    $data["nama"] = "Admin";
    $data["tahap"] = "Olimpiade";
    return view('dashboard/admin/olimpiade/list_team', $data);
  }

  public function konfirmasi_team()
  {
    $data["lomba"] = "Olimpiade";
    $data["nama"] = "Admin";
    $data["tahap"] = "Olimpiade";
    return view('dashboard/admin/olimpiade/konfirmasi_team', $data);
  }
}
