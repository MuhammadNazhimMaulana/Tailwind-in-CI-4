<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use App\Models\Pengguna_M;
use App\Entities\Pengguna_E;

class Authorisasi extends BaseController
{
    public function __construct()
    {
        // Memanggil Helper
        helper('form');

        // Load Validasi
        $this->validation = \Config\Services::validation();

        // Load Session
        $this->session = session();
    }

    public function register()
    {
        if ($this->request->getPost()) {

            // Validasi data yang di post
            $data = $this->request->getPost();
            $validate = $this->validation->run($data, 'register');

            $errors = $this->validation->getErrors();

            //Jika tidak ada error
            if (!$errors) {

                $model = new User_M();
                $user = new User_E();

                // Dapatkan data yang telah di input
                $user->fill($data);
                $user->tingkat = 1;
                $user->tgl_masuk = date("Y-m-d");
                $user->created_at = date("Y-m-d H:i:s");
                $user->foto_user = $this->request->getFile('foto_user');
                $user->password = $this->request->getPost('password');

                $model->save($user);
                return view('Auth_View/login_view');
            }

            $this->session->setFlashdata('errors', $errors);
        }

        return view('Auth_View/register_view');
    }

    public function login()
    {
        if ($this->request->getPost()) {

            // Validasi data yang di post
            $data = $this->request->getPost();
            $validate = $this->validation->run($data, 'login');

            $errors = $this->validation->getErrors();

            if ($errors) {
                return view('login');
            }

            $model = new Pengguna_M();

            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            $user = $model->where('username', $username)->first();

            if (password_verify($password, $user->password) == false) {

                $this->session->setFlashdata('errors', ['Password Salah']);
            } else {
                $session_data = [
                    'username' => $user->username,
                    'nama' => $user->nama_lengkapa,
                    'id_user' => $user->id_user,
                    'tingkat' => $user->tingkat,
                    'isLoggedIn' => TRUE
                ];

                $this->session->set($session_data);

                return redirect()->to(site_url('admin/'));
            }
            
            $this->session->setFlashdata('errors', $errors);
            
        }

        return view('Auth_View/login_view');
    }

    public function logout()
    {
        $this->session->destroy();
        return redirect()->to(site_url('Auth/Authorisasi/login'));
    }
}
