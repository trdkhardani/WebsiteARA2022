<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;

class User_ctf extends BaseController
{
  public function __construct()
  {
    $this->session = session();
  }
  public function home()
  {
    $data["lomba"] = "Capture The Flag";
    $data["nama"] = "Tim IT'03";
    return view('dashboard/user/ctf/home', $data);
  }

  public function team()
  {
    $data["lomba"] = "Capture The Flag";
    $data["nama"] = "Tim IT'03";
    return view('dashboard/user/ctf/team', $data);
  }
}
