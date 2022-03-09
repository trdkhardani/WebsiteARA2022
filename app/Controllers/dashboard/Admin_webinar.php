<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use App\Models\Model_webinar;
use App\Models\Model_custom;
use App\Models\Model_Account;

class Admin_webinar extends BaseController
{
  public function __construct()
  {
    $this->session = session();
    $this->model_webinar = new Model_webinar();
    $this->model_custom = new Model_custom();
    $this->model_account = new Model_Account();
  }

  public function list()
  {
    //session()->destroy();
    //return redirect()->to("/auth/login");

    // aku gabisa login disini
    $data["lomba"] = "Webinar";
    $data["nama"] = "Admin Webinar";
    $data["tahap"] = "Webinar";
    $data['data'] = $this->model_custom->getall_where("webinar", 1);
    $data['total_peserta'] = $this->model_webinar->countAllResults();
    $data['belum_terkonfirmasi'] = $this->model_custom->count_where("webinar", 0);
    $data['terkonfirmasi'] = $this->model_custom->count_where("webinar", 1);
    return view('dashboard/admin/webinar/list', $data);
  }

  public function konfirmasi()
  {

    $data["lomba"] = "Webinar";
    $data["nama"] = "Admin Webinar";
    $data["tahap"] = "Webinar";
    $data['data'] = $this->model_custom->getall_where("webinar", 0);
    $data['total_peserta'] = $this->model_webinar->countAllResults();
    $data['belum_terkonfirmasi'] = $this->model_custom->count_where("webinar", 0);
    $data['terkonfirmasi'] = $this->model_custom->count_where("webinar", 1);
    return view('dashboard/admin/webinar/konfirmasi', $data);
  }

  public function Reject($id)
  {
    $data = $this->model_custom->get_where('webinar', $id, '_id');
    $this->model_custom->delete_where('webinar', $id);

    $path = 'uploads/webinar/';
    unlink($path . "ig_ara/" . $data[0]->webinar_ig_ara);
    unlink($path . "ig_hmit/" . $data[0]->webinar_ig_hmit);
    /*unlink($path . "subs/" . $data[0]->webinar_subscribe);
    unlink($path . "share_1/" . $data[0]->webinar_share_1);
    unlink($path . "share_2/" . $data[0]->webinar_share_2);

    if ($data[0]->webinar_twibbon) {
      unlink($path . "post_twibbon/" . $data[0]->webinar_twibbon);
    }*/

    if ($data[0]->webinar_post_iot != '-') {
      unlink($path . "post_iot/" . $data[0]->webinar_post_iot);
    }

    if ($data[0]->webinar_post_ctf != '-') {
      unlink($path . "post_ctf/" . $data[0]->webinar_post_ctf);
    }

    if ($data[0]->webinar_event == 'CTF') {
      $event = 'Cyber Security';
    } else if ($data[0]->webinar_event == 'IoT') {
      $event = 'Internet of Things';
    } else {
      $event = 'Cyber Security and Internet of Things';
    }

    $subject = "[Rejected] Webinar {$event}";
    $message = "Dear {$data[0]->webinar_nama} from {$data[0]->webinar_instansi} ,<br>
                <br>
                Thank you for registering for our event, \"Webinar {$event}.\"<br>
                <br>
                unfortunately your requirement is not enough, so please register again in the form <br>
                <br>
                <br>
                --<br>
                Best regards,<br>
                <br>
                A Renewal Agents 2022";
    $this->sendemail($data[0]->webinar_email, $subject, $message);

    $this->session->setFlashdata('msg', 'berhasil menolak peserta');
    return redirect()->to('/dashboard/admin_webinar/konfirmasi');
  }

  public function Accept($id)
  {
    helper('text');

    $password = random_string('alnum', 16);
    $name = random_string('alnum', 8);

    if ($this->model_custom->is_pass_same($password)) {
      return redirect()->to('/dashboard/admin_webinar/Accept/' . $id);
    } else {
      $this->model_custom->updatestatus_where('webinar', $id);
      $data_old = $this->model_custom->get_where('webinar', $id, '_id');
      $data = [
        'account_table'       => 'webinar',
        'account_keterangan'  => $data_old[0]->webinar_email,
        'account_username'    => 'webinar_' . $name . $data_old[0]->webinar_id,
        'account_password'    => password_hash($password, PASSWORD_DEFAULT)
      ];
      $this->model_account->save($data);

      if ($data_old[0]->webinar_event == 'CTF') {
        $event = 'Cyber Security';
        $link1 = "https://chat.whatsapp.com/CtbVlHoKeue78rIWyf0O67";
        $link2 = "https://t.me/+BmojfhGELO45ZWE1";
      } else if ($data_old[0]->webinar_event == 'IoT') {
        $event = 'Internet of Things';
        $link1 = "https://chat.whatsapp.com/IgakcYFMx5jHrhoqcf3ryP";
        $link2 = "https://t.me/+pGftH65OTq1jNDY9";
      } else {
        $event = 'Cyber Security and Internet of Things';
        $link1 = "(Cyber security: https://chat.whatsapp.com/CtbVlHoKeue78rIWyf0O67 or https://t.me/+BmojfhGELO45ZWE1)";
        $link2 = "(Internet of Things: https://chat.whatsapp.com/IgakcYFMx5jHrhoqcf3ryP or https://t.me/+pGftH65OTq1jNDY9)";
      }

      $subject = "[Accepted] Webinar {$event}";
      $message = "Dear {$data_old[0]->webinar_nama} from {$data_old[0]->webinar_instansi} ,<br>
                  <br>
                  Thank you for registering for our event, \"Webinar {$event}.\"<br>
                  <br>
                  This is your account username and password <br>
                  <br>
                  Username : {$data['account_username']}<br>
                  Password : {$password}<br>
                  <br>
                  You can join the following groups for get more information -> {$link1} or {$link2}
                  <br>
                  --<br>
                  Best regards,<br>
                  <br>
                  A Renewal Agents 2022";
      $this->sendemail($data['account_keterangan'], $subject, $message);

      $this->session->setFlashdata('msg', 'berhasil menerima peserta');
      return redirect()->to('/dashboard/admin_webinar/konfirmasi');
    }
  }

  // public function tes()
  // {
  //   $this->model_coba = new model_coba();
  //   $data = [
  //     'account_username' => 'asd', 
  //     'account_table' => 'asd', 
  //     'account_keterangan' => 'asd', 
  //     'account_password' => 'asd'
  //   ];
  //   /*$data = [
  //     'webinar_nama' => 'asd'
  //   ];*/
  //   $this->model_coba->save($data);
  // }
}
