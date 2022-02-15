<?php

namespace App\Controllers;

use App\Controllers;
//use App\Controllers\email_controller;
use App\Models\Model_Account;
use App\Models\Model_Kti_iot;
use App\Models\Model_Olimpiade;
use App\Models\Model_ctf;
use App\Models\Model_expo;
use App\Models\Model_webinar;
use App\Models\Model_Panitia;
use Config\Services;

class Verify extends BaseController
{
    public function __construct()
    {
        $this->session = session();
        $this->model_olimpiade = new Model_Olimpiade();
        $this->model_kti = new Model_Kti_iot();
        $this->model_ctf = new Model_ctf();
        $this->model_webinar = new Model_webinar();
        $this->model_expo = new Model_Expo();
        $this->model_panitia = new Model_Panitia();
        $this->model_account = new Model_Account();
        //$this->email_controller = new email_controller();
    }
    public function verify_registrasi_kti()
    {
        // Rules validasi dan custom error message
        $fieldError = 'Field harus diisi';
        $imgSizeError = 'Melebihi batas max 1mb';
        $imgTypeError = 'File bukan gambar';
        $validation_rules = [
            'nama_tim' => [
                'label' => 'nama_tim',
                'rules' => 'required|is_unique[kti_iot.iot_nama_tim]',
                'errors' => [
                    'required' => $fieldError,
                    'is_unique' => 'nama tim sudah ada'
                ],
            ],
            'asal_institusi' => [
                'label' => 'asal_institusi',
                'rules' => 'required',
                'errors' => [
                    'required' => $fieldError
                ]
            ],
            'nama_ketua' => [
                'label' => 'nama_ketua',
                'rules' => 'required',
                'errors' => [
                    'required' => $fieldError
                ]
            ],
            'email_ketua' => [
                'label' => 'email_ketua',
                'rules' => 'required|is_unique[kti_iot.iot_email_ketua]',
                'errors' => [
                    'required' => $fieldError,
                    'is_unique' => 'email sudah terpakai'
                ]
            ],
            'wa_ketua' => [
                'label' => 'wa_ketua',
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => $fieldError,
                    'numeric' => 'masukkan
                     no yang benar'
                ]
            ],
            'ktm_ketua' => [
                'label' => 'ktm_ketua',
                'rules' => 'max_size[ktm_ketua,1024]|is_image[ktm_ketua]',
                'errors' => [
                    'max_size' => $imgSizeError,
                    'is_image' => $imgTypeError
                ]
            ],
            'ig_ara_ketua' => [
                'label' => 'ig_ara_ketua',
                'rules' => 'max_size[ig_ara_ketua,1024]|is_image[ig_ara_ketua]',
                'errors' => [
                    'max_size' => $imgSizeError,
                    'is_image' => $imgTypeError
                ]
            ],
            'ig_hmit_ketua' => [
                'label' => 'ig_hmit_ketua',
                'rules' => 'max_size[ig_hmit_ketua,1024]|is_image[ig_hmit_ketua]',
                'errors' => [
                    'max_size' => $imgSizeError,
                    'is_image' => $imgTypeError
                ]
            ],
            'share_post_ketua' => [
                'label' => 'share_post_ketua',
                'rules' => 'max_size[share_post_ketua,1024]|is_image[share_post_ketua]',
                'errors' => [
                    'max_size' => $imgSizeError,
                    'is_image' => $imgTypeError
                ]
            ],
            // 'nama_anggota_1' => [
            //     'label' => 'nama_anggota_1',
            //     'rules' => 'required',
            //     'errors' => [
            //         'required' => $fieldError
            //     ]
            // ],
            'ktm_anggota_1' => [
                'label' => 'ktm_anggota_1',
                'rules' => 'max_size[ktm_anggota_1,1024]|is_image[ktm_anggota_1]',
                'errors' => [
                    'max_size' => $imgSizeError,
                    'is_image' => $imgTypeError
                ]
            ],
            'ig_ara_anggota_1' => [
                'label' => 'ig_ara_anggota_1',
                'rules' => 'max_size[ig_ara_anggota_1,1024]|is_image[ig_ara_anggota_1]',
                'errors' => [
                    'max_size' => $imgSizeError,
                    'is_image' => $imgTypeError
                ]
            ],
            'ig_hmit_anggota_1' => [
                'label' => 'ig_hmit_anggota_1',
                'rules' => 'max_size[ig_hmit_anggota_1,1024]|is_image[ig_hmit_anggota_1]',
                'errors' => [
                    'max_size' => $imgSizeError,
                    'is_image' => $imgTypeError
                ]
            ],
            'share_post_anggota_1' => [
                'label' => 'share_post_anggota_1',
                'rules' => 'max_size[share_post_anggota_1,1024]|is_image[share_post_anggota_1]',
                'errors' => [
                    'max_size' => $imgSizeError,
                    'is_image' => $imgTypeError
                ]
            ],
            'ktm_anggota_2' => [
                'label' => 'ktm_anggota_2',
                'rules' => 'max_size[ktm_anggota_2,1024]|is_image[ktm_anggota_2]',
                'errors' => [
                    'max_size' => $imgSizeError,
                    'is_image' => $imgTypeError
                ]
            ],
            'ig_ara_anggota_2' => [
                'label' => 'ig_ara_anggota_2',
                'rules' => 'max_size[ig_ara_anggota_2,1024]|is_image[ig_ara_anggota_2]',
                'errors' => [
                    'max_size' => $imgSizeError,
                    'is_image' => $imgTypeError
                ]
            ],
            'ig_hmit_anggota_2' => [
                'label' => 'ig_hmit_anggota_2',
                'rules' => 'max_size[ig_hmit_anggota_2,1024]|is_image[ig_hmit_anggota_2]',
                'errors' => [
                    'max_size' => $imgSizeError,
                    'is_image' => $imgTypeError
                ]
            ],
            'share_post_anggota_2' => [
                'label' => 'share_post_anggota_2',
                'rules' => 'max_size[share_post_anggota_2,1024]|is_image[share_post_anggota_2]',
                'errors' => [
                    'max_size' => $imgSizeError,
                    'is_image' => $imgTypeError
                ]
            ],

        ];

