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
      'active' => 'home',
      'lomba' => 'KTI Internet of Things',
      'nama' => $this->session->get('username'),
      'ketua' => $tim[$this->model_kti_iot->nama_ketua],
      'anggota_1' => $tim[$this->model_kti_iot->nama_anggota_1],
      'anggota_2' => $tim[$this->model_kti_iot->nama_anggota_2],
      'status_penyisihan' => $tim['iot_status_penyisihan'],
      'status_final' => $tim['iot_status_final'],
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
      'active' => 'abstrak',
      'lomba' => 'KTI Internet of Things',
      'nama' => $this->session->get('username'),
      'ketua' => $tim[$this->model_kti_iot->nama_ketua],
      'anggota_1' => $tim[$this->model_kti_iot->nama_anggota_1],
      'anggota_2' => $tim[$this->model_kti_iot->nama_anggota_2],
      'abstrak' => $tim[$this->model_kti_iot->abstrak],
      'status_penyisihan' => $tim['iot_status_penyisihan'],
      'status_final' => $tim['iot_status_final'],
    ];

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
    if (!$this->model_kti_iot->save($data)) {
      // $this->session->setFlashdata('msg', 'abstrak gagal ditambahkan!');
      return redirect()->to('dashboard/user_kti_iot/abstrak')->withInput();
    }

    // $this->session->setFlashdata('msg', 'abstrak berhasil ditambahkan');
    return redirect()->to('dashboard/user_kti_iot/abstrak')->withInput();
  }

  public function full_paper()
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
      'active' => 'full_paper',
      'lomba' => 'KTI Internet of Things',
      'nama' => $this->session->get('username'),
      'ketua' => $tim[$this->model_kti_iot->nama_ketua],
      'anggota_1' => $tim[$this->model_kti_iot->nama_anggota_1],
      'anggota_2' => $tim[$this->model_kti_iot->nama_anggota_2],
      'full_paper' => $tim[$this->model_kti_iot->full_paper],
      'status_penyisihan' => $tim['iot_status_penyisihan'],
      'status_final' => $tim['iot_status_final'],
    ];
    return view('dashboard/user/kti_iot/full_paper', $data);
  }

  public function verify_full_paper()
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
    $abstrak_file = $this->request->getFile('full_paper');
    // Define path
    $abstrak_path = 'uploads/kti_iot/full_paper';
    $renamed_full_paper = $this->moveFile($abstrak_path, $abstrak_file);
    $data = [
      'iot_id' => $tim['iot_id'],
      'iot_kti_paper' => $renamed_full_paper,
    ];
    $this->model_kti_iot->save($data);
    // $this->session->setFlashdata('msg', 'full_paper berhasil ditambahkan');
    return redirect()->to('dashboard/user_kti_iot/full_paper')->withInput();
  }
  public function final()
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
      'active' => 'final',
      'lomba' => 'KTI Internet of Things',
      'nama' => $this->session->get('username'),
      'ketua' => $tim[$this->model_kti_iot->nama_ketua],
      'anggota_1' => $tim[$this->model_kti_iot->nama_anggota_1],
      'anggota_2' => $tim[$this->model_kti_iot->nama_anggota_2],
      'final' => $tim[$this->model_kti_iot->final],
      'status_penyisihan' => $tim['iot_status_penyisihan'],
      'status_final' => $tim['iot_status_final'],
    ];

    // Check apakah lulus final atau tidak
    if ($data['final'])
      return view('dashboard/user/kti_iot/final', $data);
    else
      return redirect()->to('dashboard/user/kti_iot/home');
  }
  public function logout()
  {
    $this->session->destroy();
    return redirect()->to('Auth/login');
  }
}
