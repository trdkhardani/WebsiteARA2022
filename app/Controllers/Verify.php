<?php

namespace App\Controllers;

use App\Controllers;
use App\Models\Model_Kti_iot;
use App\Models\Model_Olimpiade;
use Config\Services;

class Verify extends BaseController
{
    public function __construct()
    {
        $this->model_olimpiade = new Model_Olimpiade();
        $this->model_kti = new Model_Kti_iot();
    }
    public function verify_registrasi_kti()
    {
        // Rules validasi dan custom error message
        $fieldError = 'field harus diisi';
        $imgSizeError = 'melebihi batas max 1 mb';
        $imgTypeError = 'file bukan gambar';
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
            'nama_anggota_1' => [
                'label' => 'nama_anggota_1',
                'rules' => 'required',
                'errors' => [
                    'required' => $fieldError
                ]
            ],
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

        // Ketua
        $renamed_ktm_ketua = $this->moveFile($ktm_path, $ktm_ketua);
        $renamed_ig_ara_ketua = $this->moveFile($ig_follow_path, $ig_ara_ketua);
        $renamed_ig_hmit_ketua = $this->moveFile($ig_follow_path, $ig_hmit_ketua);
        $renamed_share_ketua = $this->moveFile($ig_share_path, $share_post_ketua);

        // Anggota 1 
        $renamed_ktm_anggota_1 = $this->moveFile($ktm_path, $ktm_anggota_1);
        $renamed_ig_ara_anggota_1 = $this->moveFile($ig_follow_path, $ig_ara_anggota_1);
        $renamed_ig_hmit_anggota_1 = $this->moveFile($ig_follow_path, $ig_hmit_anggota_1);
        $renamed_share_anggota_1 = $this->moveFile($ig_share_path, $share_post_anggota_1);

        // Anggota 2
        $renamed_ktm_anggota_2 = $this->moveFile($ktm_path, $ktm_anggota_2);
        $renamed_ig_ara_anggota_2 = $this->moveFile($ig_follow_path, $ig_ara_anggota_2);
        $renamed_ig_hmit_anggota_2 = $this->moveFile($ig_follow_path, $ig_hmit_anggota_2);
        $renamed_share_anggota_2 = $this->moveFile($ig_share_path, $share_post_anggota_2);

        // Hitung anggota
        $jumlahAnggota = 2;
        $nama_anggota_2 = $this->request->getVar('nama_anggota_2');
        if (!empty($nama_anggota_2))
            $jumlahAnggota++;

        // Tampung data sesuai field di db
        $data_kti = [
            'iot_nama_tim' => $this->request->getVar('nama_tim'),
            'iot_jumlah_anggota' => $jumlahAnggota,
            'iot_email_ketua' => $this->request->getVar('email_ketua'),
            'iot_nama_ketua' => $this->request->getVar('nama_ketua'),
            'iot_nama_anggota_1' => $this->request->getVar('nama_anggota_1'),
            'iot_nama_anggota_2' => $this->request->getVar('nama_anggota_2'),
            'iot_suket_ketua' => $renamed_ktm_ketua,
            'iot_suket_anggota_1' => $renamed_ktm_anggota_1,
            'iot_suket_anggota_2' => $renamed_ktm_anggota_2,
            'iot_contact' => $this->request->getVar('wa_ketua'),
            'iot_ig_ara_ketua' => $renamed_ig_ara_ketua,
            'iot_ig_ara_anggota_1' => $renamed_ig_ara_anggota_1,
            'iot_ig_ara_anggota_2' => $renamed_ig_ara_anggota_2,
            'iot_ig_hmit_ketua' => $renamed_ig_hmit_ketua,
            'iot_ig_hmit_anggota_1' => $renamed_ig_hmit_anggota_1,
            'iot_ig_hmit_anggota_2' => $renamed_ig_hmit_anggota_2,
            'iot_story_ketua' => $renamed_share_ketua,
            'iot_story_anggota_1' => $renamed_share_anggota_1,
            'iot_story_anggota_2' => $renamed_share_anggota_2,
            'iot_institusi' => $this->request->getVar('asal_institusi'),
            'iot_abstrak' => null,
            'iot_kti_paper' => null,
            'iot_status' => 0,
            'iot_status_penyisihan' => 0,
            'iot_status_final' => 0,
            'iot_pembayaran' => 0
        ];

        // Insert ke db dan redirect ke finish regist
        $this->model_kti->save($data_kti);
        return redirect()->to('/Auth/finish_regist');
    }

    public function registrasi_ctf()
    {
        return view('auth/regist_ctf');
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
        $fieldError = 'field harus diisi';
        $imgSizeError = 'melebihi batas max 1 mb';
        $imgTypeError = 'file bukan gambar';
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

        // Insert ke db dan redirect ke finish regist
        $this->model_olimpiade->save($data_olim);
        return redirect()->to('/Auth/finish_regist');
    }

    public function registrasi_expo()
    {
        return view('auth/regist_expo');
    }

    public function registrasi_webinar()
    {
        return view('auth/regist_webinar');
    }

    public function login()
    {
        return view('auth/login');
    }

    public function finish_regist()
    {
        return view('auth/finish');
    }
}
