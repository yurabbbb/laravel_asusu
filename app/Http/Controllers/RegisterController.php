<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return 'страница регистрации';
    }
    public function store()
    {
        return 'регистрируемся';
    }
}
