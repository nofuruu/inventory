<?php

namespace App\Controllers;

use App\Models\Settings_User;

class AppController extends BaseController
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
    public function index()
    {
        if ($this->session->has("userid")) {
            $data['title'] = 'Dashboard';
            return view('dashboard',  $data);
        }
    }
}
