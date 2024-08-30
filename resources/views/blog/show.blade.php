@extends('layouts.base')

@section('page.title','Просмотр поста')


@section('content')
    <a href="{{ route('blog')}}"> Назад </a>
    <h3>{{$post->title}}</h3>
    <div>
        
        {!!$post->content!!}
        
    </div>

@endsection