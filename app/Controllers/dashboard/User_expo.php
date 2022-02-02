<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;

class User_expo extends BaseController
{
  public function home()
  {
    $data["lomba"] = "Expo";
    $data["nama"] = "M Fernando N Sibarani";
    return view('dashboard/user/expo/home', $data);
  }
}
