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
      'list_tim_abstrak' => $this->model_kti_iot->where('iot_status_konfirmasi_abstrak', 1)->findAll(),
      'terkonfirmasi' => $this->model_kti_iot->where('iot_status_konfirmasi_abstrak', 1)->countAllResults(),
      'belum_terkonfirmasi' => $this->model_kti_iot->where('iot_status_konfirmasi_abstrak', 0)->countAllResults(),
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
      'list_tim_abstrak' => $this->model_kti_iot->where('iot_status_konfirmasi_abstrak', 0)->findAll(),
      'terkonfirmasi' => $this->model_kti_iot->where('iot_status_konfirmasi_abstrak', 1)->countAllResults(),
      'belum_terkonfirmasi' => $this->model_kti_iot->where('iot_status_konfirmasi_abstrak', 0)->countAllResults(),
    ];
    return view("dashboard/admin/kti_iot/konfirmasi_abstrak", $data);
  }
  public function verify_konfirmasi_abstrak($id, $status)
  {
    $tim = $this->model_kti_iot->where('iot_id', $id)->first();
    // Untuk men-delete file, relatif terhadap folder public
    // unlink('backend/121079.jpg');
    // Jika di accept
    if ($status) {
      $data = [
        'iot_id' => $tim['iot_id'],
        'iot_status_konfirmasi_abstrak' => 1,
        'iot_status_penyisihan' => 1
      ];
      $this->model_kti_iot->save($data);
    } else {
      // Tampung nama file
      $ktm_path = 'uploads/kti_iot/ktm/';
      $ig_follow_path = 'uploads/kti_iot/ig/follow/';
      $ig_share_path = 'uploads/kti_iot/ig/share/';
      $abstrak_path = 'uploads/kti_iot/abstrak/';

      // Delete ktm
      $this->delete_file($ktm_path, $tim['iot_suket_ketua']);
      $this->delete_file($ktm_path, $tim['iot_suket_anggota_1']);
      $this->delete_file($ktm_path, $tim['iot_suket_anggota_2']);

      // Delete ig
      $this->delete_file($ig_follow_path, $tim['iot_ig_ara_ketua']);
      $this->delete_file($ig_follow_path, $tim['iot_ig_ara_anggota_1']);
      $this->delete_file($ig_follow_path, $tim['iot_ig_ara_anggota_2']);

      $this->delete_file($ig_share_path, $tim['iot_story_ketua']);
      $this->delete_file($ig_share_path, $tim['iot_story_anggota_1']);
      $this->delete_file($ig_share_path, $tim['iot_story_anggota_2']);

      // Delete abstrak
      $this->delete_file($abstrak_path, $tim['iot_abstrak']);

      // Delete field di db
      $this->model_kti_iot->where('iot_id', $tim['iot_id'])->delete();
    }
    return redirect()->to('dashboard/Admin_kti_iot/konfirmasi_abstrak');
  }

  public function delete_file($path, $filename)
  {
    unlink($path . $filename);
    return;
  }

  public function list_fullpaper()
  {
    $data = [
      'lomba' => 'KTI Internet of Things',
      'nama' => 'Admin',
      'tahap' => 'Full Paper',
      'list_tim_full_paper' => $this->model_kti_iot->where('iot_status_penyisihan', 1)->findAll(),
      'terkonfirmasi' => $this->model_kti_iot->where('iot_status_konfirmasi_full_paper', 1)->countAllResults(),
      'belum_terkonfirmasi' => $this->model_kti_iot->where('iot_status_konfirmasi_full_paper', 0)->countAllResults(),
    ];
    return view("dashboard/admin/kti_iot/list_fullpaper", $data);
  }

  public function konfirmasi_fullpaper()
  {
    $data = [
      'lomba' => 'KTI Internet of Things',
      'nama' => 'Admin',
      'tahap' => 'Full Paper',
      // Cari daftar tim yang sudah upload bukti bayar full paper
      'list_tim_full_paper' => $this->model_kti_iot->where([
        'iot_status_konfirmasi_full_paper' => 0,
        'iot_pembayaran_full_paper is NOT NULL' => null
      ])->findAll(),
      'terkonfirmasi' => $this->model_kti_iot->where('iot_status_konfirmasi_full_paper', 1)->countAllResults(),
      'belum_terkonfirmasi' => $this->model_kti_iot->where('iot_status_konfirmasi_full_paper', 0)->countAllResults(),
    ];
    return view("dashboard/admin/kti_iot/konfirmasi_fullpaper", $data);
  }

  public function verify_konfirmasi_full_paper()
  {
    $id = $this->request->getVar('id');
    $status = $this->request->getVar('status');
    $tim = $this->model_kti_iot->where('iot_id', $id)->first();
    // Jika di Terima
    if ($status) {
      $data = [
        'iot_id' => $tim['iot_id'],
        'iot_status_konfirmasi_full_paper' => 1
      ];
      $this->model_kti_iot->save($data);
    } else {
      //Jika ditolak, delete file bayar full paper
      $path = 'uploads/kti_iot/bukti_bayar/full_paper/';
      $this->delete_file($path, $tim['iot_pembayaran_full_paper']);
      $data = [
        'iot_id' => $tim['iot_id'],
        'iot_pembayaran_full_paper' => null
      ];
      $this->model_kti_iot->save($data);
    }
    return redirect()->to('dashboard/Admin_kti_iot/konfirmasi_fullpaper');
  }

  public function list_final()
  {
    $data = [
      'lomba' => 'KTI Internet of Things',
      'nama' => 'Admin',
      'tahap' => 'Final',
      'list_tim_full_paper' => $this->model_kti_iot->where('iot_status_final', 1)->findAll(),
      'terkonfirmasi' => $this->model_kti_iot->where('iot_status_konfirmasi_final', 1)->countAllResults(),
      'belum_terkonfirmasi' => $this->model_kti_iot->where('iot_status_konfirmasi_final', 0)->countAllResults(),
    ];
    return view("dashboard/admin/kti_iot/list_final", $data);
  }

  public function konfirmasi_final()
  {
    $data = [
      'lomba' => 'KTI Internet of Things',
      'nama' => 'Admin',
      'tahap' => 'Final',
      'list_tim_full_paper' => $this->model_kti_iot->where('iot_status_final', 0)->findAll(),
      'terkonfirmasi' => $this->model_kti_iot->where('iot_status_konfirmasi_final', 1)->countAllResults(),
      'belum_terkonfirmasi' => $this->model_kti_iot->where('iot_status_konfirmasi_final', 0)->countAllResults(),
    ];
    return view("dashboard/admin/kti_iot/konfirmasi_final", $data);
  }
}
