<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return 'страница логина';
    }
    
    public function store()
    {
        return 'логинимся';
    }
}
