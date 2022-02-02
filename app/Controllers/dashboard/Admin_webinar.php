<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;

class Admin_webinar extends BaseController
{
  public function list()
  {
    $data["lomba"] = "Webinar";
    $data["nama"] = "Admin";
    $data["tahap"] = "Webinar";
    return view('dashboard/admin/webinar/list', $data);
  }

  public function konfirmasi()
  {
    $data["lomba"] = "Webinar";
    $data["nama"] = "Admin";
    $data["tahap"] = "Webinar";
    return view('dashboard/admin/webinar/konfirmasi', $data);
  }
}
