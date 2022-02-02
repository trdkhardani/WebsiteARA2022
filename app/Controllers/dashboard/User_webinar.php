<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;

class User_webinar extends BaseController
{
  public function home()
  {
    $data["lomba"] = "Webinar";
    $data["nama"] = "M Fernando N Sibarani";
    return view('dashboard/user/webinar/home', $data);
  }
}
