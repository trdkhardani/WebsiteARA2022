<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;

class User_webinar extends BaseController
{
  public function __construct()
  {
    $this->session = session();
  }
  public function home()
  {
    $data["lomba"] = $this->session->get('role');
    $data["nama"] = "M Fernando N Sibarani";
    return view('dashboard/user/webinar/home', $data);
  }
}
