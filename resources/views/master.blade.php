<?php
    //use App\Http\Controllers\ProductController;
    use Illuminate\Support\Facades\Auth;
    //$totalItem = ProductController::cartItem();

    if(Auth::check()) {
      $username = Auth::user()->name;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com"> 
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <title>Vromon</title>

    <style>
        body {
            font-family: Montserrat;
        }

        .semiBoldText {
            font-family: Montserrat;
            font-weight: 600;
        }

        .boldText {
            font-family: Montserrat;
            font-weight: 700;
        }

        .mediumText {
            font-family: Montserrat;
            font-weight: 500;
        }

        a {
            text-decoration: none;
        }

        .textPrimary {
            color: #ea5d11;
        }

        .textSecondery {
            color: #ffffff;
        }

        .textLight {
            color: #ffffff;
        }

        .borderPrimary {
            border: 2px solid #ea5d11;
        }

        .bgPrimary {
            background-color: #ea5d11;
        }

        .bgLight {
            background-color: #ffffff;
        }

        .socialLinks {
            color: #b4b4b4;
            cursor: pointer;
            transition: 0.2s;
        }

        .socialLinks:hover {
            color: #525252;
        }

        .bannerImage {
            object-fit: cover;
            width: 100%;
            height: 65vh;
        }

    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bgLight shadow-sm">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img src="{{url('/img/logo.jpg')}}" class="align-middle" alt="" width="40" height="40" loading="lazy">
                <span class="boldText align-middle textPrimary">VROMON</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse ms-xl-3" id="navbarSupportedContent">
                <ul class="col-xl-4 navbar-nav me-auto mb-2 mb-lg-0 mediumText">
                    <li class="nav-item text-xl-start text-center">
                        <a class="nav-link" aria-current="page" href="/aboutus">About us</a>
                    </li>
                    <li class="nav-item text-xl-start text-center">
                        <a class="nav-link" aria-current="page" href="/allPackages">Packeges</a>
                    </li>
                    <li class="nav-item text-xl-start text-center">
                        <a class="nav-link" aria-current="page" href="#">Contact</a>
                    </li>
                </ul>
                <div class="col-xl-2 col-12">
                    <div class="row justify-content-center justify-content-xl-end px-3 my-2 my-xl-0">
                        <div class="col-2">
                            <a href="#">
                                <i class="bi bi-instagram socialLinks"></i>
                            </a>
                        </div>
                        <div class="col-2">
                            <a href="#">
                                <i class="bi bi-linkedin socialLinks"></i>
                            </a>
                        </div>
                        <div class="col-2">
                            <a href="#">
                                <i class="bi bi-facebook socialLinks"></i>
                            </a>
                        </div>
                        <div class="col-2">
                            <a href="#">
                                <i class="bi bi-youtube socialLinks"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-12 align-middle">
                    <form action="search" method="GET" class="d-flex justify-content-center my-auto align-middle">
                        <input type="text" class="form-control px-2 py-1 w-75 me-2  align-middle semiBoldText" placeholder="Search">
                        <button type="submit" class="btn bgPrimary shadow-sm  align-middle">
                            <i class="bi bi-search textLight"></i>
                        </button>
                    </form>
                </div>
                @if (Route::has('login'))
                  <div class="semiBoldText ms-3 my-xl-0 my-2 ms-xl-0 text-center">
                      @auth
                        <div class="dropdown">
                            <button class="btn dropdown-toggle btn-sm semiBoldText textPrimary" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            {{$username}}
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end mt-1 mt-xl-2 shadow" aria-labelledby="dropdownMenuButton1" style="font-size: 0.8rem">
                                <li><a class="dropdown-item semiBoldText" href="/profile">Profile</a></li>
                                {{-- <li><a class="dropdown-item semiBoldText" href="{{ url('/user/profile') }}">Profile</a></li> --}}
                                <li>
                                    <form action="/logout" method="POST" class="dropdown-item m-0">
                                        @csrf
                                        <button type="submit" class="btn semiBoldText px-0 py-0" style="font-size: 0.8rem">Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                        {{-- <a href="{{ url('/user/profile') }}" class="textPrimary"></a> --}}
                      @else
                        <a href="{{ route('login') }}" class="textPrimary">Log in</a>
                        @if (Route::has('register'))
                          <a href="{{ route('register') }}" class="textPrimary">| Sign Up</a>
                        @endif
                      @endif
                  </div>
                @endif
            </div>
        </div>
    </nav>
    @yield('content')
    @include('footer')
</body>
</html>