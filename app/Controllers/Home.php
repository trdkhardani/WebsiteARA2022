<?php

namespace App\Controllers;

class Home extends BaseController
{
  public function index()
  {
    return view('landing_page/home');
  }

  public function details()
  {
    return view('landing_page/detail-per-event');
  }

  public function registration()
  {
    return view('landing_page/registration');
  }
}
