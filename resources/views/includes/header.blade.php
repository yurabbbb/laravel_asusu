{{-- 
<header class="py-3 border-bottom">
    <div class="container">
        <div class="d-flex justify-content-between">
            <div>
                <ul class="list-unstyled d-flex">
                    <li class="ms-3">
                        <a href="{{ route('home')}}">
                        Главная
                        </a>  
                    </li>
                    <li class="ms-3">
                        <a href="{{ route('blog')}}"> Блог </a>  
                    </li>
                     
                </ul>    
            </div>
                
            <div>
                <ul class="list-unstyled d-flex">
                    <li class="ms-3">
                        <a href="{{ route('register')}}"> Регистрация </a>
                    </li>

                    <li class="ms-3">
                        <a href="{{ route('login')}}"> Вход </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    
</header>
--}}





<nav class="navbar navbar-expand-md bg-body-tertiary">
    <div class="container">
        <a href="{{ route('home') }}" class="navbar-brand" >
            {{ config('app.name') }}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-collapsed" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-collapsed">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Главная</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('blog') }}">Блог</a>
                </li>
            </ul>

            <ul class="navbar-nav ms-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="{{ route('register') }}">Регистрация</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Вход</a>
                </li>
            </ul>
            
        </div>
    </div>
</nav>