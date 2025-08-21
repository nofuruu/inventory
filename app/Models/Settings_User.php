<?php

namespace App\Models;

use CodeIgniter\Model;


class Settings_User extends Model
{
    protected $table = "msuser";
    protected $pk = "userid";
    protected $allowedFields = [
        "username",
        "fullname",
        "password",
        "email",
        "phone",
        "role",
        "createddate",
        "createdby",
        "updateddate",
        "updatedby"
    ];



    public function checkUsername($username)
    {
        return $this->where('username', $username)->first();
    }
}
