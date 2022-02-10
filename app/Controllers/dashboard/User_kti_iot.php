<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use App\Models\Model_Kti_iot;

class User_kti_iot extends BaseController
{
  public function __construct()
  {
    $this->session = session();
    $this->model_kti_iot = new Model_Kti_iot();
  }
  // public function checkSession()
  // {
  // }
  // Memindahkan dan men-generate nama random file
  private function moveFile($path, $file)
  {
    if (!empty($file)) {
      $renamed = $file->getRandomName();
      $file->move($path, $renamed);
      return $renamed;
    }
    // File tidak ada
    return null;
  }
  public function home()
  {
    if (!$this->session->has('username')) {
      return redirect()->to('/Auth/login');
    }
    if ($this->session->get('is_admin') == true) {
      return redirect()->to('/Auth/login');
    }
    $nama_tim = $this->session->get('keterangan');
    // $nama_tim = 'dummy';
    $tim = $this->model_kti_iot->where($this->model_kti_iot->nama_tim, $nama_tim)->first();
    $data = [
      'lomba' => 'KTI Internet of Things',
      'nama' => $this->session->get('username'),
      'ketua' => $tim[$this->model_kti_iot->nama_ketua],
      'anggota_1' => $tim[$this->model_kti_iot->nama_anggota_1],
      'anggota_2' => $tim[$this->model_kti_iot->nama_anggota_2],
    ];
    return view('dashboard/user/kti_iot/home', $data);
  }

  public function abstrak()
  {
    if (!$this->session->has('username')) {
      return redirect()->to('/Auth/login');
    }
    if ($this->session->get('is_admin') == true) {
      return redirect()->to('/Auth/login');
    }
    $nama_tim = $this->session->get('keterangan');
    $tim = $this->model_kti_iot->where($this->model_kti_iot->nama_tim, $nama_tim)->first();
    $data = [
      'lomba' => 'KTI Internet of Things',
      'nama' => $this->session->get('username'),
      'ketua' => $tim[$this->model_kti_iot->nama_ketua],
      'anggota_1' => $tim[$this->model_kti_iot->nama_anggota_1],
      'anggota_2' => $tim[$this->model_kti_iot->nama_anggota_2],
      'abstrak' => $tim[$this->model_kti_iot->abstrak],
    ];
    // Ada flashdata message dari hasil verify, tolong bikinin yg bagus :v 
    return view('dashboard/user/kti_iot/abstrak', $data);
  }
  public function verify_abstrak()
  {
    if (!$this->session->has('username')) {
      return redirect()->to('/Auth/login');
    }
    if ($this->session->get('is_admin') == true) {
      return redirect()->to('/Auth/login');
    }
    $nama_tim = $this->session->get('keterangan');
    $tim = $this->model_kti_iot->where($this->model_kti_iot->nama_tim, $nama_tim)->first();
    // Ambil file abstrak
    $abstrak_file = $this->request->getFile('abstrak');
    // Define path
    $abstrak_path = 'uploads/kti_iot/abstrak';
    $renamed_abstrak_file = $this->moveFile($abstrak_path, $abstrak_file);
    $data = [
      'iot_id' => $tim['iot_id'],
      'iot_abstrak' => $renamed_abstrak_file,
    ];
    $this->model_kti_iot->save($data);
    // Ganti aja kata2nya kalo mau 
    $this->session->setFlashdata('msg', 'abstrak berhasil ditambahkan');
    return redirect()->to('dasboard/User_kti_iot/abstrak')->withInput();
  }
  // filter dan return ke view yg sesuai
  public function full_paper()
  {
    $data["lomba"] = "KTI Internet of Things";
    $data["nama"] = "Tim IT'03";
    // return view('dashboard/user/kti_iot/belum_full_paper', $data);
    // return view('dashboard/user/kti_iot/bayar_full_paper', $data);
    return view('dashboard/user/kti_iot/full_paper', $data);
  }

  public function final()
  {
    $data["lomba"] = "KTI Internet of Things";
    $data["nama"] = "Tim IT'03";
    // return view('dashboard/user/kti_iot/belum_final', $data);
    // return view('dashboard/user/kti_iot/bayar_final', $data);
    return view('dashboard/user/kti_iot/final', $data);
  }
}
