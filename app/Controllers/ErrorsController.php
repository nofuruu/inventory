<?php

namespace App\Controllers;


class ErrorsController extends BaseController 
{
    public function show404()
    {
        return view("handle/404");
    }
}