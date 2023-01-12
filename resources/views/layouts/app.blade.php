<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta name="description" content="" />
    <meta name="keywords" content="content" />

    <title>SEO Content</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;700;800&display=swap" rel="stylesheet" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/icons/favicon.ico" />
</head>

<body>

    @if (request()->segment(1) == Null || request()->segment(1) == 'home' )
    <header>
        <nav class="navbar navbar-expand-lg navbar-blue">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{url('/')}}">
                    <img src="{{asset('/assets/images/logo.png')}}" alt="logo" class="logo" />
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"> </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Services
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Article Writing</a></li>
                                <li><a class="dropdown-item" href="#">Blog Posts</a></li>
                                <li>
                                    <a class="dropdown-item" href="#">Copywriting</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Ghostwriting</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Local SEO City Pages</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Press Releases</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Product Descriptions</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">SEO Content</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Subject Matter Experts</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Website Content</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">White Papers</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Managed Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Marketplace</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Resources
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider" />
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </li>
                            </ul>
                        </li>
                        @auth
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="{{ url('/home') }}" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Dashboard
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                    </li>

                                </ul>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Login</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link btn btn-white" href="{{ route('register') }}">Sign Up</a>
                                </li>
                            @endif
                        @endauth

                    </ul>
                </div>
            </div>
        </nav>
    </header>
    @endif

    <main>
        @yield('content')
    </main>

    <footer></footer>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
