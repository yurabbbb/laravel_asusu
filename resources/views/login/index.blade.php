@extends('layouts.auth')

@section('page.title','АСУСУ - Страница входа')


@section('auth.content')
    <x-card>
        <x-card-header>
            <x-card-title>Вход</x-card-title>
        </x-card-header>

        <x-card-body>
            <x-form action="{{ route('login.store') }}" method="POST">

                <x-form-item>
                    <x-label required>Email</x-label>
                        <x-input type="email" name="email" autofocus />
                </x-form-item>

                <x-form-item>
                    <x-label required>Пароль</x-label>
                        <x-input type="password" name="password" />
                </x-form-item>

                <x-form-item >
                    <x-checkbox name="remember">
                        Запомнить меня
                    </x-checkbox>
                </x-form-item>

                <x-button type="submit" >
                    Войти
                </x-button>

            </x-form>

        </x-card-body>
    </x-card>
@endsection               



{{-- 
    <div class="row">
        <div class="col-1 col-md-1 col-lg-1 flex p-0">
            
                1

        </div>
        <div class="col-6 col-sm-4 col-md-3 col-lg-3 flex p-0">
                Баклан Людвиг Аристархович
        </div>
        <div class="col-3 col-sm-2 col-md-1 col-lg-1 flex p-0">
                16.03.1951
        </div>
        <div class="col-2 col-sm-1 col-md-1 col-lg-1 flex p-0">     
                Ж
        </div>
        <div class="col-2 col-sm-2 col-md-1 col-lg-1 flex p-0">               
                Русский
        </div>
        <div class="col-6 col-sm-4 col-md-3 col-lg-3 flex p-0">                  
                РК, Сакский район, с. Трудовое, ул. Верхняя д.14
        </div>
        <div class="col-3 col-sm-2 col-md-1 col-lg-1 flex p-0">             
                16.03.2023
        </div>
        <div class="col-1 col-sm-1 col-md-1 col-lg-1 flex p-0">      
                бтн
        </div>
    </div>
    <div class="row">
        <div class="col-1 col-md-1 col-lg-1 flex p-0">       
                2
        </div>
        <div class="col-6 col-sm-4 col-md-3 col-lg-3 flex p-0">            
                Вович Александр Петрович
        </div>
        <div class="col-3 col-sm-2 col-md-1 col-lg-1 flex p-0">
            
                16.03.1951

        </div>
        <div class="col-2 col-sm-1 col-md-1 col-lg-1 flex p-0">
            
                М

        </div>
        <div class="col-2 col-sm-2 col-md-1 col-lg-1 flex p-0 text-truncate">
            
                Таджикистонома

        </div>
        <div class="col-6 col-sm-4 col-md-3 col-lg-3 flex p-0">
            
                РК, Сакский район, с. Трудовое, ул. Верхняя д.14

        </div>
        <div class="col-3 col-sm-2 col-md-1 col-lg-1 flex p-0">
            
                16.03.2023

        </div>
        <div class="col-1 col-sm-1 col-md-1 col-lg-1 flex p-0">
            
                бтн

        </div>
    </div>
--}}