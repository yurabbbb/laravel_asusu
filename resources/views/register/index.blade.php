@extends('layouts.auth')

@section('page.title','АСУСУ - Регистрация')


@section('auth.content')
    <x-card>
        <x-card-header>
            <x-card-title>Регистрация</x-card-title>
            <x-slot name="right"> 
                <a href="{{ route('login')}}">Регистрация</a> 
            </x-slot>
        </x-card-header>

        <x-card-body>
            <x-form action="{{ route('register.store') }}" method="POST">
                {{-- 
                    защита от csrf
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    или  {{ csrf_field() }} 
                    или @csrf
                --}}
                <x-form-item>
                    <x-label required>Имя</x-label>
                        <x-input  name="name" autofocus />
                </x-form-item>

                <x-form-item>
                    <x-label required>Email</x-label>
                        <x-input type="email" name="email" />
                </x-form-item>

                <x-form-item>
                    <x-label required>Пароль</x-label>
                        <x-input type="password" name="password" />
                </x-form-item>

                <x-form-item>
                    <x-label required>Пароль еще раз</x-label>
                        <x-input type="password" name="password_confirmation" />
                </x-form-item>

                <x-form-item >
                    <x-checkbox name="agreement">
                        Я согласен на обработку пользовательских данных
                    </x-checkbox>
                </x-form-item>

                <x-button type="submit" >
                    Зарегистрироваться
                </x-button>

            </x-form>

        </x-card-body>
    </x-card>
@endsection