<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Solvee') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="hhtps://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <script>
        var nowDate = new Date();
        var today = new Date(nowDate.getFullYear(), nowDate.getMonth(), nowDate.getDate(), 0, 0, 0, 0);
        $('.tanggal').date({format:'yyyy-mm-dd', startDate: today });
        
    </script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    
    

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .container {
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto;
        }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar navbar-dark bg-primary">
            
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Solvee') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('') }}">{{__('Beranda') }}</a>
                        </li>
                        @can('tambah-pengaduan')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('pengaduan')}}">{{__('Tambahkan Aduan') }}</a>
                        </li>
                        @endcan
                        @can('list-pengaduan')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('listpengaduan')}}">{{__('Daftar Pengaduan') }}</a>
                        </li>
                        @endcan
                        
                        @can('pengaduan-diproses')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('pengaduandiproses')}}">{{__('Pengaduan Masuk') }}</a>
                        </li>
                        @endcan
                        @can('pengaduan-diteruskan')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('pengaduanditeruskan')}}">{{__('Pengaduan Masuk') }}</a>
                        </li>
                        @endcan
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('rekapitulasi')}}">{{__('Rekapitulasi') }}</a>
                        </li>
                        
                        
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <li>
                            <form class="form-inline" action="{{ url('query') }}" method="GET">
                                <div class="md-form my-1">
                                    <input name="q" class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" style="align:right">
                                </div>
                            </form>
                        </li>
                        @guest
                            
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    @can('manage-users')
                                    <a class="dropdown-item" href="{{route ('admin.users.index')}}">
                                        User Management
                                    </a>
                                    @endcan
                                    <a class="dropdown-item" href="{{route ('editprofil')}}">
                                        Edit Profil
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            
        </nav>

        

        <main class="py-4">
            
            @include('partials.alerts')
            @yield('content')
            @include('partials.scripts')
            
        </main>
    </div>
</body>
</html>
