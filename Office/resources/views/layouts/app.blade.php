<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/all.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  </head>
<body>
    <div id="app" class="app">
        <div class="section_2">
            <div class="container">
              <div class="row">
                <div class="col-md-10 col-sm-10">
                  <div class="menu">
                    <a href="default" id="main" class="nav menu__main"><i class="icon fas fa-home"></i>Главная</a>
                    <a href="drive" id="drive" class="nav menu__drive"><i class="icon fas fa-hdd"></i>Диск</a>
                    <a href="chat" id="chat" class="nav menu__chat"><i class="icon fas fa-comments"></i>Чат</a>
                    <a href="document" id="document" class="nav menu__document"><i class="icon fas fa-file-alt"></i>Документы</a>
                    <a href="people" id="people" class="nav menu__personal"><i class="icon fas fa-user-friends"></i>Сотрудники</a>
                  </div>
                </div>
                <div class="col-xl-2 col-sm-2">
                  <div class="user-menu">
                                      
                    <a class="user-item" href="profile"> <i class="fas fa-user-circle"></i></a>                        
                    <a class="user-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();"> <i class="fas fa-sign-out-alt" ></i>
                         <form id="logout-form" action="{{ route('logout') }}" method="POST" ">
                            @csrf
                        </form>
                     </a>
                     <button class="user-btn">
                      <img class="avatar-min" src="/uploads/avatars/{{ Auth::user()->avatar }}"> 
                    </button>                    
                  </div>
                </div>
              </div>
            </div>            
          </div> 

    <main class="main">
        
            <div class="section_1">
              @yield('content')                      
            </div>
           
                   
    </main>
    </div>
    <script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"
      ></script> 
      <script src="{{ asset('js/menu.js') }}" defer></script>     
      <script src="{{ asset('js/profile.js') }}" defer></script>
  </body>
</html>
