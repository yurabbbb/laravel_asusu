<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('user.index');
    }

    public function create()
    {
        return 'страница создать пост';
    }

    public function store()
    {
        return 'создать пост в бд';
    }
    public function show($post)
    {
        return "показать пост {$post}";
    }
    public function edit($post)
    {
        return "страница редактирования поста {$post}";
    }
    public function update()
    {
        return 'обновить запись в бд';
    }
    public function delete()
    {
        return 'удалить';
    }
    public function like()
    {
        return 'лайк +1';
    }
/*
    public function login()
    {
        return 'тест логин';
    }
*/
}
