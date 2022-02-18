<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use App\Models\Model_expo;
use App\Models\Model_custom;
use App\Models\Model_Account;

class User_expo extends BaseController
{
  public function __construct()
  {
    $this->session = session();
    $this->model_expo = new Model_expo();
    $this->model_custom = new Model_custom();
    $this->model_account = new Model_Account();
  }

  public function home()
  {
    $data["lomba"] = "Expo";
    $data["nama"] = $this->model_custom->get_where('expo', $this->session->get('keterangan'), '_email')[0]->expo_nama;
    return view('dashboard/user/expo/home', $data);
  }
}
