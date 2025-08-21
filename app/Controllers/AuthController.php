<?php

namespace App\Controllers;

use App\Models\Settings_User;
use Exception;

class AuthController extends BaseController
{
    protected $user;
    protected $db;
    protected $session;
    public function __construct()
    {
        $this->user = new Settings_User();
        $this->db = \Config\Database::connect();
        $this->session = \Config\Services::session();
    }

    public function login()
    {
        return view("login");
    }

    public function p_login()
    {
        $this->db->transBegin();
        try {
            $username = $this->request->getPost("username");
            $password = $this->request->getPost("password");

            if (!$this->validate([
                'username' => 'required',
                'password' => 'required'
            ])) {
                return $this->response->setJSON([
                    'status' => 'error',
                    'message' => 'Semua field wajib diisi'
                ]);
            }

            $user = $this->user->checkUsername($username);

            if (!$user) {
                return $this->response->setJSON([
                    "status" => "error",
                    "message" => "Username tidak ditemukan"
                ]);
            }

            if ($password !== $user['password']) {
                return $this->response->setJSON([
                    'status' => 'error',
                    'message' => 'Password tidak sesuai'
                ]);
            }

            $this->session->set([
                'userid' => $user['userid'],
                'username' => $user['username']
            ]);

            return $this->response->setJSON([
                'status' => 'success',
                'message' => 'Login Sukses',
                'redirect' => base_url('dashboard')
            ]);
        } catch (Exception $e) {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => $e->getMessage()
            ]);
        }
    }
}