        if (!$this->validate($validation_rules)) {
            return redirect()->to('/Auth/registrasi_kti')->withInput();
        }
        // Ambil files
        // Ketua
        $ktm_ketua = $this->request->getFile('ktm_ketua');
        $ig_ara_ketua = $this->request->getFile('ig_ara_ketua');
        $ig_hmit_ketua = $this->request->getFile('ig_hmit_ketua');
        $share_post_ketua = $this->request->getFile('share_post_ketua');

        // Anggota 1
        $ktm_anggota_1 = $this->request->getFile('ktm_anggota_1');
        $ig_ara_anggota_1 = $this->request->getFile('ig_ara_anggota_1');
        $ig_hmit_anggota_1 = $this->request->getFile('ig_hmit_anggota_1');
        $share_post_anggota_1 = $this->request->getFile('share_post_anggota_1');
        // Anggota 2
        $ktm_anggota_2 = $this->request->getFile('ktm_anggota_2');
        $ig_ara_anggota_2 = $this->request->getFile('ig_ara_anggota_2');
        $ig_hmit_anggota_2 = $this->request->getFile('ig_hmit_anggota_2');
        $share_post_anggota_2 = $this->request->getFile('share_post_anggota_2');

        // Memindahkan file ke path masing2
        // Define path
        $ig_follow_path = 'uploads/kti_iot/ig/follow';
        $ig_share_path = 'uploads/kti_iot/ig/share';
        $ktm_path = 'uploads/kti_iot/ktm';
        // Hitung anggota
        $jumlahAnggota = 1;
        // Ketua
        $renamed_ktm_ketua = $this->moveFile($ktm_path, $ktm_ketua);
        $renamed_ig_ara_ketua = $this->moveFile($ig_follow_path, $ig_ara_ketua);
        $renamed_ig_hmit_ketua = $this->moveFile($ig_follow_path, $ig_hmit_ketua);
        $renamed_share_ketua = $this->moveFile($ig_share_path, $share_post_ketua);

        // Anggota 1 
        $nama_anggota_1 = $this->request->getVar('nama_anggota_1');
        $renamed_ktm_anggota_1 = null;
        $renamed_ig_ara_anggota_1 = null;
        $renamed_ig_hmit_anggota_1 = null;
        $renamed_share_anggota_1 = null;
        if (!empty($nama_anggota_1)) {
            $jumlahAnggota++;
            $renamed_ktm_anggota_1 = $this->moveFile($ktm_path, $ktm_anggota_1);
            $renamed_ig_ara_anggota_1 = $this->moveFile($ig_follow_path, $ig_ara_anggota_1);
            $renamed_ig_hmit_anggota_1 = $this->moveFile($ig_follow_path, $ig_hmit_anggota_1);
            $renamed_share_anggota_1 = $this->moveFile($ig_share_path, $share_post_anggota_1);
        }

        // Anggota 2
        $nama_anggota_2 = $this->request->getVar('nama_anggota_2');
        $renamed_ktm_anggota_2 = null;
        $renamed_ig_ara_anggota_2 = null;
        $renamed_ig_hmit_anggota_2 = null;
        $renamed_share_anggota_2 = null;
        if (!empty($nama_anggota_2)) {
            $jumlahAnggota++;
            $renamed_ktm_anggota_2 = $this->moveFile($ktm_path, $ktm_anggota_2);
            $renamed_ig_ara_anggota_2 = $this->moveFile($ig_follow_path, $ig_ara_anggota_2);
            $renamed_ig_hmit_anggota_2 = $this->moveFile($ig_follow_path, $ig_hmit_anggota_2);
            $renamed_share_anggota_2 = $this->moveFile($ig_share_path, $share_post_anggota_2);
        }

        // Hitung anggota

        // Tampung data sesuai field di db
        $data_kti = [
            'iot_nama_tim' => $this->request->getVar('nama_tim'),
            'iot_jumlah_anggota' => $jumlahAnggota,
            'iot_email_ketua' => $this->request->getVar('email_ketua'),
            'iot_nama_ketua' => $this->request->getVar('nama_ketua'),
            'iot_nama_anggota_1' => $nama_anggota_1,
            'iot_nama_anggota_2' => $nama_anggota_2,
            'iot_suket_ketua' => $renamed_ktm_ketua,
            'iot_suket_anggota_1' => $renamed_ktm_anggota_1,
            'iot_suket_anggota_2' => $renamed_ktm_anggota_2,
            'iot_contact' => $this->request->getVar('wa_ketua'),
            'iot_institusi' => $this->request->getVar('asal_institusi'),
            'iot_story_ketua' => $renamed_share_ketua,
            'iot_story_anggota_1' => $renamed_share_anggota_1,
            'iot_story_anggota_2' => $renamed_share_anggota_2,
            'iot_ig_ara_ketua' => $renamed_ig_ara_ketua,
            'iot_ig_ara_anggota_1' => $renamed_ig_ara_anggota_1,
            'iot_ig_ara_anggota_2' => $renamed_ig_ara_anggota_2,
            'iot_ig_hmit_ketua' => $renamed_ig_hmit_ketua,
            'iot_ig_hmit_anggota_1' => $renamed_ig_hmit_anggota_1,
            'iot_ig_hmit_anggota_2' => $renamed_ig_hmit_anggota_2,
            'iot_abstrak' => null,
            'iot_kti_paper' => null,
            'iot_status_penyisihan' => 0,
            'iot_status_final' => 0,
            'iot_pembayaran_full_paper' => null,
            'iot_pembayaran_final' => null,
            'iot_status_konfirmasi_abstrak' => 0,
            'iot_status_konfirmasi_full_paper' => 0,
            'iot_status_konfirmasi_final' => 0
        ];

        //template email isi aja subject sama messagenya
        //$subject;
        //$message;
        //$this->sendemail($data['iot_email_ketua'], $message, $subject);

