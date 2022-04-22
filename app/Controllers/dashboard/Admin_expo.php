<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use App\Models\Model_Expo;
use App\Models\Model_custom;
use App\Models\Model_Account;

ini_set('max_execution_time', 0); 
ini_set('memory_limit','2048M');

class Admin_expo extends BaseController
{
  public function __construct()
  {
    $this->session = session();
    $this->model_expo = new Model_Expo();
    $this->model_custom = new Model_custom();
    $this->model_account = new Model_Account();
  }
  public function list()
  {
    // session()->destroy();
    // return redirect()->to("home/index");

    $data["lomba"] = "Expo";
    $data["nama"] = "Admin Expo IT";
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
    $data["nama"] = "Admin Expo IT";
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
    unlink($path."share_post/".$data[0]->expo_poster);

    /*if ($data[0]->expo_twibbon) {
        unlink($path."post_twibbon/".$data[0]->expo_twibbon);
    }*/

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
                  <br><br>
                  You can join this group for more information: https://chat.whatsapp.com/HAPHHGZRUpuLaFf2Sun0qL
                  <br><br>
                  --<br>
                  Best regards,<br>
                  <br>
                  A Renewal Agents 2022";
      $this->sendemail($data['account_keterangan'], $subject, $message);

      $this->session->setFlashdata('msg', 'berhasil menerima peserta');
      return redirect()->to('/dashboard/admin_expo/konfirmasi');
    }
  }
  
  public function notify()
  {
    $data["lomba"] = "Expo";
    $data["nama"] = "Admin Expo IT";
    $data["tahap"] = "Expo";
    $data["jumlah_day1"] = $this->model_custom->count_column_where('expo', 'day 1', '_day');
    $data["jumlah_day2"] = $this->model_custom->count_column_where('expo', 'day 2', '_day');
    $data["jumlah_dayall"] = $this->model_custom->count_column_where('expo', 'all day', '_day');
    return view('dashboard/admin/expo/notify', $data);
  }

  public function day1()
  {
    $data = $this->model_custom->get_where('expo', 'day 1', '_day');
    foreach($data as $d){
      echo $d->expo_email."<br>";
      $subject = "[Reminder Day 1] Expo Technology Information";
      $message = "Dear {$d->expo_nama} from {$d->expo_institusi} ,<br>
                  <br>
                  Halo ITZen 🥳🥳😄<br><br>

                  Expo IT yang ditunggu-tunggu telah datang nih. Jangan lupa untuk hadir pada day 1 yang bertemakan: Mendorong Inovasi dan Pembangunan Infrastruktur Teknologi untuk Indonesia 🤝🖥🏢. Yuk langsung aja cek link zoom di bawah ini: <br><br><br>

                  Pembicara: Lambang Akbar W., Anis Saidatur R., dan Muhammad Rifaldi <br><br>
                  Hari/Tanggal: 23 April 2022 (Dimulai jam 08.30 WIB) <br><br>
                  Link zoom: https://us02web.zoom.us/j/88144452760?pwd=YkJ5MkR4RkZEVXhhUk15TVpBZnhXZz09 <br><br>
                  Link VBG dan modul: https://drive.google.com/drive/folders/1GSw5fGoD3FYFDRwebU4owepKYRaFIYVU?usp=sharing <br><br><br>

                  Diharapkan peserta untuk menggunakan virtual background yang terlampir pada link di atas! <br><br>

                  Kami tunggu kehadiran kalian 😊dan jangan sampai ketinggalan karena Expo IT day 1 kali ini bakal seru banget!!!😁😄
                  <br><br>
                  --<br>
                  Best regards,<br>
                  <br>
                  A Renewal Agents 2022";
      $this->sendemail($d->expo_email, $subject, $message);
    }
    return redirect()->to('/dashboard/admin_expo/notify');
  }
  
  public function day2()
  {
    $data = $this->model_custom->get_where('expo', 'day 2', '_day');
    foreach($data as $d){
      echo $d->expo_email."<br>";
      $subject = "[Reminder Day 2] Expo Technology Information";
      $message = "Dear {$d->expo_nama} from {$d->expo_institusi} ,<br>
                  <br>
                  Halo ITZen 🥳🥳😄<br><br>

                  Expo IT yang ditunggu-tunggu telah datang nih. Jangan lupa untuk hadir pada day 2 yang bertemakan: Mendorong Inovasi dan Pembangunan Infrastruktur Teknologi untuk Indonesia 🤝🖥🏢. Yuk langsung aja cek link zoom di bawah ini: <br><br><br>

                  Pembicara: Riza Alaudin Syah <br><br>
                  Hari/Tanggal: 24 April 2022 (Dimulai jam 08.30 WIB) <br><br>
                  Link zoom: https://us02web.zoom.us/j/88677513904?pwd=RW91bHJhSEx6dnFScG9uYU94bFA2dz09 <br><br>
                  Link VBG dan modul: https://drive.google.com/drive/folders/1GSw5fGoD3FYFDRwebU4owepKYRaFIYVU?usp=sharing <br><br><br>

                  Diharapkan peserta untuk menggunakan virtual background yang terlampir pada link di atas! <br><br>

                  Kami tunggu kehadiran kalian 😊dan jangan sampai ketinggalan karena Expo IT day 2 kali ini bakal seru banget!!!😁😄
                  <br><br>
                  --<br>
                  Best regards,<br>
                  <br>
                  A Renewal Agents 2022";
      $this->sendemail($d->expo_email, $subject, $message);
    }
    return redirect()->to('/dashboard/admin_expo/notify');
  }

  public function day1_all()
  {
    $data = $this->model_custom->get_where('expo', 'all day', '_day');
    foreach($data as $d){
      echo $d->expo_email."<br>";
      $subject = "[Reminder Day 1] Expo Technology Information";
      $message = "Dear {$d->expo_nama} from {$d->expo_institusi} ,<br>
                  <br>
                  Halo ITZen 🥳🥳😄<br><br>

                  Expo IT yang ditunggu-tunggu telah datang nih. Jangan lupa untuk hadir pada day 1 yang bertemakan: Mendorong Inovasi dan Pembangunan Infrastruktur Teknologi untuk Indonesia 🤝🖥🏢. Yuk langsung aja cek link zoom di bawah ini: <br><br><br>

                  Pembicara: Lambang Akbar W., Anis Saidatur R., dan Muhammad Rifaldi <br><br>
                  Hari/Tanggal: 23 April 2022 (Dimulai jam 08.30 WIB) <br><br>
                  Link zoom: https://us02web.zoom.us/j/88144452760?pwd=YkJ5MkR4RkZEVXhhUk15TVpBZnhXZz09 <br><br>
                  Link VBG dan modul: https://drive.google.com/drive/folders/1GSw5fGoD3FYFDRwebU4owepKYRaFIYVU?usp=sharing <br><br><br>

                  Diharapkan peserta untuk menggunakan virtual background yang terlampir pada link di atas! <br><br>

                  Kami tunggu kehadiran kalian 😊dan jangan sampai ketinggalan karena Expo IT day 1 kali ini bakal seru banget!!!😁😄
                  <br><br>
                  --<br>
                  Best regards,<br>
                  <br>
                  A Renewal Agents 2022";
      $this->sendemail($d->expo_email, $subject, $message);
    
    }
    return redirect()->to('/dashboard/admin_expo/notify');
  }

  public function day2_all()
  {
    $data = $this->model_custom->get_where('expo', 'all day', '_day');
    foreach($data as $d){
      echo $d->expo_email."<br>";
      $subject = "[Reminder Day 2] Expo Technology Information";
      $message = "Dear {$d->expo_nama} from {$d->expo_institusi} ,<br>
                  <br>
                  Halo ITZen 🥳🥳😄<br><br>

                  Expo IT yang ditunggu-tunggu telah datang nih. Jangan lupa untuk hadir pada day 2 yang bertemakan: Mendorong Inovasi dan Pembangunan Infrastruktur Teknologi untuk Indonesia 🤝🖥🏢. Yuk langsung aja cek link zoom di bawah ini: <br><br><br>

                  Pembicara: Riza Alaudin Syah <br><br>
                  Hari/Tanggal: 24 April 2022 (Dimulai jam 08.30 WIB) <br><br>
                  Link zoom: https://us02web.zoom.us/j/88677513904?pwd=RW91bHJhSEx6dnFScG9uYU94bFA2dz09 <br><br>
                  Link VBG dan modul: https://drive.google.com/drive/folders/1GSw5fGoD3FYFDRwebU4owepKYRaFIYVU?usp=sharing <br><br><br>

                  Diharapkan peserta untuk menggunakan virtual background yang terlampir pada link di atas! <br><br>

                  Kami tunggu kehadiran kalian 😊dan jangan sampai ketinggalan karena Expo IT day 2 kali ini bakal seru banget!!!😁😄
                  <br><br>
                  --<br>
                  Best regards,<br>
                  <br>
                  A Renewal Agents 2022";
      $this->sendemail($d->expo_email, $subject, $message);
    }
    return redirect()->to('/dashboard/admin_expo/notify');
  }
}
