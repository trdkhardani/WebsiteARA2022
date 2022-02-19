<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use App\Models\Model_webinar;
use App\Models\Model_custom;
use App\Models\Model_Account;

class User_webinar extends BaseController
{
  public function __construct()
  {
    $this->session = session();
    $this->model_webinar = new Model_webinar();
    $this->model_custom = new Model_custom();
    $this->model_account = new Model_Account();
  }
  public function home()
  {
    $data["lomba"] = $this->session->get('role');
    $data["nama"] = $this->model_custom->get_where('webinar', $this->session->get('keterangan'), '_email')[0]->webinar_nama;
    return view('dashboard/user/webinar/home', $data);
  }
}