        // Insert ke db dan redirect ke finish regist
        $this->model_kti->save($data_kti);
        return redirect()->to('/Auth/finish_regist');
    }

    public function verify_registrasi_ctf()
    {
        $rules = [
            'nama_tim'  => [
                'label'     => 'nama_tim',
                'rules'     => 'required|is_unique[ctf.ctf_nama_tim]',
                'errors'    => [
                    'required'  => 'nama tim harus diisi',
                    'is_unique' => 'nama tim sudah terdaftar, silahkan isi dengan nama tim yang lain'
                ]
            ],
            'asal_institusi'  => [
                'label'     => 'asal_institusi',
                'rules'     => 'required',
                'errors'    => [
                    'required'  => 'asal institusi tim harus diisi'
                ]
            ],
            'nama_ketua'  => [
                'label'     => 'nama_ketua',
                'rules'     => 'required',
                'errors'    => [
                    'required'  => 'nama ketua tim harus diisi'
                ]
            ],
            'email_ketua'  => [
                'label'     => 'email_ketua',
                'rules'     => 'required|is_unique[ctf.ctf_email_ketua]',
                'errors'    => [
                    'required'  => 'email ketua tim harus diisi',
                    'is_unique' => 'email tersebut sudah terdaftar, silahkan isi email yang lain'
                ]
            ],
            'wa_ketua'  => [
                'label'     => 'wa_ketua',
                'rules'     => 'required|numeric',
                'errors'    => [
                    'required'  => 'whatsapp ketua harus diisi',
                    'numeric'   => 'harap isi dengan nomer yang benar'
                ]
            ],
            'ktm_ketua'  => [
                'label'     => 'ktm_ketua',
                'rules'     => 'uploaded[ktm_ketua]|is_image[ktm_ketua]|max_size[ktm_ketua, 1024]',
                'errors'    => [
                    'uploaded'  => 'field harus diisi',
                    'is_image'  => 'harap isi dengan file gambar',
                    'max_size'  => 'ukuran maksimal gambar adalah 1024 kb'
                ]
            ],
            'ig_ara_ketua'  => [
                'label'     => 'ig_ara_ketua',
                'rules'     => 'uploaded[ig_ara_ketua]|is_image[ig_ara_ketua]|max_size[ig_ara_ketua, 1024]',
                'errors'    => [
                    'uploaded'  => 'field harus diisi',
                    'is_image'  => 'harap isi dengan file gambar',
                    'max_size'  => 'ukuran maksimal gambar adalah 1024 kb'
                ]
            ],
            'ig_hmit_ketua'  => [
                'label'     => 'ig_hmit_ketua',
                'rules'     => 'uploaded[ig_hmit_ketua]|is_image[ig_hmit_ketua]|max_size[ig_hmit_ketua, 1024]',
                'errors'    => [
                    'uploaded'  => 'field harus diisi',
                    'is_image'  => 'harap isi dengan file gambar',
                    'max_size'  => 'ukuran maksimal gambar adalah 1024 kb'
                ]
            ],
            'ktm_anggota_1'  => [
                'label'     => 'ktm_anggota_1',
                'rules'     => 'is_image[ktm_anggota_1]|max_size[ktm_anggota_1, 1024]',
                'errors'    => [
                    'is_image'  => 'harap isi dengan file gambar',
                    'max_size'  => 'ukuran maksimal gambar adalah 1024 kb'
                ]
            ],
            'ig_ara_anggota_1'  => [
                'label'     => 'ig_ara_anggota_1',
                'rules'     => 'is_image[ig_ara_anggota_1]|max_size[ig_ara_anggota_1, 1024]',
                'errors'    => [
                    'is_image'  => 'harap isi dengan file gambar',
                    'max_size'  => 'ukuran maksimal gambar adalah 1024 kb'
                ]
            ],
            'ig_hmit_anggota_1'  => [
                'label'     => 'ig_hmit_anggota_1',
                'rules'     => 'is_image[ig_hmit_anggota_1]|max_size[ig_hmit_anggota_1, 1024]',
                'errors'    => [
                    'is_image'  => 'harap isi dengan file gambar',
                    'max_size'  => 'ukuran maksimal gambar adalah 1024 kb'
                ]
            ],
            'ktm_anggota_2'  => [
                'label'     => 'ktm_anggota_2',
                'rules'     => 'is_image[ktm_anggota_2]|max_size[ktm_anggota_2, 1024]',
                'errors'    => [
                    'is_image'  => 'harap isi dengan file gambar',
                    'max_size'  => 'ukuran maksimal gambar adalah 1024 kb'
                ]
            ],
            'ig_ara_anggota_2'  => [
                'label'     => 'ig_ara_anggota_2',
                'rules'     => 'is_image[ig_ara_anggota_2]|max_size[ig_ara_anggota_2, 1024]',
                'errors'    => [
                    'is_image'  => 'harap isi dengan file gambar',
                    'max_size'  => 'ukuran maksimal gambar adalah 1024 kb'
                ]
            ],
            'ig_hmit_anggota_2'  => [
                'label'     => 'ig_hmit_anggota_2',
                'rules'     => 'is_image[ig_hmit_anggota_2]|max_size[ig_hmit_anggota_2, 1024]',
                'errors'    => [
                    'is_image'  => 'harap isi dengan file gambar',
                    'max_size'  => 'ukuran maksimal gambar adalah 1024 kb'
                ]
            ],
            'bukti_bayar'  => [
                'label'     => 'bukti_bayar',
                'rules'     => 'uploaded[bukti_bayar]|is_image[bukti_bayar]|max_size[bukti_bayar, 1024]',
                'errors'    => [
                    'uploaded'  => 'field harus diisi',
                    'is_image'  => 'harap isi dengan file gambar',
                    'max_size'  => 'ukuran maksimal gambar adalah 1024 kb'
                ]
            ]
        ];

        if (!$this->validate($rules)) {
            $validation = \Config\Services::validation();
            return redirect()->to('auth/registrasi_ctf')->withInput();
        }
        
        if(empty($this->request->getVar('nama_anggota_1')))
        {
            $data = [
                'ctf_nama_tim'          => $this->request->getVar('nama_tim'),
                'ctf_jumlah_anggota'    => 1, 
                'ctf_email_ketua'      => $this->request->getVar('email_ketua'), 
                'ctf_nama_ketua'        => $this->request->getVar('nama_ketua'), 
                'ctf_suket_ketua'       => $this->moveFile('uploads/ctf/ktm', $this->request->getFile('ktm_ketua')),  
                'ctf_ig_ara_ketua'      => $this->moveFile('uploads/ctf/ig_ara', $this->request->getFile('ig_ara_ketua')),
                'ctf_ig_hmit_ketua'     => $this->moveFile('uploads/ctf/ig_hmit', $this->request->getFile('ig_hmit_ketua')),
                'ctf_intitusi'          => $this->request->getVar('asal_institusi'), 
                'ctf_contact'           => $this->request->getVar('wa_ketua'), 
                'ctf_status_final'      => 0,
                'ctf_bukti_bayar'       => $this->moveFile('uploads/ctf/bukti_bayar', $this->request->getFile('bukti_bayar')), 
                'ctf_status'            => 0
            ];
        }
        else if(!empty($this->request->getVar('nama_anggota_2')))
        {
            $data = [
                'ctf_jumlah_anggota'    => 3,
                'ctf_nama_anggota_2'    => $this->request->getVar('nama_anggota_2'),
                'ctf_suket_anggota_2'   => $this->moveFile('uploads/ctf/ktm', $this->request->getFile('ktm_anggota_2')),
                'ctf_ig_ara_anggota_2'  => $this->moveFile('uploads/ctf/ig_ara', $this->request->getFile('ig_ara_anggota_2')),
                'ctf_ig_hmit_anggota_2' => $this->moveFile('uploads/ctf/ig_hmit', $this->request->getFile('ig_hmit_anggota_2')),
                'ctf_nama_tim'          => $this->request->getVar('nama_tim'), 
                'ctf_email_ketua'       => $this->request->getVar('email_ketua'), 
                'ctf_nama_ketua'        => $this->request->getVar('nama_ketua'), 
                'ctf_nama_anggota_1'    => $this->request->getVar('nama_anggota_1'), 
                'ctf_suket_ketua'       => $this->moveFile('uploads/ctf/ktm', $this->request->getFile('ktm_ketua')), 
                'ctf_suket_anggota_1'   => $this->moveFile('uploads/ctf/ktm', $this->request->getFile('ktm_anggota_1')),  
                'ctf_ig_ara_ketua'      => $this->moveFile('uploads/ctf/ig_ara', $this->request->getFile('ig_ara_ketua')),
                'ctf_ig_hmit_ketua'     => $this->moveFile('uploads/ctf/ig_hmit', $this->request->getFile('ig_hmit_ketua')),
                'ctf_ig_ara_anggota_1'  => $this->moveFile('uploads/ctf/ig_ara', $this->request->getFile('ig_ara_anggota_1')), 
                'ctf_ig_hmit_anggota_1' => $this->moveFile('uploads/ctf/ig_hmit', $this->request->getFile('ig_hmit_anggota_1')),  
                'ctf_intitusi'          => $this->request->getVar('asal_institusi'), 
                'ctf_contact'           => $this->request->getVar('wa_ketua'), 
                'ctf_status_final'      => 0,
                'ctf_bukti_bayar'       => $this->moveFile('uploads/ctf/bukti_bayar', $this->request->getFile('bukti_bayar')),
                'ctf_status'            => 0
            ];
        } else {
            $data = [
                'ctf_nama_tim'          => $this->request->getVar('nama_tim'), 
                'ctf_email_ketua'       => $this->request->getVar('email_ketua'), 
                'ctf_nama_ketua'        => $this->request->getVar('nama_ketua'), 
                'ctf_nama_anggota_1'    => $this->request->getVar('nama_anggota_1'), 
                'ctf_suket_ketua'       => $this->moveFile('uploads/ctf/ktm', $this->request->getFile('ktm_ketua')), 
                'ctf_suket_anggota_1'   => $this->moveFile('uploads/ctf/ktm', $this->request->getFile('ktm_anggota_1')),  
                'ctf_ig_ara_ketua'      => $this->moveFile('uploads/ctf/ig_ara', $this->request->getFile('ig_ara_ketua')),
                'ctf_ig_hmit_ketua'     => $this->moveFile('uploads/ctf/ig_hmit', $this->request->getFile('ig_hmit_ketua')),
                'ctf_ig_ara_anggota_1'  => $this->moveFile('uploads/ctf/ig_ara', $this->request->getFile('ig_ara_anggota_1')), 
                'ctf_ig_hmit_anggota_1' => $this->moveFile('uploads/ctf/ig_hmit', $this->request->getFile('ig_hmit_anggota_1')), 
                'ctf_intitusi'          => $this->request->getVar('asal_institusi'), 
                'ctf_contact'           => $this->request->getVar('wa_ketua'), 
                'ctf_status_final'      => 0,
                'ctf_bukti_bayar'       => $this->moveFile('uploads/ctf/bukti_bayar', $this->request->getFile('bukti_bayar')),
                'ctf_status'            => 0,
                'ctf_jumlah_anggota'    => 2
            ];
        }

        //template email isi aja subject sama messagenya
        $subject = "[Confirmation] Capture the Flag";
        $message = "Dear {$data['ctf_nama_tim']} from {$data['ctf_intitusi']} ,</br>
        </br>
        Thank you for registering for our event, \"Capture the Flag.\"<br>
        <br>
        Hereby, we've received your submission. We'll check the completeness of the requirements that have been submitted.<br>
        <br>
        This is the confirmation email, and you will receive an invitation email one day before the event is held.<br>
        <br>
        Thank you.<br>
        <br>
        --<br>
        Best regards,<br>
        <br>
        A Renewal Agents 2022";
        $this->sendemail($data['ctf_email_ketua'], $subject, $message);

        $this->model_ctf->save($data);
        return redirect()->to('/Auth/finish_regist');
    }

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
    public function verify_registrasi_olim()
    {
        // Rules validasi dan custom error message
        $fieldError = 'Field harus diisi';
        $imgSizeError = 'Melebihi batas max 1mb';
        $imgTypeError = 'File bukan gambar';
        $validation_rules = [
            'nama_tim' => [
                'label' => 'nama_tim',
                'rules' => 'required|is_unique[olimpiade.olim_nama_tim]',
                'errors' => [
                    'required' => $fieldError,
                    'is_unique' => 'nama tim sudah ada'
                ],
            ],
            'asal_sekolah' => [
                'label' => 'asal_sekolah',
                'rules' => 'required',
                'errors' => [
                    'required' => $fieldError
                ]
            ],
            'nama_ketua' => [
                'label' => 'nama_ketua',
                'rules' => 'required',
                'errors' => [
                    'required' => $fieldError
                ]
            ],
            'email_ketua' => [
                'label' => 'email_ketua',
                'rules' => 'required|is_unique[olimpiade.olim_email_ketua]',
                'errors' => [
                    'required' => $fieldError,
                    'is_unique' => 'email sudah terpakai'
                ]
            ],
            'wa_ketua' => [
                'label' => 'wa_ketua',
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => $fieldError,
                    'numeric' => 'masukkan
                     no yang benar'
                ]
            ],
            'kp_ketua' => [
                'label' => 'kp_ketua',
                'rules' => 'max_size[kp_ketua,1024]|is_image[kp_ketua]',
                'errors' => [
                    'max_size' => $imgSizeError,
                    'is_image' => $imgTypeError
                ]
            ],
            'ig_ara_ketua' => [
                'label' => 'ig_ara_ketua',
                'rules' => 'max_size[ig_ara_ketua,1024]|is_image[ig_ara_ketua]',
                'errors' => [
                    'max_size' => $imgSizeError,
                    'is_image' => $imgTypeError
                ]
            ],
            'ig_hmit_ketua' => [
                'label' => 'ig_hmit_ketua',
                'rules' => 'max_size[ig_hmit_ketua,1024]|is_image[ig_hmit_ketua]',
                'errors' => [
                    'max_size' => $imgSizeError,
                    'is_image' => $imgTypeError
                ]
            ],
            'kp_anggota_1' => [
                'label' => 'kp_anggota_1',
                'rules' => 'max_size[kp_anggota_1,1024]|is_image[kp_anggota_1]',
                'errors' => [
                    'max_size' => $imgSizeError,
                    'is_image' => $imgTypeError
                ]
            ],
            'ig_ara_anggota_1' => [
                'label' => 'ig_ara_anggota_1',
                'rules' => 'max_size[ig_ara_anggota_1,1024]|is_image[ig_ara_anggota_1]',
                'errors' => [
                    'max_size' => $imgSizeError,
                    'is_image' => $imgTypeError
                ]
            ],
            'ig_hmit_anggota_1' => [
                'label' => 'ig_hmit_anggota_1',
                'rules' => 'max_size[ig_hmit_anggota_1,1024]|is_image[ig_hmit_anggota_1]',
                'errors' => [
                    'max_size' => $imgSizeError,
                    'is_image' => $imgTypeError
                ]
            ],
            'kp_anggota_2' => [
                'label' => 'kp_anggota_2',
                'rules' => 'max_size[kp_anggota_2,1024]|is_image[kp_anggota_2]',
                'errors' => [
                    'max_size' => $imgSizeError,
                    'is_image' => $imgTypeError
                ]
            ],
            'ig_ara_anggota_2' => [
                'label' => 'ig_ara_anggota_2',
                'rules' => 'max_size[ig_ara_anggota_2,1024]|is_image[ig_ara_anggota_2]',
                'errors' => [
                    'max_size' => $imgSizeError,
                    'is_image' => $imgTypeError
                ]
            ],
            'ig_hmit_anggota_2' => [
                'label' => 'ig_hmit_anggota_2',
                'rules' => 'max_size[ig_hmit_anggota_2,1024]|is_image[ig_hmit_anggota_2]',
                'errors' => [
                    'max_size' => $imgSizeError,
                    'is_image' => $imgTypeError
                ]
            ],
        ];
        // Validasi
        if (!$this->validate($validation_rules)) {
            return redirect()->to('/Auth/registrasi_olim')->withInput();
        }

        // Ambil files
        // Ketua
        $kp_ketua = $this->request->getFile('kp_ketua');
        $ig_ara_ketua = $this->request->getFile('ig_ara_ketua');
        $ig_hmit_ketua = $this->request->getFile('ig_hmit_ketua');

        // Anggota 1
        $kp_anggota_1 = $this->request->getFile('kp_anggota_1');
        $ig_ara_anggota_1 = $this->request->getFile('ig_ara_anggota_1');
        $ig_hmit_anggota_1 = $this->request->getFile('ig_hmit_anggota_1');

        // Anggota 2
        $kp_anggota_2 = $this->request->getFile('kp_anggota_2');
        $ig_ara_anggota_2 = $this->request->getFile('ig_ara_anggota_2');
        $ig_hmit_anggota_2 = $this->request->getFile('ig_hmit_anggota_2');

        // Bukti bayar
        $bukti_bayar = $this->request->getFile('bukti_bayar');

        // Memindahkan file ke path masing2
        // Define path
        $ig_path = 'uploads/olimpiade/ig';
        $kp_path = 'uploads/olimpiade/kp';
        $bukti_bayar_path = 'uploads/olimpiade/bukti_bayar';

        // Ketua
        $renamed_kp_ketua = $this->moveFile($kp_path, $kp_ketua);
        $renamed_ig_ara_ketua = $this->moveFile($ig_path, $ig_ara_ketua);
        $renamed_ig_hmit_ketua = $this->moveFile($ig_path, $ig_hmit_ketua);

        // Anggota 1
        $renamed_kp_anggota_1 = $this->moveFile($kp_path, $kp_anggota_1);
        $renamed_ig_ara_anggota_1 = $this->moveFile($ig_path, $ig_ara_anggota_1);
        $renamed_ig_hmit_anggota_1 = $this->moveFile($ig_path, $ig_hmit_anggota_1);

        // Anggota 2
        $renamed_kp_anggota_2 = $this->moveFile($kp_path, $kp_anggota_2);
        $renamed_ig_ara_anggota_2 = $this->moveFile($ig_path, $ig_ara_anggota_2);
        $renamed_ig_hmit_anggota_2 = $this->moveFile($ig_path, $ig_hmit_anggota_2);

        // Bukti bayar
        $renamed_bukti_bayar = $this->moveFile($bukti_bayar_path, $bukti_bayar);

        // Hitung anggota
        $jumlahAnggota = 1;
        $nama_anggota_1 = $this->request->getVar('nama_anggota_1');
        $nama_anggota_2 = $this->request->getVar('nama_anggota_2');
        if (!empty($nama_anggota_1))
            $jumlahAnggota++;
        if (!empty($nama_anggota_2))
            $jumlahAnggota++;

        // Tampung variabel sesuai dengan field di db
        $data_olim = [
            'olim_nama_tim' => $this->request->getVar('nama_tim'),
            'olim_institusi' => $this->request->getVar('asal_sekolah'),
            'olim_jumlah_anggota' => $jumlahAnggota,
            'olim_nama_ketua' => $this->request->getVar('nama_ketua'),
            'olim_nama_anggota_1' => $nama_anggota_1,
            'olim_nama_anggota_2' => $nama_anggota_2,
            'olim_email_ketua' => $this->request->getVar('email_ketua'),
            'olim_contact' => $this->request->getVar('wa_ketua'),
            'olim_suket_ketua' => $renamed_kp_ketua,
            'olim_suket_anggota_1' => $renamed_kp_anggota_1,
            'olim_suket_anggota_2' => $renamed_kp_anggota_2,
            'olim_ig_ara_ketua' => $renamed_ig_ara_ketua,
            'olim_ig_ara_anggota_1' => $renamed_ig_ara_anggota_1,
            'olim_ig_ara_anggota_2' => $renamed_ig_ara_anggota_2,
            'olim_ig_hmit_ketua' => $renamed_ig_hmit_ketua,
            'olim_ig_hmit_anggota_1' => $renamed_ig_hmit_anggota_1,
            'olim_ig_hmit_anggota_2' => $renamed_ig_hmit_anggota_2,
            'olim_pembayaran' => $renamed_bukti_bayar,
            'olim_status_final' => 0,
            'olim_status' => 0
        ];

        //template email isi aja subject sama messagenya
        //$subject;
        //$message;
        //$this->sendemail($data['olim_email_ketua'], $message, $subject);

        // Insert ke db dan redirect ke finish regist
        $this->model_olimpiade->save($data_olim);
        return redirect()->to('/Auth/finish_regist');
    }

    public function verify_registrasi_expo()
    {
        $rules = [
            'nama'  => [
                'label' => 'nama',
                'rules' => 'required',
                'errors' => [
                    'required'  => 'nama harus diisi'
                ]
            ],
            'asal_institusi'  => [
                'label' => 'asal_institusi',
                'rules' => 'required',
                'errors' => [
                    'required'  => 'asal institusi harus diisi'
                ]
            ],
            'email'  => [
                'label' => 'email',
                'rules' => 'required|is_unique[expo.expo_email]',
                'errors' => [
                    'required'  => 'email harus diisi',
                    'is_unique' => 'email sudah terdaftar'
                ]
            ],
            'whatsapp'  => [
                'label' => 'whatsapp',
                'rules' => 'required|numeric',
                'erros' => [
                    'required'  => 'whatsapp harus diisi',
                    'whatsapp'  => 'field whatsapp harus diisi dengan nomer yang benar'
                ]
            ],
            'share_post' => [
                'label'     => 'share_post',
                'rules'     => 'uploaded[share_post]|is_image[share_post]|max_size[share_post, 1024]',
                'errors'    => [
                    'uploaded'  => 'field harus diisi',
                    'is_image'  => 'field harus diisi dengan gambar',
                    'max_size'  => 'ukuran gambar maksimal 1024 kb'
                ]
            ],
            'follow_ig_ara' => [
                'label'     => 'follow_ig_ara',
                'rules'     => 'uploaded[follow_ig_ara]|is_image[share_post]|max_size[share_post, 1024]',
                'errors'    => [
                    'uploaded'  => 'field harus diisi',
                    'is_image'  => 'field harus diisi dengan gambar',
                    'max_size'  => 'ukuran gambar maksimal 1024 kb'
                ]
            ],
            'follow_ig_hmit' => [
                'label'     => 'follow_ig_hmit',
                'rules'     => 'uploaded[follow_ig_hmit]|is_image[share_post]|max_size[share_post, 1024]',
                'errors'    => [
                    'uploaded'  => 'field harus diisi',
                    'is_image'  => 'field harus diisi dengan gambar',
                    'max_size'  => 'ukuran gambar maksimal 1024 kb'
                ]
            ],
            'post_twibbon' => [
                'label'     => 'post_twibbon',
                'rules'     => 'uploaded[post_twibbon]|is_image[share_post]|max_size[share_post, 1024]',
                'errors'    => [
                    'uploaded'  => 'field harus diisi',
                    'is_image'  => 'field harus diisi dengan gambar',
                    'max_size'  => 'ukuran gambar maksimal 1024 kb'
                ]
            ]
        ];

        if (!$this->validate($rules)) {
            $validation = \Config\Services::validation();
            return redirect()->to('auth/registrasi_expo')->withInput();
        }

        $data = [
            'expo_nama'     => $this->request->getVar('nama'),
            'expo_email'    => $this->request->getVar('email'),
            'expo_contact'  => $this->request->getVar('whatsapp'),
            'expo_institusi' => $this->request->getVar('asal_institusi'),
            'expo_status'   => 0,
            'expo_twibbon'  => $this->moveFile('uploads/expo/post_twibbon', $this->request->getFile('post_twibbon')),
            'expo_poster'   => $this->moveFile('uploads/expo/share_post', $this->request->getFile('share_post')),
            'expo_ig_hmit'  => $this->moveFile('uploads/expo/follow_ig_hmit', $this->request->getFile('follow_ig_hmit')),
            'expo_ig_ara'   => $this->moveFile('uploads/expo/follow_ig_ara', $this->request->getFile('follow_ig_ara'))
            //'expo_sponsor'  => $this->moveFile('uploads/expo/post_twibbon', $this->request->getFile('post_twibbon'))
        ];

        //template email isi aja subject sama messagenya
        $subject = "[Confirmation] Expo Information Technology";
        $message = "Dear {$data['expo_nama']} from {$data['expo_institusi']} ,</br>
        </br>
        Thank you for registering for our event, \"Expo Information Technology.\"<br>
        <br>
        Hereby, we've received your submission. We'll check the completeness of the requirements that have been submitted.<br>
        <br>
        This is the confirmation email, and you will receive an invitation email one day before the event is held.<br>
        <br>
        Thank you.<br>
        <br>
        --<br>
        Best regards,<br>
        <br>
        A Renewal Agents 2022";
        $this->sendemail($data['expo_email'], $subject, $message);
        
        $this->model_expo->save($data);
        return redirect()->to('/Auth/finish_regist');
    }

    public function verify_registrasi_webinar()
    {
        //var_dump($this->request->getVar('event'));
        $rules = [
            'nama' => [
                'label'     => 'nama',
                'rules'     => 'required',
                'errors'    => [
                    'required'  => 'Nama harus diisi'
                ]
            ],
            'email' => [
                'label'     => 'email',
                'rules'     => 'required|is_unique[webinar.webinar_email]',
                'errors'    => [
                    'required'  => 'Email harus diisi',
                    'is_unique' => 'Email sudah terdaftar'
                ]
            ],
            'asal_institusi' => [
                'label'     => 'asal_institusi',
                'rules'     => 'required',
                'errors'    => [
                    'required'  => 'instansi harus diisi',
                ]
            ],
            'whatsapp' => [
                'label'     => 'whatsapp',
                'rules'     => 'required|numeric',
                'errors'    => [
                    'required'  => 'instansi harus diisi',
                    'numeric'   => 'field whatsapp harus diisi dengan nomer yang benar'
                ]
            ],
            'follow_ig_ara' => [
                'label'     => 'follow_ig_ara',
                'rules'     => 'uploaded[follow_ig_ara]|is_image[follow_ig_ara]|max_size[follow_ig_ara, 1024]',
                'errors'    => [
                    'uploaded'  => 'field harus diisi',
                    'is_image'  => 'field harus diisi dengan gambar',
                    'max_size'  => 'ukuran gambar maksimal 1024 kb'
                ]
            ],
            'follow_ig_hmit' => [
                'label'     => 'follow_ig_hmit',
                'rules'     => 'uploaded[follow_ig_hmit]|is_image[follow_ig_hmit]|max_size[follow_ig_hmit, 1024]',
                'errors'    => [
                    'uploaded'  => 'field harus diisi',
                    'is_image'  => 'field  harus diisi dengan gambar',
                    'max_size'  => 'ukuran gambar maksimal 1024 kb'
                ]
            ],
            'subs_yt_it' => [
                'label'     => 'subs_yt_it',
                'rules'     => 'uploaded[subs_yt_it]|is_image[subs_yt_it]|max_size[subs_yt_it, 1024]',
                'errors'    => [
                    'uploaded'  => 'field harus diisi',
                    'is_image'  => 'field harus diisi dengan gambar',
                    'max_size'  => 'ukuran gambar maksimal 1024 kb'
                ]
            ],
            'share_group[]' => [
                'label'     => 'share_group[]',
                'rules'     => 'is_image[share_group]|max_size[share_group, 1024]|count_image_2[share_group]',
                'errors'    => [
                    'is_image'  => 'field harus diisi dengan gambar',
                    'max_size'  => 'ukuran gambar maksimal 1024 kb',
                    'count_image_2' => 'field ini harus diisi dengan 2 gambar'
                ]
            ],
            'post_twibbon' => [
                'label'     => 'post_twibbon',
                'rules'     => 'uploaded[post_twibbon]|is_image[post_twibbon]|max_size[post_twibbon, 1024]',
                'errors'    => [
                    'uploaded'  => 'field harus diisi',
                    'is_image'  => 'field harus diisi dengan gambar',
                    'max_size'  => 'ukuran gambar maksimal 1024 kb'
                ]
            ]
        ];

        if($this->request->getVar('event') == 'CTF')
        {
            $rules2 = [
                'share_post_ctf' => [
                    'label'     => 'share_post_ctf',
                    'rules'     => 'uploaded[share_post_ctf]|is_image[share_post_ctf]|max_size[share_post_ctf, 1024]',
                    'errors'    => [
                        'uploaded'  => 'field harus diisi',
                        'is_image'  => 'field harus diisi dengan gambar',
                        'max_size'  => 'ukuran gambar maksimal 1024 kb'
                    ]
                ],
            ];
        }
        else if($this->request->getVar('event') == 'IoT')
        {
            $rules2 = [
                'share_post_iot' => [
                    'label'     => 'share_post_ctf',
                    'rules'     => 'uploaded[share_post_iot]|is_image[share_post_iot]|max_size[share_post_iot, 1024]',
                    'errors'    => [
                        'uploaded'  => 'field harus diisi',
                        'is_image'  => 'field harus diisi dengan gambar',
                        'max_size'  => 'ukuran gambar maksimal 1024 kb'
                    ]
                ],
            ];
        }
        else
        {
            $rules2 = [
                'share_post_iot' => [
                    'label'     => 'share_post_iot',
                    'rules'     => 'uploaded[share_post_iot]|is_image[share_post_iot]|max_size[share_post_iot, 1024]',
                    'errors'    => [
                        'uploaded'  => 'field harus diisi',
                        'is_image'  => 'field harus diisi dengan gambar',
                        'max_size'  => 'ukuran gambar maksimal 1024 kb'
                    ]
                ],
                'share_post_ctf' => [
                    'label'     => 'share_post_ctf',
                    'rules'     => 'uploaded[share_post_ctf]|is_image[share_post_ctf]|max_size[share_post_ctf, 1024]',
                    'errors'    => [
                        'uploaded'  => 'field harus diisi',
                        'is_image'  => 'field harus diisi dengan gambar',
                        'max_size'  => 'ukuran gambar maksimal 1024 kb'
                    ]
                ],
            ];
        }
        $rules = array_merge($rules, $rules2);
        if(!$this->validate($rules))
        {   
            $validation = \Config\Services::validation();
            return redirect()->to('auth/registrasi_webinar')->withInput();
        }

        $data = [
            'webinar_event'     => $this->request->getVar('event'), 
            'webinar_nama'      => $this->request->getVar('nama'), 
            'webinar_email'     => $this->request->getVar('email'), 
            'webinar_contact'   => $this->request->getVar('whatsapp'), 
            'webinar_instansi'  => $this->request->getVar('asal_institusi'), 
            'webinar_status'    => 0, 
            //'webinar_story'     => $this->moveFile('uploads/webinar/story', $this->request->getFile('share_post')), 
            'webinar_ig_ara'    => $this->moveFile('uploads/webinar/ig_ara', $this->request->getFile('follow_ig_ara')), 
            'webinar_ig_hmit'   => $this->moveFile('uploads/webinar/ig_hmit', $this->request->getFile('follow_ig_hmit')), 
            'webinar_subscribe' => $this->moveFile('uploads/webinar/subs', $this->request->getFile('subs_yt_it')),
            'webinar_share_1'   => $this->moveFile('uploads/webinar/share_1', $this->request->getFile('share_group.0')),
            'webinar_share_2'   => $this->moveFile('uploads/webinar/share_2', $this->request->getFile('share_group.1')),
            'webinar_twibbon'   => $this->moveFile('uploads/webinar/post_twibbon', $this->request->getFile('post_twibbon'))
        ];

        if($this->request->getVar('event') == 'CTF')
        {
            $data2 = [
                'webinar_post_ctf' => $this->moveFile('uploads/webinar/post_ctf', $this->request->getFile('share_post_ctf'))
            ];
            $subject = "[Confirmation] Webinar Capture The Flag";
            $message = "Dear {$data['webinar_nama']} from {$data['webinar_instansi']} ,<br>
                        <br>
                        Thank you for registering for our event, \"Webinar Capture The Flag.\"<br>
                        <br>
                        Hereby, we've received your submission. We'll check the completeness of the requirements that have been submitted.<br>
                        <br>
                        This is the confirmation email, and you will receive an invitation email one day before the event is held.<br>
                        <br>
                        Thank you.<br>
                        <br>
                        --<br>
                        Best regards,<br>
                        <br>
                        A Renewal Agents 2022";
        }
        else if($this->request->getVar('event') == 'IoT')
        {
            $data2 = [
                'webinar_post_iot' => $this->moveFile('uploads/webinar/post_iot', $this->request->getFile('share_post_iot'))
            ];
            $subject = "[Confirmation] Webinar Internet of Things";
            $message = "Dear ${data['webinar_nama']} from ${data['webinar_instansi']} ,</br>
            </br>
            Thank you for registering for our event, \"Webinar Internet of Things.\"<br>
            <br>
            Hereby, we've received your submission. We'll check the completeness of the requirements that have been submitted.<br>
            <br>
            This is the confirmation email, and you will receive an invitation email one day before the event is held.<br>
            <br>
            Thank you.<br>
            <br>
            --<br>
            Best regards,<br>
            <br>
            A Renewal Agents 2022";
        }
        else
        {
            $data2 = [
                'webinar_post_iot' => $this->moveFile('uploads/webinar/post_iot', $this->request->getFile('share_post_iot')),
                'webinar_post_ctf' => $this->moveFile('uploads/webinar/post_ctf', $this->request->getFile('share_post_ctf'))
            ];
            $subject = "[Confirmation] Webinar Capture The Flag and Webinar Internet of Things";
            $message = "Dear {$data['webinar_nama']} from {$data['webinar_instansi']} ,<br>
                        <br>
                        Thank you for registering for our event, \"Webinar Capture The Flag\" and \"Webinar Internet of Things.\"<br>
                        <br>
                        Hereby, we've received your submission. We'll check the completeness of the requirements that have been submitted.<br>
                        <br>
                        This is the confirmation email, and you will receive an invitation email one day before the event is held.<br>
                        <br>
                        Thank you.<br>
                        <br>
                        --<br>
                        Best regards,<br>
                        <br>
                        A Renewal Agents 2022";
        }
        
        $data = array_merge($data, $data2);
        
        $this->sendemail($data['webinar_email'], $subject, $message);
        $this->model_webinar->save($data);
        return redirect()->to('/Auth/finish_regist');
    }

    public function verify_login()
    {
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        // Cek akun di panitia lalu di account
        if ($query = $this->model_panitia->getPanitia($username, $password)) {
            $ses_data = [
                'is_admin' => true,
                'username' => $query[$this->model_panitia->panitia_username]
            ];
            $this->session->set($ses_data);
            // Panitia, ganti nama di case & $ses_admin nanti sesuai format nama admin
            switch ($query[$this->model_panitia->panitia_username]) {
                case 'Admin ctf':
                    return redirect()->to('/dashboard/Admin_ctf/list_team');
                    break;
                case 'Admin expo':
                    return redirect()->to('/dashboard/Admin_expo/list');
                    break;
                case 'Admin webinar':
                    return redirect()->to('/dashboard/Admin_webinar/list');
                    break;
                case 'Admin kti iot':
                    return redirect()->to('/dashboard/Admin_kti_iot/list_abstrak');
                    break;
                case 'Admin olim':
                    return redirect()->to('/dashboard/Admin_olim/list_team');
                    break;
                default:
                    session()->setFlashdata('msg', 'Username atau password salah!');
                    return redirect()->to('/Auth/login')->withInput();
                    break;
            }
        } elseif ($query = $this->model_account->getAccount($username, $password)) {
            // User adalah account (peserta)
            $ses_data = [
                'is_admin' => false,
                'username' => $query[$this->model_account->account_username],
                'role' => $query[$this->model_account->account_table],
                'keterangan' => $query[$this->model_account->account_keterangan]
            ];
            $this->session->set($ses_data);
            // Redirect sesuai account_table di account
            switch ($query[$this->model_account->account_table]) {
                case 'ctf':
                    return redirect()->to('/dashboard/User_ctf/home');
                    break;
                case 'expo':
                    return redirect()->to('/dashboard/User_home/home');
                    break;
                case 'kti_iot':
                    return redirect()->to('/dashboard/User_kti_iot/home');
                    break;
                case 'olimpiade':
                    return redirect()->to('/dashboard/User_olim/home');
                    break;
                case 'webinar':
                    return redirect()->to('/dashboard/User_webinar/home');
                    break;
                default:
                    session()->setFlashdata('msg', 'username atau password salah!');
                    return redirect()->to('/Auth/login')->withInput();
                    break;
            }
        } else {
            session()->setFlashdata('msg', 'Username atau password salah!');
            return redirect()->to('/Auth/login')->withInput();
        }
    }

    public function finish_regist()
    {
        return view('auth/finish');
    }
}
