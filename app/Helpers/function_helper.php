<?php 

use CodeIgniter\Config\Services;
function getCurrentUser()
{
    $session = Services::session();
    return $session->get('username');
}