<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;

class Admin_expo extends BaseController
{
  public function list()
  {
    $data["lomba"] = "Expo";
    $data["nama"] = "Admin";
    $data["tahap"] = "Expo";
    return view('dashboard/admin/expo/list', $data);
  }

  public function konfirmasi()
  {
    $data["lomba"] = "Expo";
    $data["nama"] = "Admin";
    $data["tahap"] = "Expo";
    return view('dashboard/admin/expo/konfirmasi', $data);
  }
}
