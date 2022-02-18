<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use App\Models\Model_expo;
use App\Models\Model_custom;
use App\Models\Model_Account;

class Admin_expo extends BaseController
{
  public function __construct()
  {
    $this->session = session();
    $this->model_expo = new Model_expo();
    $this->model_custom = new Model_custom();
    $this->model_account = new Model_Account();
  }
  public function list()
  {
    // session()->destroy();
    // return redirect()->to("home/index");

    // coba diperbaiki lagi ini, diaku pas akses pagenya load terus
    $data["lomba"] = "Expo";
    $data["nama"] = "Admin";
    $data["tahap"] = "Expo";
    $data['data'] = $this->model_custom->getall_where("expo", 1);
    $data['total_peserta'] = $this->model_expo->countAllResults();
    $data['belum_terkonfirmasi'] = $this->model_custom->count_where("expo", 0);
    $data['terkonfirmasi'] = $this->model_custom->count_where("expo", 1);
    return view('dashboard/admin/expo/list', $data);
  }

  public function konfirmasi()
  {
    $data["lomba"] = "Expo";
    $data["nama"] = "Admin";
    $data["tahap"] = "Expo";
    $data['data'] = $this->model_custom->getall_where("expo", 0);
    $data['total_peserta'] = $this->model_expo->countAllResults();
    $data['belum_terkonfirmasi'] = $this->model_custom->count_where("expo", 0);
    $data['terkonfirmasi'] = $this->model_custom->count_where("expo", 1);
    return view('dashboard/admin/expo/konfirmasi', $data);
  }

  public function Reject($id)
  {
    $data = $this->model_custom->get_where('expo', $id, '_id');
    $this->model_custom->delete_where('expo', $id);
  
    $path = 'uploads/expo/';
    unlink($path."follow_ig_ara/".$data[0]->expo_ig_ara);
    unlink($path."follow_ig_hmit/".$data[0]->expo_ig_hmit);
    unlink($path."post_twibbon/".$data[0]->expo_twibbon);
    unlink($path."share_post/".$data[0]->expo_poster);

    $subject = "[Rejected] Expo Technology Information";
    $message = "Dear {$data[0]->expo_nama} from {$data[0]->expo_institusi} ,<br>
                <br>
                Thank you for registering for our event, \"Expo Technology Information.\"<br>
                <br>
                unfortunately your requirement is not enough, so please register again in the form <br>
                <br>
                <br>
                --<br>
                Best regards,<br>
                <br>
                A Renewal Agents 2022";
    $this->sendemail($data[0]->expo_email, $subject, $message);

    $this->session->setFlashdata('msg', 'berhasil menolak peserta');
    return redirect()->to('/dashboard/admin_expo/konfirmasi');
  }

  public function Accept($id)
  {
    helper('text');

    $password = random_string('alnum', 16);
    $name = random_string('alnum', 8);

    if($this->model_custom->is_pass_same($password))
    {
      return redirect()->to('/dashboard/admin_expo/Accept/'.$id);
    }
    else
    {
      $this->model_custom->updatestatus_where('expo', $id);
      $data_old = $this->model_custom->get_where('expo', $id, '_id');
      $data = [
        'account_table'       => 'expo',
        'account_keterangan'  => $data_old[0]->expo_email,
        'account_username'    => 'expo_'.$name.$data_old[0]->expo_id,
        'account_password'    => password_hash($password, PASSWORD_DEFAULT)
      ];
      $this->model_account->save($data);

      $subject = "[Accepted] Expo Technology Information";
      $message = "Dear {$data_old[0]->expo_nama} from {$data_old[0]->expo_institusi} ,<br>
                  <br>
                  Thank you for registering for our event, \"Expo Technology Information.\"<br>
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
      $this->sendemail($data['account_keterangan'], $subject, $message);

      $this->session->setFlashdata('msg', 'berhasil menerima peserta');
      return redirect()->to('/dashboard/admin_expo/konfirmasi');
    }
  }
}
