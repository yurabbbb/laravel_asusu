@extends('layouts.base')

@section('page.title','АСУСУ - Блог')


@section('content')
    <h2>Блог</h2>
    <h3>Список постов</h3>
    {{--
    <p>
        @json($posts)
    </p>
    --}}
    <div>
        @if(empty($posts))
            Нет ни одного поста
        @else    
            @foreach($posts as $post)
           <div>
                <h5>
                    <a href="{{ route('blog.show' , $post->id) }}">
                    {{ $post -> title }}
                    </a>
                </h5>
                <p>
                    {{ $post -> content }}
                </p>
           </div>
            @endforeach
        @endif

        
    </div>

@endsection