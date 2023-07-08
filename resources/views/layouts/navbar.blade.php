<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light border-bottom shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('assets/image/logo.png') }}" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto gap-xl-2">
                <!-- Authentication Links -->

                <!-- navbar menu -->
                @if (
                    !in_array(request()->route()->getName(),
                        ['login', 'register']))
                    <li class="nav-item">
                        <a class="nav-link text-dark fw-normal fs-5" href="{{ route('home.landingpage') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark fw-normal fs-5" href="{{ route('about.landingpage') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark fw-normal fs-5" href="">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark fw-normal fs-5" href="">Mentor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark fw-normal fs-5" href="">Event</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark fw-normal fs-5" href="">Partnership</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark fw-normal fs-5" href="">Career</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark fw-normal fs-5 me-2" href="">Contact</a>
                    </li>
                @endif

                @if (
                    !Auth::check() &&
                        !in_array(request()->route()->getName(),
                            ['login', 'register']))
                    <li class="nav-item">
                        <form action="{{ route('register') }}">
                            <button type="submit" class="btn text-white px-4 py-2 fw-bold"
                                style="background: #E95C56;">Daftar</button>
                        </form>
                    </li>
                @else
                    @if (
                        !in_array(request()->route()->getName(),
                            ['login', 'register']))
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <img style="width: 40px; height: 40px; border-radius: 50%; border: 1px solid #E95C55; padding: 4px;"
                                    src="{{ asset('img/navbars/login.png') }}" alt="">
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item">
                                    {{ Auth::user()->name }}
                                </a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>



                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endif
                @endif


                {{-- @guest --}}

                {{-- @if (Route::has('login'))
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                      </li>
                  @endif

                  @if (Route::has('register'))
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                      </li>
                  @endif --}}
                {{-- @else
                  
              @endguest --}}
            </ul>
        </div>
    </div>
</nav>
