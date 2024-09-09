@extends('layouts.base')

@section('page.title','АСУСУ - Блог')


@section('content')
    <section>
        <x-container>
            <x-title>
                Список постов
            </x-title>
            @if(empty($posts))
            Нет ни одного поста
            @else   
                <div class="row"> 
                    @foreach($posts as $post)
                        <div class="col-12 col-md-4">
                            <div class="mb-4">
                                <x-post.card :post="$post" />

                            </div>    
                        </div>
                    @endforeach
                </div>
            @endif
        </x-container>
    </section>

    
    {{--
    <p>
        @json($posts)
    </p>
    --}}
    <div>
        

        
    </div>

@endsection