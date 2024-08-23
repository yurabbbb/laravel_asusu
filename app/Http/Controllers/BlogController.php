<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class BlogController extends Controller
{
    public function index()
    {
        return 'страница БЛОГОВ';
    }

    public function show($post)
    {
        return Route::is('*blog') ? 'yes' : 'no';
        //return "показать пост {$post} в блоге";
    }

    public function like()
    {
        return 'лайк +1 для блога';
    }
}
