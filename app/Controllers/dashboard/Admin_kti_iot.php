<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use App\Models\Model_Kti_iot;

class Admin_kti_iot extends BaseController
{
  public function __construct()
  {
    $this->session = session();
    $this->model_kti_iot = new Model_Kti_iot();
  }
  public function list_abstrak()
  {
    // if (!$this->session->get('is_admin')) {
    //   return redirect()->to('/Auth/login');
    // }
    // if (!$this->session->get('username')) {
    //   return redirect()->to('/Auth/login');
    // }
    $data = [
      'lomba' => 'KTI Internet of Things',
      'nama' => 'Admin',
      'tahap' => 'Abstrak',
      'list_tim_abstrak' => $this->model_kti_iot->where('iot_status_penyisihan', 1)->findAll(),
      'terkonfirmasi' => $this->model_kti_iot->where('iot_status_penyisihan', 1)->countAllResults(),
      'belum_terkonfirmasi' => $this->model_kti_iot->where('iot_status_penyisihan', 0)->countAllResults(),
    ];
    // dd($data);
    return view("dashboard/admin/kti_iot/list_abstrak", $data);
  }

  public function konfirmasi_abstrak()
  {
    $data = [
      'lomba' => 'KTI Internet of Things',
      'nama' => 'Admin',
      'tahap' => 'Abstrak',
      'list_tim_abstrak' => $this->model_kti_iot->where('iot_status_penyisihan', 0)->findAll(),
      'terkonfirmasi' => $this->model_kti_iot->where('iot_status_penyisihan', 1)->countAllResults(),
      'belum_terkonfirmasi' => $this->model_kti_iot->where('iot_status_penyisihan', 0)->countAllResults(),
    ];
    return view("dashboard/admin/kti_iot/konfirmasi_abstrak", $data);
  }
  public function verify_konfirmasi_abstrak($id, $status)
  {
    $tim = $this->model_kti_iot->where('iot_id', $id)->first();

    if (1) {
    }
    $data = [
      'iot_id' => $tim['iot_id'],
    ];
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
