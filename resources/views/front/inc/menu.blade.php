        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li><a class="nav-link" href="{{ route('homepage') }}"><i class="fa fa-home" style="font-size: 1.5rem;"></i></a></li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <div id="search-container">
                                <input id="search" type="text" placeholder="Recherche..."><button type="submit"><i class="fa fa-search"></i></button>
                            </div>
                            <li><a class="nav-link connexion" href="{{ route('login') }}"><i class="fa fa-sign-in pr-2"></i>Connexion</a></li>
                            <li><a class="nav-link inscription" href="{{ route('register') }}"><i class="fa fa-user-plus pr-2"></i>Inscription</a></li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                    @if(Auth::user()->avatar == NULL)
                                        <img id="avatar" src="/uploads/avatars/default.png" alt="avatar" style="background: #d1d1d1;">
                                        @else
                                            <img id="avatar" src="/uploads/avatars/{{Auth::user()->avatar}}" alt="avatar">
                                    @endif

                                    <span id="username">{{ Auth::user()->username }}</span> <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                                    @auth
                                        <a href="{{route('profilepage')}}" class="dropdown-item"><i class="fa fa-user pr-2"></i>Mon profil</a>
                                    @endauth
                                    
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fa fa-sign-out pr-2"></i>Déconnexion
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>