<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;

class Admin_ctf extends BaseController
{
  public function list_team()
  {
    $data["lomba"] = "Capture The Flag";
    $data["nama"] = "Admin";
    $data["tahap"] = "CTF";
    return view('dashboard/admin/ctf/list_team', $data);
  }

  public function konfirmasi_team()
  {
    $data["lomba"] = "Capture The Flag";
    $data["nama"] = "Admin";
    $data["tahap"] = "CTF";
    return view('dashboard/admin/ctf/konfirmasi_team', $data);
  }
}
