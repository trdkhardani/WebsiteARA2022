<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use App\Models\Model_ctf;
use App\Models\Model_custom;
use App\Models\Model_Account;

class Admin_ctf extends BaseController
{
  public function __construct()
  {
    $this->session = session();
    $this->model_ctf = new Model_ctf();
    $this->model_custom = new Model_custom();
    $this->model_account = new Model_Account();
  }
  public function list_team()
  {
    $data["lomba"] = "Capture The Flag";
    $data["nama"] = "Admin CTF";
    $data["tahap"] = "CTF";
    $data['data'] = $this->model_custom->getall_where("ctf", 1);
    $data['total_peserta'] = $this->model_ctf->countAllResults();
    $data['belum_terkonfirmasi'] = $this->model_custom->count_where("ctf", 0);
    $data['terkonfirmasi'] = $this->model_custom->count_where("ctf", 1);
    return view('dashboard/admin/ctf/list_team', $data);
  }

  public function konfirmasi_team()
  {
    $data["lomba"] = "Capture The Flag";
    $data["nama"] = "Admin CTF";
    $data["tahap"] = "CTF";
    $data['data'] = $this->model_custom->getall_where("ctf", 0);
    $data['total_peserta'] = $this->model_ctf->countAllResults();
    $data['belum_terkonfirmasi'] = $this->model_custom->count_where("ctf", 0);
    $data['terkonfirmasi'] = $this->model_custom->count_where("ctf", 1);
    return view('dashboard/admin/ctf/konfirmasi_team', $data);
  }

  public function Reject($id)
  {
    $data = $this->model_custom->get_where('ctf', $id, '_id');
    $this->model_custom->delete_where('ctf', $id);

    $path = 'uploads/ctf/';
    unlink($path . "ig_ara/" . $data[0]->ctf_ig_ara_ketua);
    unlink($path . "ig_hmit/" . $data[0]->ctf_ig_hmit_ketua);
    unlink($path . "ktm/" . $data[0]->ctf_suket_ketua);
    unlink($path . "bukti_bayar/" . $data[0]->ctf_bukti_bayar);

    if (!empty($data[0]->ctf_ig_ara_anggota_1)) {
      unlink($path . "ig_ara/" . $data[0]->ctf_ig_ara_anggota_1);
    }
    if (!empty($data[0]->ctf_ig_hmit_anggota_1)) {
      unlink($path . "ig_hmit/" . $data[0]->ctf_ig_hmit_anggota_1);
    }
    if (!empty($data[0]->ctf_suket_anggota_1)) {
      unlink($path . "ktm/" . $data[0]->ctf_suket_anggota_1);
    }
    if (!empty($data[0]->ctf_ig_ara_anggota_2)) {
      unlink($path . "ig_ara/" . $data[0]->ctf_ig_ara_anggota_2);
    }
    if (!empty($data[0]->ctf_ig_hmit_anggota_2)) {
      unlink($path . "ig_hmit/" . $data[0]->ctf_ig_hmit_anggota_2);
    }
    if (!empty($data[0]->ctf_suket_anggota_2)) {
      unlink($path . "ktm/" . $data[0]->ctf_suket_anggota_2);
    }

    $subject = "[Rejected] Capture The Flag";
    $message = "Dear {$data[0]->ctf_nama_tim} from {$data[0]->ctf_intitusi} ,<br>
                <br>
                Thank you for registering for our event, \"Capture The Flag.\"<br>
                <br>
                unfortunately your requirement is not enough, so please register again in the form <br>
                <br>
                <br>
                --<br>
                Best regards,<br>
                <br>
                A Renewal Agents 2022";
    $this->sendemail($data[0]->ctf_email_ketua, $subject, $message);

    $this->session->setFlashdata('msg', 'berhasil menolak peserta');
    return redirect()->to('/dashboard/admin_ctf/konfirmasi_team');
  }

  public function Accept($id)
  {
    helper('text');

    $password = random_string('alnum', 16);
    $name = random_string('alnum', 8);

    if ($this->model_custom->is_pass_same($password)) {
      return redirect()->to('/dashboard/admin_ctf/Accept/' . $id);
    } else {
      $this->model_custom->updatestatus_where('ctf', $id);
      $data_old = $this->model_custom->get_where('ctf', $id, '_id');
      $data = [
        'account_table'       => 'ctf',
        'account_keterangan'  => $data_old[0]->ctf_nama_tim,
        'account_username'    => 'ctf' . $name . '_' . $data_old[0]->ctf_nama_tim,
        'account_password'    => password_hash($password, PASSWORD_DEFAULT)
      ];
      $this->model_account->save($data);

      $subject = "[Accepted] Capture The Flag";
      $message = "Dear {$data_old[0]->ctf_nama_tim} from {$data_old[0]->ctf_intitusi} ,<br>
                  <br>
                  Thank you for registering for our competition, \"Capture The Flag.\"<br>
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
      $this->sendemail($data_old[0]->ctf_email_ketua, $subject, $message);

      $this->session->setFlashdata('msg', 'berhasil menerima peserta');
      return redirect()->to('/dashboard/admin_ctf/konfirmasi_team');
    }
  }
}
