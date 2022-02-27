<?php

namespace App\Controllers\Dashboard;

use App\Models\Model_custom;
use App\Models\Model_Olimpiade;
use App\Controllers\BaseController;
use App\Models\Model_Account;

class Admin_olim extends BaseController
{
  public function __construct()
  {
    $this->session = session();
    $this->model_olim = new Model_Olimpiade();
    $this->model_custom = new Model_custom();
    $this->model_account = new Model_Account();
  }
  public function list_team()
  {
    if (!$this->session->get('is_admin')) {
      return redirect()->to('/Auth/login');
    }
    if (!$this->session->get('username')) {
      return redirect()->to('/Auth/login');
    }
    $data = [
      'lomba' => 'Olimpiade',
      'nama' => "Admin Olimpiade",
      'tahap' => 'Olimpiade',
      'list_tim' => $this->model_olim->where('olim_status', 1)->findAll(),
      'terkonfirmasi' => $this->model_olim->where('olim_status', 1)->countAllResults(),
      'belum_terkonfirmasi' => $this->model_olim->where('olim_status', 0)->countAllResults(),
      'total_peserta' => $this->model_olim->where('olim_status', 0)->countAllResults() + $this->model_olim->where('olim_status', 1)->countAllResults(),
    ];
    return view('dashboard/admin/olimpiade/list_team', $data);
  }

  public function konfirmasi_team()
  {
    if (!$this->session->get('is_admin')) {
      return redirect()->to('/Auth/login');
    }
    if (!$this->session->get('username')) {
      return redirect()->to('/Auth/login');
    }
    $data = [
      'lomba' => 'Olimpiade',
      'nama' => "Admin Olimpiade",
      'tahap' => 'Olimpiade',
      'list_tim' => $this->model_olim->where('olim_status', 0)->findAll(),
      'terkonfirmasi' => $this->model_olim->where('olim_status', 1)->countAllResults(),
      'belum_terkonfirmasi' => $this->model_olim->where('olim_status', 0)->countAllResults(),
      'total_peserta' => $this->model_olim->where('olim_status', 0)->countAllResults() + $this->model_olim->where('olim_status', 1)->countAllResults(),
    ];
    return view('dashboard/admin/olimpiade/konfirmasi_team', $data);
  }

  public function verify_konfirmasi_team($id, $status)
  {
    if (!$this->session->get('is_admin')) {
      return redirect()->to('/Auth/login');
    }
    if (!$this->session->get('username')) {
      return redirect()->to('/Auth/login');
    }
    helper('text');
    $tim = $this->model_olim->where('olim_id', $id)->first();
    if ($status) {
      $password = random_string('alnum', 16);
      $name = random_string('alnum', 8);

      if ($this->model_custom->is_pass_same($password)) {
        return redirect()->to('dashboard/admin_olim/verify_konfirmasi_team/' . $id . '/1');
      } else {
        $data_status = [
          'olim_id' => $tim['olim_id'],
          'olim_status' => 1
        ];
        $this->model_olim->save($data_status);
        $data = [
          'account_table'       => 'olimpiade',
          'account_keterangan'  => $tim['olim_nama_tim'],
          'account_username'    => 'olimpiade' . $name . '_' . $tim['olim_nama_tim'],
          'account_password'    => password_hash($password, PASSWORD_DEFAULT)
        ];
        $this->model_account->save($data);
        $subject = "[Accepted] Olimpiade";
        $message = "Dear {$tim['olim_nama_tim']} from {$tim['olim_institusi']} ,<br>
                  <br>
                  Thank you for registering for our competition, \"Olimpiade.\"<br>
                  <br>
                  This is your account username and password <br>
                  <br>
                  Username : {$data['account_username']}<br>
                  Password : {$password}<br>
                  <br>
                  --<br>
                  Best regards,<br>
                  <br>
                  A Renewal Agents 2022";
        $this->sendemail($tim['olim_email_ketua'], $subject, $message);
        $this->session->setFlashdata('msg', 'berhasil menerima peserta');
      }
    } else {
      $kp_path = 'uploads/olimpiade/kp/';
      $ig_path = 'uploads/olimpiade/ig/';
      $bukti_bayar_path = 'uploads/olimpiade/bukti_bayar/';

      $this->delete_file($kp_path, $tim['olim_suket_ketua']);
      $this->delete_file($kp_path, $tim['olim_suket_anggota_1']);
      $this->delete_file($kp_path, $tim['olim_suket_anggota_2']);

      $this->delete_file($ig_path, $tim['olim_ig_ara_ketua']);
      $this->delete_file($ig_path, $tim['olim_ig_ara_anggota_1']);
      $this->delete_file($ig_path, $tim['olim_ig_ara_anggota_2']);

      $this->delete_file($ig_path, $tim['olim_ig_hmit_ketua']);
      $this->delete_file($ig_path, $tim['olim_ig_hmit_anggota_1']);
      $this->delete_file($ig_path, $tim['olim_ig_hmit_anggota_2']);

      $this->delete_file($bukti_bayar_path, $tim['olim_pembayaran']);

      $this->model_olim->where('olim_id', $id)->delete();
      $subject = "[Rejected] Olimpiade";
      $message = "Dear {$tim['olim_nama_tim']} from {$tim['olim_institusi']} ,<br>
      <br>
      Thank you for registering for our event, \"Olimpiade.\"<br>
      <br>
      unfortunately your requirement is not enough, so please register again in the form <br>
      <br>
      <br>
      --<br>
      Best regards,<br>
      <br>
      A Renewal Agents 2022";
      $this->sendemail($tim['olim_email_ketua'], $subject, $message);
      $this->session->setFlashdata('msg', 'berhasil menolak peserta');
    }
    return redirect()->to('dashboard/admin_olim/konfirmasi_team');
  }
  public function delete_file($path, $filename)
  {
    if (!empty($filename))
      unlink($path . $filename);
    return;
  }
}
