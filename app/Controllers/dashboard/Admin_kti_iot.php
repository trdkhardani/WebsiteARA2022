<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;

class Admin_kti_iot extends BaseController
{
  public function list_abstrak()
  {
    $data["lomba"] = "KTI Internet of Things";
    $data["nama"] = "Admin";
    $data["tahap"] = "Abstrak";
    return view("dashboard/admin/kti_iot/list_abstrak", $data);
  }

  public function konfirmasi_abstrak()
  {
    $data["lomba"] = "KTI Internet of Things";
    $data["nama"] = "Admin";
    $data["tahap"] = "Abstrak";
    return view("dashboard/admin/kti_iot/konfirmasi_abstrak", $data);
  }

  public function list_fullpaper()
  {
    $data["lomba"] = "KTI Internet of Things";
    $data["nama"] = "Admin";
    $data["tahap"] = "Full Paper";
    return view("dashboard/admin/kti_iot/list_fullpaper", $data);
  }

  public function konfirmasi_fullpaper()
  {
    $data["lomba"] = "KTI Internet of Things";
    $data["nama"] = "Admin";
    $data["tahap"] = "Full Paper";
    return view("dashboard/admin/kti_iot/konfirmasi_fullpaper", $data);
  }

  public function list_final()
  {
    $data["lomba"] = "KTI Internet of Things";
    $data["nama"] = "Admin";
    $data["tahap"] = "Final";
    return view("dashboard/admin/kti_iot/list_final", $data);
  }

  public function konfirmasi_final()
  {
    $data["lomba"] = "KTI Internet of Things";
    $data["nama"] = "Admin";
    $data["tahap"] = "Final";
    return view("dashboard/admin/kti_iot/konfirmasi_final", $data);
  }
}
