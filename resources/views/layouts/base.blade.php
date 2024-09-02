<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('page.title', config('app.name'))   </title>


    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <!-- I am a comment! 
    @php 
        $foo = '<h1>Hello</h1>';
    @endphp

    @foreach([1,2,3] as $value)
        {{ $value; }} 
    @endforeach
    {{$foo}}
    {!!$foo!!}
    -->

 
    <div class="d-flex flex-column min-vh-100 justify-content-between text-center">
        
        @include('includes.header')

        <main class="flex-grow-1 py-3">
            @yield('content')            
        </main>

        @include('includes.footer')
    </div>

    


    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script> 
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js"></script> -с этим скриптом не работает --}}
    
    
</body>
</html>