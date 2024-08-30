<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class BlogController extends Controller
{
    public function index()
    {
        //$posts =[1,2,3,4];
        $post = (object) [          // преобразовать массив к объекту
            'id' => 123,
            'title' => 'Lorem ipsum dolor sit amet.',
            'content' =>'Lorem ipsum <strong>dolor</strong> sit amet consectetur adipisicing elit. Facere, culpa? ',
            
        ];
        $posts = array_fill(0, 10 , $post);
        //return view('blog.index',['posts' => $posts]);
        // или если короче 
        return view('blog.index',compact('posts'));
    }

    public function show($post)
    {
        //return Route::is('*blog') ? 'yes' : 'no';
        //return "показать пост {$post} в блоге";
        $post = (object) [         
            'id' => 123,
            'title' => 'Lorem ipsum dolor sit amet.',
            'content' =>'Lorem ipsum <strong>dolor</strong> sit amet consectetur adipisicing elit. Facere, culpa? ',
            
        ];

        return view('blog.show',compact('post'));


    }

    public function like()
    {
        return 'лайк +1 для блога';
    }
}
