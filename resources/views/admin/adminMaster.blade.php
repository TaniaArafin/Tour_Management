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
    <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
    <title>Admin | Vromon</title>
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
    <nav class="navbar navbar-expand-lg navbar-light bgLight shadow-sm" style="background-color: #f1f1f1">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img src="{{url('/img/logo.jpg')}}" class="p-2 bgLight rounded-circle shadow-sm" alt="" width="40" height="40" loading="lazy">
                <span class="p-1 rounded-3 ms-2 shadow-sm" style="background-color: #ffffff">
                    <span class="semiBoldText border-end px-3">Vromon</span>
                    <span class="semiBoldText px-2">Admin Dashboard</span>
                </span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse ms-md-3 justify-content-end" id="navbarSupportedContent">
                <div class="col-md-5 col-12">
                    <div class="row justify-content-end">
                        <div class="px-1 col-md-6 col-12 text-center my-md-0 my-2">
                            <a href="#" class="mx-2">
                                <i class="bi bi-instagram socialLinks"></i>
                            </a>
                            <a href="#" class="mx-2">
                                <i class="bi bi-linkedin socialLinks"></i>
                            </a>
                            <a href="#" class="mx-2">
                                <i class="bi bi-facebook socialLinks"></i>
                            </a>
                            <a href="#" class="mx-2">
                                <i class="bi bi-youtube socialLinks"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12 align-middle">
                    <form action="POST" class="d-flex justify-content-center my-auto align-middle">
                        <input type="text" class="form-control px-2 py-1 w-75 me-2  align-middle" placeholder="Search">
                        <button type="submit" class="btn bgPrimary shadow-sm  align-middle">
                            <i class="bi bi-search textLight"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </nav>
    @yield('content')
</body>
</html>